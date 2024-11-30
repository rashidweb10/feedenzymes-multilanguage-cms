@php
    $content = json_decode($production->contents);
    $why_title = $content->why_title ?? null;
    $why_image = $content->why_image ?? null;
    $why_description = $content->why_description ?? null;
    $raw_image = $content->raw_image ?? null;  
    $raw_title = $content->raw_title ?? null;  
    $how_title = $content->how_title ?? null;
    $how_description = $content->how_description ?? null; 
    $you_title = $content->you_title ?? null;
    $you_description = $content->you_description ?? null;       
@endphp
<form id="edit" action="{{route('the-products.update', $production->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="language" value="{{languageSession()}}">
    <div class="row">
        <div class="col-md-12">
           <h5 class="text-info">Primary Section</h5>
        </div>       
        <div class="col-sm-12">
            <div class="form-group">
                <label>Name</label>
                <input value="{{ $production->name }}" name="name" type="text" class="form-control" minlength="3"
                    maxlength="50" required="">
            </div>
        </div>         
        <div class="col-md-12">
           <h5 class="text-info">Why Customize?</h5>
        </div>        
        <div class="col-sm-6">
            <div class="form-group">
                <label>Title</label>
                <input value="{{$why_title}}" name="why_title" type="text" class="form-control" minlength="3"
                    maxlength="255" required="">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Image @if(!empty($why_image)) <a target="_blank" href="{{asset($why_image)}}">View</a>
                    @endif</label>
                <input name="why_image" type="file" class="form-control" accept="image/*" @if(empty($why_image)) required @endif>
                <input value="{{$why_image}}" name="old_why_image" type="hidden">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description</label>
                <textarea name="why_description" class="form-control text-editor" minlength="3"
                     required>{{$why_description}}</textarea>
            </div>
        </div>     
        <div class="col-md-12">
           <h5 class="text-info mt-3">Enzyme - raw material specificity</h5>
        </div> 
        <div class="col-sm-6">
        <div class="form-group">
            <label>Title</label>
            <input value="{{$raw_title}}" name="raw_title" type="text" class="form-control" minlength="3"
                maxlength="255" required>
            </div>        
        </div>        
        <div class="col-sm-6">
            <div class="form-group">
                <label>Image @if(!empty($raw_image)) <a target="_blank" href="{{asset($raw_image)}}">View</a>
                    @endif</label>
                <input name="raw_image" type="file" class="form-control" accept="image/*" @if(empty($raw_image)) required @endif>
                <input value="{{$raw_image}}" name="old_raw_image" type="hidden">
            </div>
        </div> 
        <div class="col-md-12">
           <h5 class="text-info mt-3">How we Customize?</h5>
        </div>  
        <div class="col-sm-12">
            <div class="form-group">
                <label>Title</label>
                <input value="{{$how_title}}" name="how_title" type="text" class="form-control" minlength="3"
                    maxlength="255" required="">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description</label>
                <textarea name="how_description" class="form-control text-editor" minlength="3"
                     required>{{$how_description}}</textarea>
            </div>
        </div>    
        <div class="col-md-12">
           <h5 class="text-info mt-3">You Benefit</h5>
        </div>  
        <div class="col-sm-12">
            <div class="form-group">
                <label>Title</label>
                <input value="{{$you_title}}" name="you_title" type="text" class="form-control" minlength="3"
                    maxlength="255" required>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description</label>
                <textarea name="you_description" class="form-control text-editor" minlength="3"
                     required>{{$you_description}}</textarea>
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
    initValidate('#edit');
    initSelect2('.select2');
    initTextEditor();

    $("#edit").submit(function(e) {
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