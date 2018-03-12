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