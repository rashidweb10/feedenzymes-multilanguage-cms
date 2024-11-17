<form id="edit-product-category" action="{{route('product-categories.update', $category->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Name</label>
                <input value="{{ $category->name }}" name="name" type="text" class="form-control" minlength="3"
                    maxlength="50" required="">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Image @if(!empty($category->thumbnail_image)) <a target="_blank"
                        href="{{asset($category->thumbnail_image)}}">View</a> @endif</label>
                <input name="thumbnail_image" type="file" class="form-control">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Status</label>
                <select class="form-select select2" name="is_active" required>
                    <option value="1" @if($category->is_active == 1) selected @endif>Active</option>
                    <option value="0" @if($category->is_active == 0) selected @endif>Inactive</option>
                </select>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group text-right">
                <button type="submit" class="btn btn-sm btn-block btn-primary">Update</button>
            </div>
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    initValidate('#edit-product-category');
    initSelect2('.select2');

    $("#edit-product-category").submit(function(e) {
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