<form id="create-page" action="{{route('news.store')}}" method="POST">
    @csrf
    <input type="hidden" name="language" value="{{languageSession()}}">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Title</label>
                <input value="" name="name" type="text" class="form-control" minlength="3"
                    maxlength="200" required="">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Image </label>
                <input name="image" type="file" class="form-control" accept="image/*" required>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Year </label>
                <select name="year" class="form-control" required>
                    <option value="">--select--</option>
                    @foreach (getYears() as $year)
                        <option value="{{ $year }}" {{ $year == date('Y') ? 'selected' : '' }}>{{ $year }}</option>
                    @endforeach
                </select> 
            </div>
        </div>             
        <div class="col-sm-12">
            <div class="form-group">
                <label>Priority </label>
                <input step="1" name="series" type="number" class="form-control">
            </div>
        </div>  
        <div class="col-sm-12">
            <div class="form-group">
                <label>Status </label>
                <select name="status" class="form-control" required>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
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
    initValidate('#create-page');
    initSelect2('.select2');
    //initTextEditor();

    $("#create-page").submit(function(e) {
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