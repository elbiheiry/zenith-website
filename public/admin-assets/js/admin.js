//submit form using ajax
$(document).on('submit' , '.ajax-form' , function () {
    var form = $(this);
    var url = form.attr('action');
    var formData = new FormData(form[0]);
    form.find(":submit").attr('disabled' , true).html('Please wait <i class="fa fa-long-arrow-alt-right"></i>');

    $.ajax({
        url : url,
        method : 'POST',
        dataType: 'json',
        data : formData,
        contentType:false,
        cache: false,
        processData:false,
        success : function (response) {
            notification("success", response ,"fas fa-check");
            setTimeout(function () {
                window.location.reload();
            }, 2000);
        },
        error : function (jqXHR) {
            var response = $.parseJSON(jqXHR.responseText);
            notification("danger", response ,"fas fa-times");
            form.find(":submit").attr('disabled' , false).html('Save Change <i class="fa fa-long-arrow-alt-right"></i>');
        }
    });
    $.ajaxSetup({
        headers:
            {
                'X-CSRF-Token': $('input[name="_token"]').val()
            }
    });
    return false;
});

//open edit form in model
$(document).on('click', '.btn-modal-view', function() {
    var $this = $(this);
    var url = $this.data('url');
    var originalHtml = $this.html();

    $.ajax({
        url: url,
        method: 'GET',
        success: function(data) {
            $this.prop('disabled', false).html(originalHtml);
            $('#common-modal').modal('show');
            $('#edit-area').html(data);
        }
    });
});

//load more button
$(document).on('click', '#load-more-button', function() {

    var button = $(this);
    var url = button.data('url');
    var last_page = parseInt($(this).attr('data-last'));
    var counter = parseInt($(this).attr('data-count')) + 1;

    $.ajax({
        url: url,
        method: 'GET',
        data: {
            page: counter,
            _token: $('input[name="_token"]').val()
        },
        success: function(response) {
            button.attr('data-count', counter);
            if (counter + 1 > last_page) {
                button.css('display', 'none');
            }
            $('#load-area').append(response);

        }
    });
    return false;
});

//add delete url to form
$(document).on('click', '.delete-btn', function() {
    var url = $(this).data('url');

    $('#delete-form').attr('action', url);
    $('#delete').modal('show');
});

//bootstrap notify
function notification(type, message ,icon) {
    var content = {};

    content.message = message;
    content.icon = icon;

    var notify = $.notify(content, {
        type: type,
        allow_dismiss: false,
        newest_on_top: true,
        mouse_over: true,
        spacing: 10,
        timer: 2000,
        placement: {
            from: 'bottom',
            align: $('html').attr('lang') == 'ar' ? "left" :  "right" // isRTL() ? 'left' :
        },
        offset: {
            x: 10,
            y: 10
        },
        delay: 1000,
        z_index: 99999999,
        animate: {
            enter: "animated fadeInUp",
            exit: "animated fadeOutDown"
        }
    });
}

/* Upload Button
==============================*/
$(document).ready(function () {
    "use strict";
    $('.uplaod-wrap .button').click(function () {
        $(".uplaod-wrap input[type='file']").trigger('click');
    });
    $("input[type='file']").change(function () {
        $(this).parent('.uplaod-wrap').find('.path').text(this.value.replace(/C:\\fakepath\\/i, ''))
    });
});

/***************************************************************************
 * identify Tinymce
 **************************************************************************/
 if (typeof tinymce !== "undefined") {
    /*Text area Editors
     =========================*/
    tinymce.PluginManager.add('my-example-plugin', function (editor) {
        editor.ui.registry.addMenuItem('image', {
            icon: 'image',
            text: 'Image',
            onAction: function () {
            console.log('context menu clicked');
                alert('context menu clicked');
            }
        });
    
        editor.ui.registry.addContextMenu('image', {
            update: function (element) {
                return !element.src ? '' : 'image';
            }
        });
    });

    tinymce.init({
        selector: '.tiny-editor',
        height: 350,
        theme: 'modern',
        contextmenu: 'image',
        plugins: [
            'my-example-plugin',
            'advlist autolink lists link image charmap print preview anchor textcolor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table',
            'code directionality'
        ],
        font_formats: "Arial=roboto,sans-serif,arial,helvetica ; Arial Black=arial black,avant garde; Comic Sans MS=comic sans ms,sans-serif; Helvetica=helvetica; Tahoma=tahoma,arial,helvetica,sans-serif; Verdana=verdana,geneva",
        setup : function(ed)
        {
            ed.on('init', function() 
            {
                this.getDoc().body.style.fontSize = '12';
                this.getDoc().body.style.fontFamily = 'roboto';
            });
        },
        fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
        toolbar: 'undo redo | code | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image |sizeselect forecolor backcolor | bold italic | fontselect |  fontsizeselect | ltr rtl',
        // enable title field in the Image dialog
        image_title: true,
        // enable automatic uploads of images represented by blob or data URIs
        automatic_uploads: true,
        // here we add custom filepicker only to Image dialog
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function () {
                    // Note: Now we need to register the blob in TinyMCEs image blob
                    // registry. In the next release this part hopefully won't be
                    // necessary, as we are looking to handle it internally.
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    // call the callback and populate the Title field with the file name
                    cb(blobInfo.blobUri(), { title: file.name });
                };
                reader.readAsDataURL(file);
            };

            input.click();
        }
    });
}
$('.approve-btn').on('click', function() {
    var url = $(this).data('url');

    window.location.href = url;
});
