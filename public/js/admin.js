// START : FUNCTION
    function readURL(input,item) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                item.removeClass('m--hide');
                item.attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
// END : FUNCTION
// START : ROUTE
    var routeGetSlugAuthor = $('#routeGetSlugAuthor').val();
    var routeGetSlugTranslateGroup = $('#routeGetSlugTranslateGroup').val();
    var routeGetSlugCategory = $('#routeGetSlugCategory').val();
    var routeGetSlugManga = $('#routeGetSlugManga').val();
    var routeGetSlugChapter = $('#routeGetSlugChapter').val();
    var routeAjaxManga = $('#routeAjaxManga').val();
    var routeAjaxChapter = $('#routeAjaxChapter').val();
    var routeAjaxStoreChapter = $('#routeAjaxStoreChapter').val();
// END : ROUTE
// START : view_author_create, view_author_edit
    $('textarea#author_description').maxlength({
        threshold: 5,
        warningClass: "m-badge m-badge--primary m-badge--rounded m-badge--wide",
        limitReachedClass: "m-badge m-badge--brand m-badge--rounded m-badge--wide"
    });
    $('#view_create_input_author_cover').change(function(){
        var item = $('#view_create_img_author_cover');
        readURL(this,item);
    });
    $('#author_name').change(function(e){
        e.preventDefault();
        var author_name = $('#author_name').val();
        $.ajax({
          data: {
              author_name: author_name
          },
           type: 'post',
           url: routeGetSlugAuthor,
           success: function (rsp) {
               if(rsp.author_slug)
               {
                   $('#author_slug').val(rsp.author_slug);
               }
           }
        });
    });

// END : view_author_create
// START : view_author_list
    $('.author_delete').each((i,v)=>{
        $(v).click(()=>{
            $('#modal_author_delete').modal('show');
            $('#modal_author_delete_content').html('Bạn có chắc chắn muốn xóa tác giả <strong>'+ $(v).attr('author_name')+'</strong> không?');
            $('#modal_author_delete_button').attr('href',$(v).attr('value'));
        });

    });
// END : view_author_list
// START : view_translate_group_create, view_translate_group_edit
    $('textarea#group_description').maxlength({
        threshold: 5,
        warningClass: "m-badge m-badge--primary m-badge--rounded m-badge--wide",
        limitReachedClass: "m-badge m-badge--brand m-badge--rounded m-badge--wide"
    });
    $('#view_create_input_group_cover').change(function(){
        var item = $('#view_create_img_group_cover');
        readURL(this,item);
    });
    $('#group_name').change(function(e){
        e.preventDefault();
        var group_name = $('#group_name').val();
        $.ajax({
            data: {
                group_name: group_name
            },
            type: 'post',
            url: routeGetSlugTranslateGroup,
            success: function (rsp) {
                if(rsp.group_slug)
                {
                    $('#group_slug').val(rsp.group_slug);
                }
            }
        });
    });
    $('#group_select_user').select2();
// END : view_translate_group_create, view_translate_group_edit
// START : view_translate_group_list
$('.group_delete').each((i,v)=>{
    $(v).click(()=>{
        $('#modal_translate_group_delete').modal('show');
        $('#modal_translate_group_delete_content').html('Bạn có chắc chắn muốn xóa nhóm dịch <strong>'+ $(v).attr('group_name')+'</strong> không?');
        $('#modal_translate_group_delete_button').attr('href',$(v).attr('value'));
    });
});
// END : view_translate_group_list
// START : view_category_create, view_category_edit
    $('#category_name').change(function(e){
        e.preventDefault();
        var category_name = $('#category_name').val();
        $.ajax({
            data: {
                category_name: category_name
            },
            type: 'post',
            url: routeGetSlugCategory,
            success: function (rsp) {
                if(rsp.category_slug)
                {
                    $('#category_slug').val(rsp.category_slug);
                }
            }
        });
    });
// END : view_category_create, view_category_edit
// START : view_category_list
$('.category_delete').each((i,v)=>{
    $(v).click(()=>{
        $('#modal_category_delete').modal('show');
        $('#modal_category_delete_content').html('Bạn có chắc chắn muốn xóa thể loại <strong>'+ $(v).attr('category_name')+'</strong> không?');
        $('#modal_category_delete_button').attr('href',$(v).attr('value'));
    });
});
// END : view_category_list
// START : view_manga_create, view_manga_edit
    $('#author_id').select2();
    $('#category_id').select2();
    $('#group_id').select2();
    $('#manga_name').change(function(e){
        e.preventDefault();
        var manga_name = $('#manga_name').val();
        $.ajax({
            data: {
                manga_name: manga_name
            },
            type: 'post',
            url: routeGetSlugManga,
            success: function (rsp) {
                if(rsp.manga_slug)
                {
                    $('#manga_slug').val(rsp.manga_slug);
                }
            }
        });
    });
    $('#view_create_input_manga_cover').change(function(){
        var item = $('#view_create_img_manga_cover');
        readURL(this,item);
    });
    $('textarea#manga_description').maxlength({
        threshold: 5,
        warningClass: "m-badge m-badge--primary m-badge--rounded m-badge--wide",
        limitReachedClass: "m-badge m-badge--brand m-badge--rounded m-badge--wide"
    });
    $('#author_id').on('select2:select', function (e) {
        mApp.block('.div_author', {overlayColor: '#fff',opacity: 0.5});
        let author_id = e.params.data.id;
        let manga_id = $('#manga_id').val();
        $.ajax({
            data: {
                author_id: author_id,
                manga_id: manga_id,
                action: 'create'
            },
            type: 'post',
            url: routeAjaxManga,
            success: function (rsp) {
                if(rsp.status)
                {
                    mApp.unblock('.div_author');
                }
            }
        });
    });
    $('#author_id').on('select2:unselect', function (e) {
        mApp.block('.div_author', {overlayColor: '#fff',opacity: 0.5});
        let author_id = e.params.data.id;
        let manga_id = $('#manga_id').val();
        $.ajax({
            data: {
                author_id: author_id,
                manga_id: manga_id,
                action: 'delete'
            },
            type: 'post',
            url: routeAjaxManga,
            success: function (rsp) {
                if(rsp.status)
                {
                    mApp.unblock('.div_author');
                }
            }
        });
    });
    $('#category_id').on('select2:select', function (e) {
        mApp.block('.div_category', {overlayColor: '#fff',opacity: 0.5});
        let category_id = e.params.data.id;
        let manga_id = $('#manga_id').val();
        $.ajax({
            data: {
                category_id: category_id,
                manga_id: manga_id,
                action: 'create'
            },
            type: 'post',
            url: routeAjaxManga,
            success: function (rsp) {
                if(rsp.status)
                {
                    mApp.unblock('.div_category');
                }
            }
        });
    });
    $('#category_id').on('select2:unselect', function (e) {
        mApp.block('.div_category', {overlayColor: '#fff',opacity: 0.5});
        let category_id = e.params.data.id;
        let manga_id = $('#manga_id').val();
        $.ajax({
            data: {
                category_id: category_id,
                manga_id: manga_id,
                action: 'delete'
            },
            type: 'post',
            url: routeAjaxManga,
            success: function (rsp) {
                if(rsp.status)
                {
                    mApp.unblock('.div_category');
                }
            }
        });
    });
    $('#group_id').on('select2:select', function (e) {
        mApp.block('.div_group', {overlayColor: '#fff',opacity: 0.5});
        let group_id = e.params.data.id;
        let manga_id = $('#manga_id').val();
        $.ajax({
            data: {
                group_id: group_id,
                manga_id: manga_id,
                action: 'create'
            },
            type: 'post',
            url: routeAjaxManga,
            success: function (rsp) {
                if(rsp.status)
                {
                    mApp.unblock('.div_group');
                }
            }
        });
    });
    $('#group_id').on('select2:unselect', function (e) {
        mApp.block('.div_group', {overlayColor: '#fff',opacity: 0.5});
        let group_id = e.params.data.id;
        let manga_id = $('#manga_id').val();
        $.ajax({
            data: {
                group_id: group_id,
                manga_id: manga_id,
                action: 'delete'
            },
            type: 'post',
            url: routeAjaxManga,
            success: function (rsp) {
                if(rsp.status)
                {
                    mApp.unblock('.div_group');
                }
            }
        });
    });
// END : view_manga_create, view_manga_edit
// START : view_manga_list
$('.manga_delete').each((i,v)=>{
    $(v).click(()=>{
        $('#modal_manga_delete').modal('show');
        $('#modal_manga_delete_content').html('Bạn có chắc chắn muốn xóa truyện <strong>'+ $(v).attr('manga_name')+'</strong> không?');
        $('#modal_manga_delete_button').attr('href',$(v).attr('value'));
    });
});
// END : view_manga_list
// START : view_manga_create, view_manga_edit
    $('#div_chapter').sortable({
        update: function (event, ui) {
            $('#button_sort_chapter').removeClass('m--hide');

        }
    });
    $('#manga_select').select2();
    $('#button_sort_chapter').click(function (e) {
        mApp.block('#div_chapter',{overlayColor: '#fff',opacity: 0.5});
        let name_arr = [];
        $('.div_chapter_img').each((i,v)=>{
           name_arr.push($(v).attr('data'));
        });
        $.ajax({
            data: {
                name_arr: name_arr,
                action: "sort_chapter"
            },
            type: 'post',
            url: routeAjaxStoreChapter,
            success: function (rsp) {
                $('#button_sort_chapter').addClass('m--hide');
                mApp.unblock('#div_chapter');
            },
            error: function (e) {
                mApp.unblock('#div_chapter');
                toastr.error("Đã xảy ra lỗi!", "Thông báo",{
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                });
            }
        });
    });

    $('#view_create_input_chapter').change(function (e) {
        e.preventDefault();

        for(let i = 0;i < $(this).get(0).files.length; i++)
        {
            var size = $(this).get(0).files[i].size;
            var src = window.URL.createObjectURL($(this).get(0).files[i]);
            var newElement = `<div class="col-2 text-center div_chapter_img chapter_${size}">
                                    <img class="m--margin-top-5 m--margin-bottom-5" src="${src}" width="100%" height="119" alt="${$(this).get(0).files[i].name}">
                                    <button onclick="removeImage(this)" type="button" class="btn-custom">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                </div>`;
            $('#div_chapter').append(newElement);
            mApp.block('.chapter_' + size);

            let chapter_path = $('#chapter_path').val();
            let chapter_id = $('#chapter_id').val();
            let fB = new FormData();
            fB.append("action", "upload_image");
            fB.append("chapter_path", chapter_path);
            fB.append("chapter_id", chapter_id);
            fB.append("chapter_img", $(this).get(0).files[i]);

            $.ajax({
                data: fB,
                type: 'post',
                url: routeAjaxStoreChapter,
                processData: false,
                contentType: false,
                success: function (rsp) {
                    mApp.unblock('.chapter_' + rsp.chapter_serial);
                    $('.chapter_' + rsp.chapter_serial).attr('data',rsp.chapter_manga);
                    $('.chapter_' + rsp.chapter_serial).removeClass('chapter_' + rsp.chapter_serial);
                },
                error: function (e) {
                    $('.chapter_' + size).remove();
                }
            });
        }
        $('#view_create_input_chapter').val('');
    });
    function  removeImage(e) {
        $(e).parent().remove();
        let id = $(e).parent().attr('data');
        // debugger;

        $.ajax({
            data: {
                action: "delete_image",
                chapter_manga: id
            },
            type: 'post',
            url: routeAjaxStoreChapter,
            success: function (rsp) {

            }

        })

    }

    $('#chapter_name').change(function(e){
        e.preventDefault();
        var chapter_name = $('#chapter_name').val();
        $.ajax({
            data: {
                chapter_name: chapter_name
            },
            type: 'post',
            url: routeGetSlugChapter,
            success: function (rsp) {
                if(rsp.chapter_slug)
                {
                    $('#chapter_slug').val(rsp.chapter_slug);
                }
            }
        });
    });
    var img_arr = $('#chapter_img_arr').val();
    var jsonData = JSON.parse(img_arr);
    console.log(jsonData.length);
    for(let i = 0 ; i < jsonData.length ; i++)
    {
        var src = '/panel/chapter/stream/'+jsonData[i]['chapter_image_url']+'/'+jsonData[i]['chapter_image_name'];
        $('#div_chapter_img_'+jsonData[i]['id']).attr('src',src);
        function loadImg()
        {

        }
    }


// END : view_manga_create, view_manga_edit
// START : view_chapter_list
$('.chapter_delete').each((i,v)=>{
    $(v).click(()=>{
        $('#modal_chapter_delete').modal('show');
        $('#modal_chapter_delete_content').html('Bạn có chắc chắn muốn xóa chương <strong>'+ $(v).attr('chapter_name')+'</strong> không?');
        $('#modal_chapter_delete_button').attr('href',$(v).attr('value'));
    });
});
// END : view_chapter_list