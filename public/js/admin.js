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
    var routeAjaxManga = $('#routeAjaxManga').val();
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
