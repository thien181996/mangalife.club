<?php

namespace App\Http\Controllers;

use App\Module;
use App\ModuleAction;
use App\RoleUser;
use Illuminate\Support\Facades\Auth;
use Storage;
use File;


class lib
{
    public function getStreamGoogleDrive($fileDir, $fileName)
    {
        $filename = $fileName;
        // Get file listing...
        $dir = $fileDir;
        $recursive = false; // Get subdirectories also?
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));
        // Get file details...
        $file = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first(); // there can be duplicate file names!
        //return $file; // array with file info
        // Store the file locally...
        //$readStream = Storage::cloud()->getDriver()->readStream($file['path']);
        //$targetFile = storage_path("downloaded-{$filename}");
        //file_put_contents($targetFile, stream_get_contents($readStream), FILE_APPEND);
        // Stream the file to the browser...
        $readStream = Storage::cloud()->getDriver()->readStream($file['path']);
        return response()->stream(function () use ($readStream) {
            fpassthru($readStream);
        }, 200, [
            'Content-Type' => $file['mimetype'],
            //'Content-disposition' => 'attachment; filename="'.$filename.'"', // force download?
        ]);
    }

    public function createFolderGoogleDrive($folderDir,$folderName)
    {
        $dir = $folderDir;
        $recursive = false; // Get subdirectories also?
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));
        $dir = $contents->where('type', '=', 'dir')
            ->where('filename', '=', $folderName)
            ->first(); // check trùng lặp folder
//        dd($dir['path']);
                if (!$dir) {
            Storage::cloud()->makeDirectory($folderDir.'/'.$folderName);
            return true;
        }
    }

    public function getBaseNameFolderGoogleDrive($path, $folderName)
    {
        $dir = $path;
        $recursive = false; // lấy tất cả các file tồn tại cả trong folder tính từ $dir
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));
        //return $contents->where('type', '=', 'dir'); // directories
        $result = $contents->where('type', '=', 'dir')->where('filename','=',$folderName)->first();

        return $result['basename']; // files
    }

    public function moduleAccess()
    {
        $get_url_module = str_after(url()->current(),'/');
        $slice_str = explode('/',$get_url_module);
        $access = RoleUser::join('role_module','role_users.role_id','role_module.role_id')->where('user_id',Auth::id())->get();
        $isModule = Module::where('module_name',$slice_str[2].'/'.$slice_str[3])->first();
//        dd($isModule);
        if($isModule)
        {
            $isAction = ModuleAction::where('action_name',$slice_str[4])->where('module_id',$isModule->id)->first();
        }

        foreach ($access as $permission)
        {
            if(empty($isModule)  && empty($isAction))
            {
                return false;
            } else {
                if(($isModule->id == $permission->module_id) && ($isAction->id == $permission->action_id))
                {
                    return true;
                }

            }
        }
    }

}
