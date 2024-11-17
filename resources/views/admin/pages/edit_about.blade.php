@php
   $content = json_decode($page->contents);
    $bannerTitle = $content->banner_title ?? null;
    $bannerImage = $content->banner_image ?? null;
    $bannerDescription = $content->banner_description ?? null;
    $aboutTitle = $content->about_title ?? null;
    $aboutImage = $content->about_image ?? null;
    $aboutDescription = $content->about_description ?? null;
    $tabsData = $content->tabs_data ?? [];   
@endphp
<form id="edit-page" action="{{route('pages.update', $page->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
           <h5 class="text-info">Banner Section</h5>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Name</label>
                <input readonly value="{{ $page->name }}" name="name" type="text" class="form-control" minlength="3"
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
                <input name="banner_image" type="file" class="form-control" accept="image/*">
                <input value="{{$bannerImage}}" name="old_banner_image" type="hidden">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description</label>
                <textarea name="banner_description" class="form-control text-editor" minlength="3"
                     required="">{{$bannerDescription}}</textarea>
            </div>
        </div>
        <div class="col-md-12">
           <h5 class="text-info">About Section</h5>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Title</label>
                <input value="{{$aboutTitle}}" name="about_title" type="text" class="form-control" minlength="3"
                    maxlength="255" required="">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Image @if(!empty($aboutImage)) <a target="_blank" href="{{asset($aboutImage)}}">View</a>
                    @endif</label>
                <input name="about_image" type="file" class="form-control" accept="image/*">
                <input value="{{$aboutImage}}" name="old_about_image" type="hidden">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description</label>
                <textarea name="about_description" class="form-control text-editor" minlength="3"
                     required="">{{$aboutDescription}}</textarea>
            </div>
        </div>
        <div class="col-md-12">
           <h5 class="text-info">Tabs Section</h5>
        </div>        
        <div class="col-sm-12">
            <div class="form-group">
                <label>Tab Information</label>
                <div id="tab-container">
                    @if(isset($tabsData) && !empty($tabsData))
                    @foreach($tabsData as $index => $row)
                        <div class="row" id="tab-{{ $index }}">                       
                            <div class="form-group col-md-2">
                                <input type="hidden" name="tab_index[]" value="{{ $index }}">
                                <input type="text" name="tab_alias[]" value="{{ $row->tab_alias }}" class="form-control"
                                    placeholder="Alias" required>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" name="tab_title[]" value="{{ $row->tab_title }}" class="form-control"
                                    placeholder="Title" required>
                            </div>
                            <div class="form-group col-md-3">
                                <input name="tab_image[]" type="file" class="form-control" accept="image/*">
                                <label class="mt-0 mb-0">@if(!empty($row->tab_image)) <a target="_blank" href="{{asset($row->tab_image)}}">View</a>
                                @endif</label>
                                <input value="{{$row->tab_image}}" name="old_tab_image[]" type="hidden">
                            </div>                       
                            <div class="form-group col-md-3">
                                <textarea name="tab_description[]" class="form-control text-editor" minlength="3"
                                        required="">{{ $row->tab_description }}</textarea>
                            </div>                        
                            <div class="form-group col-md-1">
                                <button type="button" class="btn btn-block btn-danger remove-tab"
                                        data-id="{{ $index }}"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <div class="row" id="tab-0">                       
                        <div class="form-group col-md-2">
                            <input type="hidden" name="tab_index[]" value="0">
                            <input type="text" name="tab_alias[]" value="" class="form-control"
                                placeholder="Alias" required>
                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" name="tab_title[]" value="" class="form-control"
                                placeholder="Title" required>
                        </div>
                        <div class="form-group col-md-3">
                            <input name="tab_image[]" type="file" class="form-control" accept="image/*">
                            <input value="" name="old_tab_image[]" type="hidden">
                        </div>                       
                        <div class="form-group col-md-3">
                            <textarea name="tab_description[]" class="form-control text-editor" minlength="3"
                                 required=""></textarea>
                        </div>                        
                        <div class="form-group col-md-1">
                            <button type="button" class="btn btn-block btn-danger remove-tab"
                                data-id="0"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    @endif
                </div>
                <button type="button" class="btn btn-sm btn-success mt-2" id="add-tab"><i class="fa fa-plus"
                        aria-hidden="true"></i> Add More</button>
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
    initSelect2('.select2');
    initTextEditor();

    var variationIndex = '{{count($tabsData) - 1}}';
    $('#add-tab').on('click', function() {
        variationIndex++;
        $('#tab-container').append(
            `<div class="row" id="tab-${variationIndex}">            
                <div class="form-group col-md-2">
                    <input type="hidden" name="tab_index[]" value="${variationIndex}">
                    <input type="text" name="tab_alias[]" value="" class="form-control"
                        placeholder="Alias" required>
                </div>
                <div class="form-group col-md-3">
                    <input type="text" name="tab_title[]" value="" class="form-control"
                        placeholder="Title" required>
                </div>
                <div class="form-group col-md-3">
                    <input name="tab_image[]" type="file" class="form-control" accept="image/*">
                    <input value="" name="old_tab_image[]" type="hidden">
                </div>                       
                <div class="form-group col-md-3">
                    <textarea name="tab_description[]" class="form-control text-editor" minlength="3"
                            required=""></textarea>
                </div>                        
                <div class="form-group col-md-1">
                    <button type="button" class="btn btn-block btn-danger remove-tab"
                        data-id="${variationIndex}"><i class="fa fa-minus" aria-hidden="true"></i></button>
                </div>
            </div>`
        );
        initTextEditor();
    });

    $(document).on('click', '.remove-tab', function() {
        if ($('#tab-container .row').length > 1) {
            var id = $(this).data('id');
            $('#tab-' + id).remove();
        } else {
            toastr.error('You cannot delete the last remaining field.');
        }
    });

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