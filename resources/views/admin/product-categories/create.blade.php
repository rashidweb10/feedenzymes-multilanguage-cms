<form id="create-product-category" action="{{route('product-categories.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control" minlength="3" maxlength="50" required="">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Image</label>
                <input name="thumbnail_image" type="file" class="form-control" required="">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Status</label>
                <select class="form-select select2" name="is_active" required>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
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
    initValidate('#create-product-category');
    initSelect2('.select2');

    $("#create-product-category").submit(function(e) {
        var form = $(this);
        ajaxSubmit(e, form, responseHandler_productCategory);
    });

    const responseHandler_productCategory = function(response) {
        $('.btn-close').click();
        setTimeout(function() {
            location.reload();
        }, 1500);
    }
});
</script>