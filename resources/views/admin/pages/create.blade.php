<form id="create-product" action="{{route('pages.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Category</label>
                <select class="form-select select2" name="category_id" required>
                    <option value="">--Select--</option>
                    @foreach($categories as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control" minlength="3" maxlength="50" required="">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Image</label>
                <input name="image" type="file" class="form-control" required="">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Status</label>
                <select class="form-select select2" name="is_active" required>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Variation</label>
                <div id="variation-container">
                    <!-- Dynamic variation fields will be appended here -->
                </div>
                <button type="button" class="btn btn-sm btn-success mt-2" id="add-variation"><i class="fa fa-plus"
                        aria-hidden="true"></i> Add Variation</button>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group text-right">
                <button type="submit" class="btn btn-sm btn-block btn-primary">Create</button>
            </div>
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    initValidate('#create-product');
    initSelect2('.select2');

    var variationIndex = 0;
    $('#add-variation').on('click', function() {
        variationIndex++;
        $('#variation-container').append(
            `<div class="row" id="variation-${variationIndex}">
                <div class="form-group col-md-5">
                    <input type="text" name="weight[]" class="form-control" placeholder="Weight" required>
                </div>
                <div class="form-group col-md-5">
                    <input type="text" name="price[]" class="form-control" placeholder="Price" required>
                </div>
                <div class="form-group col-md-2">
                    <button type="button" class="btn btn-block btn-danger remove-variation" data-id="${variationIndex}"><i class="fa fa-minus" aria-hidden="true"></i></button>
                </div>
            </div>`
        );
    });

    $('#add-variation').click();

    $(document).on('click', '.remove-variation', function() {
        if ($('#variation-container .row').length > 1) {
            var id = $(this).data('id');
            $('#variation-' + id).remove();
        } else {
            toastr.error('You cannot delete the last remaining field.');
        }
    });

    $("#create-product").submit(function(e) {
        var form = $(this);
        ajaxSubmit(e, form, responseHandler_product);
    });

    const responseHandler_product = function(response) {
        $('.btn-close').click();
        setTimeout(function() {
            location.reload();
        }, 1500);
    }
});
</script>