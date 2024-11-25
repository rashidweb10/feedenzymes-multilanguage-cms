<form id="edit-news" action="{{route('news.update', $news->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="language" value="{{languageSession()}}">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Title</label>
                <input value="{{$news->name}}" name="name" type="text" class="form-control" minlength="3"
                    maxlength="200" required="">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Image @if(!empty($news->image)) <a target="_blank" href="{{asset($news->image)}}">View</a>
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
                        <option value="{{ $year }}" {{ $news->year == $year ? 'selected' : '' }}>{{ $year }}</option>
                    @endforeach
                </select> 
            </div>
        </div>            
        
        <div class="col-sm-12">
            <div class="form-group">
                <label>Priority </label>
                <input step="1" name="series" type="number" value="{{$news->series}}" class="form-control">
            </div>
        </div>  
        
        <div class="col-sm-12">
            <div class="form-group">
                <label>Status </label>
                <select name="status" class="form-control" required>
                    <option value="active" {{ $news->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $news->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
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