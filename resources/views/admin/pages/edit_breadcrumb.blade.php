@php
   $content = json_decode($page->contents);
    $bannerTitle = $content->banner_title ?? null;
    $bannerImage = $content->banner_image ?? null;
    $bannerDescription = $content->banner_description ?? null; 
@endphp
<form id="edit-page" action="{{route('pages.update', $page->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="language" value="{{languageSession()}}">
    <div class="row">
        <div class="col-md-12">
           <h5 class="text-info">Inner Pages Breadcrumb Section</h5>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Name</label>
                <input value="{{ $page->name }}" name="name" type="text" class="form-control" minlength="3"
                    maxlength="50" required="">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Title</label>
                <input value="{{$bannerTitle}}" name="banner_title" type="text" class="form-control" minlength="3"
                    maxlength="255" required="">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Image @if(!empty($bannerImage)) <a target="_blank" href="{{asset($bannerImage)}}">View</a>
                    @endif</label>
                <input name="banner_image" type="file" class="form-control" accept="image/*" @if(empty($bannerImage)) required @endif>
                <input value="{{$bannerImage}}" name="old_banner_image" type="hidden">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description</label>
                <textarea name="banner_description" class="form-control" minlength="3"
                     required="" rows="4">{{$bannerDescription}}</textarea>
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
    initValidate('#edit-page');

    $("#edit-page").submit(function(e) {
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