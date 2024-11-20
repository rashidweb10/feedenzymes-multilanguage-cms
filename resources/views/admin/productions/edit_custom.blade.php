<form id="edit-news" action="{{route('news.update', $production->id)}}" method="POST">
    @csrf
    CCC
    @method('PUT')
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Title</label>
                <input value="{{$production->name}}" name="name" type="text" class="form-control" minlength="3"
                    maxlength="200" required="">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Image @if(!empty($production->image)) <a target="_blank" href="{{asset($production->image)}}">View</a>
                @endif</label>
                <input name="image" type="file" class="form-control" accept="image/*">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Year </label>
                <select name="year" class="form-control" required>
                    <option value="">--select--</option>
                    @foreach (getYears() as $year)
                        <option value="{{ $year }}" {{ $production->year == $year ? 'selected' : '' }}>{{ $year }}</option>
                    @endforeach
                </select> 
            </div>
        </div>            
        
        <div class="col-sm-12">
            <div class="form-group">
                <label>Priority </label>
                <input step="1" name="series" type="number" value="{{$production->series}}" class="form-control">
            </div>
        </div>  
        
        <div class="col-sm-12">
            <div class="form-group">
                <label>Status </label>
                <select name="status" class="form-control" required>
                    <option value="active" {{ $production->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $production->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
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
    initValidate('#edit-news');
    initSelect2('.select2');
    //initTextEditor();

    $("#edit-news").submit(function(e) {
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