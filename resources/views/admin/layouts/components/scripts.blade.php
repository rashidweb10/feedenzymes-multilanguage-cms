<!-- jQuery 
<script src="/assets/admin/js/jquery.min.js"></script>-->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>

<!-- Bootstrap 4 
<script src="/assets/admin/js/bootstrap.bundle.min.js"></script>-->

<!--Popper JS-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<!--Bootstarp 5-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- toastr js -->
<script src="/assets/admin/js/toastr.min.js"></script>

<!--jQuery Validate-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<!--select2 js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js"></script>

<!-- Datatable JS -->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

<!-- tinymce JS -->
<script src="https://cdn.tiny.cloud/1/oao7dvt6bwvrchihs4fuxq9hs7cx1gad1ogh6zjhouovy9ub/tinymce/7.2.1-75/tinymce.min.js">
</script>


<!-- AdminLTE App -->
<script src="/assets/admin/js/adminlte.min.js"></script>

<!--toastr notification Start-->
<script>
toastr.options = {
    "showHideTransition": 'plain',
    "closeButton": true,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "500",
    "timeOut": "7000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

//success flash message
@if(Session::has("nSuccess"))
Command: toastr["success"]('{{Session::get("nSuccess")}}', "Success");
@endif

//error flash message
@if(Session::has("nFailure"))
Command: toastr["error"]('{{Session::get("nFailure")}}', "Alert");
@endif

//warning flash message
@if(Session::has("nWarning"))
Command: toastr["warning"]('{{Session::get("nWarning")}}', "Warning");
@endif
</script>
<!--toastr notification End-->

<!--jQuery validate Start-->
<script>
function initValidate(selector) {
    $(selector).validate({
        errorElement: 'div',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },       // Custom rule to handle the 'required' class
        rules: {
            test: {
                required: function(element) {
                    return $(element).hasClass('required');
                }
            }
        }
    });
}
</script>
<!--jQuery validate End-->

<!--select2 Start-->
<script>
function initSelect2(selector) {
    $(selector).select2();
}
</script>
<!--select2 End-->

<!--ajax form submission Start-->
<script>
//Form Submition
function ajaxSubmit(e, form, callBackFunction) {
    if (form.valid()) {
        e.preventDefault();

        var btn = $(form).find('button[type="submit"]');
        var btn_text = $(btn).text();
        $(btn).html('<i class="fa-solid fa-arrows-spin fa-spin"></i>');
        $(btn).css('opacity', '0.7');
        $(btn).css('pointer-events', 'none');

        var action = form.attr('action');
        var form = e.target;
        var data = new FormData(form);
        $.ajax({
            type: "POST",
            url: action,
            processData: false,
            contentType: false,
            dataType: 'json',
            data: data,
            success: function(response) {

                $(btn).text(btn_text);
                $(btn).css('opacity', '1');
                $(btn).css('pointer-events', 'inherit');

                if (response.status) {
                    Command: toastr["success"](response.notification, "Success");
                    callBackFunction(response);
                }
                else {
                    Command: toastr["error"](response.notification, "Alert");
                }
            }
        });
    } else {
        toastr.error('Please make sure to fill all the necessary fields');
    }
}
</script>
<!--ajax form submission End-->

<!--Modal Scripts Start-->
<script>
function largeModal(url, header) {
    $("#largeModal .modal-body").html("Loading...");
    $("#largeModal .modal-title").html("Loading...");

    $("#largeModal").modal("show");
    $.ajax({
        url: url,
        success: function(response) {
            $("#largeModal .modal-body").html(response);
            $("#largeModal .modal-title").html(header);
        },
    });
}

function smallModal(url, header) {
    $("#smallModal .modal-body").html("Loading...");
    $("#smallModal .modal-title").html("Loading...");

    $("#smallModal").modal("show");
    $.ajax({
        url: url,
        success: function(response) {
            $("#smallModal .modal-body").html(response);
            $("#smallModal .modal-title").html(header);
        },
    });
}

function confirmModal(delete_url, param) {
    $("#confirmModal").modal("show");
    callBackFunction = param;
    document.getElementById("delete_form").setAttribute("action", delete_url);
}

$(document).ready(function() {
    $(".ajaxDeleteForm").submit(function(e) {
        var form = $(this);
        ajaxSubmit(e, form, callBackFunction);
    });
});

function closeModel() {
    //$('.modal .modal-body').html('');
    //$('.modal .modal-title').html('');
}

function closeConfirmModel() {
    $("#confirmModal").modal("hide");
}
</script>
<!--Modal Scripts End-->

<!--Datatable Scripts Start-->
<script>
$(document).ready(function() {
    $('.datatable').DataTable();
});
</script>
<!--Datatable Scripts End-->

<!--Summernote Scripts Start-->
<script>
$(document).ready(function() {
    initTextEditor();
});

function initTextEditor() {
    tinymce.init({
        selector: '.text-editor',
        height: 300, // Set the desired height
        plugins: 'anchor advlist autolink lists link image charmap preview hr pagebreak ' +
                'searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking ' +
                'save table directionality emoticons template paste help',
        toolbar: 'undo redo | formatselect | bold italic underline strikethrough | ' +
                'alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | ' +
                'link anchor image media | forecolor backcolor removeformat | ' +
                'preview code fullscreen | insertdatetime table emoticons | help',
        setup: function(editor) {
            editor.on('change', function() {
                editor.save(); // Ensure changes are saved
            });
        }
    });    
}

</script>
<!--Summernote Scripts End-->