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
    var toggleShow = false;
    function togglePassword(e)
    {
        if(toggleShow)
        {
            toggleShow = false;
            $('#password').attr('type','password');
            $('.la-eye').addClass('la-eye-slash');
            $('.la-eye-slash').removeClass('la-eye');
        } else {
            toggleShow = true;
            $('#password').attr('type','text');
            $('.la-eye-slash').addClass('la-eye');
            $('.la-eye').removeClass('la-eye-slash');
        }
    }
    function enableHide() {
        setInterval(function () {
            $('.div_search_hide').addClass('m--hide');
        },3000);

    }
    function editUser(e) {
        location.href = $(e).attr('data');
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
    var routeAjaxModuleAction = $('#routeAjaxModuleAction').val();
    var routeAjaxUser = $('#routeAjaxUser').val();
    var routeAjaxAuthor = $('#routeAjaxAuthor').val();
    var routeAjaxTranslateGroup = $('#routeAjaxTranslateGroup').val();
    var routeAjaxUploadChapter = $('#routeAjaxUploadChapter').val();
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
    $('.input-search-author').keyup(function (e) {
        $('.div_search').addClass('m-loader');
        $('.div_search_hide').removeClass('m--hide');
        let keyword = $(this).val();
        $.ajax({
            data: {
                keyword: keyword,
                action: "search"
            },
            type: 'post',
            url: routeAjaxAuthor,
            success: function (rsp) {
                // console.log(rsp.data);
                $('.div_search_hide').html('');
                for (let i = 0;i<rsp.data.length;i++)
                {
                    let email = rsp.data[i]['author_name'];
                    let replace_bold = email.replace(keyword,'<b>' + keyword + '</b>');
                    let element = `<span class="item-search" onclick="editUser(this)" data="/panel/author/edit/${rsp.data[i]['id']}">${replace_bold}</span>`;
                    // let element = `<a href="/panel/user/edit/${rsp.data[i]['id']}" class="item-search" >${replace_bold}</a>`;
                    $('.div_search_hide').append(element);
                }
                $('.div_search').removeClass('m-loader');
            },
            error: function (e) {
                $('.div_search_hide').html('');
                $('.div_search').removeClass('m-loader');
                $('.div_search_hide').addClass('m--hide');
            }
        })
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
    $('.input-search-group').keyup(function (e) {
        $('.div_search').addClass('m-loader');
        $('.div_search_hide').removeClass('m--hide');
        let keyword = $(this).val();
        $.ajax({
            data: {
                keyword: keyword,
                action: "search"
            },
            type: 'post',
            url: routeAjaxTranslateGroup,
            success: function (rsp) {
                // console.log(rsp.data);
                $('.div_search_hide').html('');
                for (let i = 0;i<rsp.data.length;i++)
                {
                    let email = rsp.data[i]['group_name'];
                    let replace_bold = email.replace(keyword,'<b>' + keyword + '</b>');
                    let element = `<span class="item-search" onclick="editUser(this)" data="/panel/translate_group/edit/${rsp.data[i]['id']}">${replace_bold}</span>`;
                    // let element = `<a href="/panel/user/edit/${rsp.data[i]['id']}" class="item-search" >${replace_bold}</a>`;
                    $('.div_search_hide').append(element);
                }
                $('.div_search').removeClass('m-loader');
            },
            error: function (e) {
                $('.div_search_hide').html('');
                $('.div_search').removeClass('m-loader');
                $('.div_search_hide').addClass('m--hide');
            }
        })
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
$('.input-search-manga').keyup(function (e) {
    $('.div_search').addClass('m-loader');
    $('.div_search_hide').removeClass('m--hide');
    let keyword = $(this).val();
    $.ajax({
        data: {
            keyword: keyword,
            action: "search"
        },
        type: 'post',
        url: routeAjaxManga,
        success: function (rsp) {
            // console.log(rsp.data);
            $('.div_search_hide').html('');
            for (let i = 0;i<rsp.data.length;i++)
            {
                let email = rsp.data[i]['manga_name'];
                let replace_bold = email.replace(keyword,'<b>' + keyword + '</b>');
                let element = `<span class="item-search" onclick="editUser(this)" data="/panel/manga/edit/${rsp.data[i]['id']}">${replace_bold}</span>`;
                // let element = `<a href="/panel/user/edit/${rsp.data[i]['id']}" class="item-search" >${replace_bold}</a>`;
                $('.div_search_hide').append(element);
            }
            $('.div_search').removeClass('m-loader');
        },
        error: function (e) {
            $('.div_search_hide').html('');
            $('.div_search').removeClass('m-loader');
            $('.div_search_hide').addClass('m--hide');
        }
    })
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
                url: routeAjaxUploadChapter,
                processData: false,
                contentType: false,
                success: function (rsp) {
                    mApp.unblock('.chapter_' + rsp.chapter_serial);
                    $('.chapter_' + rsp.chapter_serial).attr('data',rsp.chapter_manga);
                    $('.chapter_' + rsp.chapter_serial).removeClass('chapter_' + rsp.chapter_serial);
                },
                error: function (e) {
                    $('.chapter_' + size).remove();
                    if(e.responseJSON.errors.chapter_img[0] != undefined)
                    {
                        $('.chapter_img').html(e.responseJSON.errors.chapter_img[0]);
                    }
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
// START : view_comment_list
$('.comment_delete').each((i,v)=>{
    $(v).click(()=>{
        $('#modal_comment_delete').modal('show');
        $('#modal_comment_delete_content').html('Bạn có chắc chắn muốn xóa bình luận có nội dung <strong>'+ $(v).attr('comment_content')+'</strong> không?');
        $('#modal_comment_delete_button').attr('href',$(v).attr('value'));
    });
});
// END : view_comment_list
// START : view_comment_list
$('.rate_delete').each((i,v)=>{
    $(v).click(()=>{
        $('#modal_rate_delete').modal('show');
        $('#modal_rate_delete_content').html('Bạn có chắc chắn muốn xóa đánh giá này không?');
        $('#modal_rate_delete_button').attr('href',$(v).attr('value'));
    });
});
// END : view_comment_list
// START : view_notification_create
    $('#user_id').select2();
    $('textarea#mailbox_content').maxlength({
        threshold: 5,
        warningClass: "m-badge m-badge--primary m-badge--rounded m-badge--wide",
        limitReachedClass: "m-badge m-badge--brand m-badge--rounded m-badge--wide"
    });
// END : view_notification_create
// START : view_notification_list
$('.notification_delete').each((i,v)=>{
    $(v).click(()=>{
        $('#modal_notification_delete').modal('show');
        $('#modal_notification_delete_content').html('Bạn có chắc chắn muốn xóa thông báo này không?');
        $('#modal_notification_delete_button').attr('href',$(v).attr('value'));
    });
});
// END : view_notification_list
// START : view_action_edit
    $('#roles').select2();
    $('#roles').on('select2:select', function (e) {
        mApp.block('.div_set_role', {overlayColor: '#fff',opacity: 0.5});
        let role_id = e.params.data.id;
        let action_id = $('#action_id').val();
        let module_id = $('#module_id').val();
        $.ajax({
            data: {
                role_id: role_id,
                action_id: action_id,
                module_id: module_id,
                action: 'create'
            },
            type: 'post',
            url: routeAjaxModuleAction,
            success: function (rsp) {
                if(rsp.status)
                {
                    mApp.unblock('.div_set_role');
                }
            }
        });
    });
    $('#roles').on('select2:unselect', function (e) {
        mApp.block('.div_set_role', {overlayColor: '#fff',opacity: 0.5});
        mApp.block('.div_set_role', {overlayColor: '#fff',opacity: 0.5});
        let role_id = e.params.data.id;
        let action_id = $('#action_id').val();
        let module_id = $('#module_id').val();
        $.ajax({
            data: {
                role_id: role_id,
                action_id: action_id,
                module_id: module_id,
                action: 'delete'
            },
            type: 'post',
            url: routeAjaxModuleAction,
            success: function (rsp) {
                if(rsp.status)
                {
                    mApp.unblock('.div_set_role');
                }
            }
        });
    });
// END : view_action_edit
// START : view_user_edit
    $('input#password').maxlength({
        threshold: 5,
        warningClass: "m-badge m-badge--primary m-badge--rounded m-badge--wide",
        limitReachedClass: "m-badge m-badge--brand m-badge--rounded m-badge--wide"
    });
// END : view_user_edit
// START : view_user_list
$('.input-search-user').keyup(function (e) {
    $('.div_search').addClass('m-loader');
    $('.div_search_hide').removeClass('m--hide');
    let keyword = $(this).val();
    $.ajax({
        data: {
            keyword: keyword,
            action: "search"
        },
        type: 'post',
        url: routeAjaxUser,
        success: function (rsp) {
            // console.log(rsp.data);
            $('.div_search_hide').html('');
            for (let i = 0;i<rsp.data.length;i++)
            {
                let email = rsp.data[i]['email'];
                let replace_bold = email.replace(keyword,'<b>' + keyword + '</b>');
                let element = `<span class="item-search" onclick="editUser(this)" data="/panel/user/edit/${rsp.data[i]['id']}">${replace_bold}</span>`;
                // let element = `<a href="/panel/user/edit/${rsp.data[i]['id']}" class="item-search" >${replace_bold}</a>`;
                $('.div_search_hide').append(element);
            }
            $('.div_search').removeClass('m-loader');
        },
        error: function (e) {
            $('.div_search_hide').html('');
            $('.div_search').removeClass('m-loader');
            $('.div_search_hide').addClass('m--hide');
        }
    })
});
// END : view_user_list
// START : view_rate_list
    $('#select_manga_id').select2();
// END : view_rate_list
// START : view_module_list
    $('.module_delete').each((i,v)=>{
        $(v).click(()=>{
            $('#modal_module_delete').modal('show');
            $('#modal_module_delete_content').html('Bạn có chắc chắn muốn xóa module này, module bị xóa sẽ không thể truy cập được?');
            $('#modal_module_delete_button').attr('href',$(v).attr('value'));
        });
    });
// END : view_module_list