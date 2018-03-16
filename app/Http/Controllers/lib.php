<?php

namespace App\Http\Controllers;

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


}
