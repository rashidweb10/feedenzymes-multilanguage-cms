@php
    $content = json_decode($page->contents);
    $bannerTitle = $content->banner_title ?? null;
    $bannerImage = $content->banner_image ?? null;
    $bannerDescription = $content->banner_description ?? null;   
    $geventImage = $content->gevent_image ?? null;
    $geventDescription = $content->gevent_description ?? null;   
    $ueventDescription = $content->uevent_description ?? null; 
    $aboutSection = $content->p1_data ?? [];    
    $customProductSection = $content->p2_data ?? [];  
    $indivisualProductSection = $content->p3_data ?? [];  
    $p2_desc = $content->p2_desc ?? null;  
    $p3_desc = $content->p3_desc ?? null;  
@endphp
<form id="edit-page" action="{{route('pages.update', $page->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
           <h5 class="text-info mt-3">Banner Section</h5>
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
                <label>Video @if(!empty($bannerImage)) <a target="_blank" href="{{asset($bannerImage)}}">View</a>
                    @endif</label>
                <input name="banner_image" type="file" class="form-control" accept="video/*" @if(empty($bannerImage)) required @endif>
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
        <div class="col-md-12">
           <h5 class="text-info mt-3">About Section</h5>
        </div>   
        <div class="col-sm-12">
            <div class="form-group">
                <div id="p1-container">
                    @if(isset($aboutSection) && !empty($aboutSection))
                    @foreach($aboutSection as $index => $row)
                        <div class="row" id="p1-{{ $index }}">                       
                            <div class="form-group col-md-3">
                                <input type="hidden" name="p1_index[]" value="{{ $index }}">                               
                                <input type="text" name="p1_title[]" value="{{ $row->p1_title }}" class="form-control"
                                placeholder="Title" required>                  
                            </div>         
                            <div class="form-group col-md-3">
                                <input name="p1_image[]" type="file" class="form-control" accept="image/*">
                                <label class="mt-0 mb-0">@if(!empty($row->p1_image)) <a target="_blank" href="{{asset($row->p1_image)}}">View</a>
                                @endif</label>
                                <input value="{{$row->p1_image}}" name="old_p1_image[]" type="hidden">
                            </div>                                 
                            <div class="form-group col-md-5">
                                <textarea name="p1_description[]" class="form-control" minlength="3"
                                        required="" rows="4">{{ $row->p1_description }}</textarea>
                            </div>                        
                            <div class="form-group col-md-1">
                                <button type="button" class="btn btn-block btn-danger remove-p1"
                                        data-id="{{ $index }}"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <div class="row" id="p1-0">                       
                        <div class="form-group col-md-3">
                            <input type="hidden" name="p1_index[]" value="0">                               
                            <input type="text" name="p1_title[]" value="" class="form-control"
                            placeholder="Title" required>                  
                        </div>         
                        <div class="form-group col-md-3">
                            <input name="p1_image[]" type="file" class="form-control" accept="image/*" required>
                            <label class="mt-0 mb-0"></label>
                            <input value="" name="old_p1_image[]" type="hidden">
                        </div>                                 
                        <div class="form-group col-md-5">
                            <textarea name="p1_description[]" class="form-control" minlength="3"
                                    required="" rows="4"></textarea>
                        </div>                        
                        <div class="form-group col-md-1">
                            <button type="button" class="btn btn-block btn-danger remove-p1"
                                    data-id="0"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-sm btn-success mt-2" id="add-p1"><i class="fa fa-plus"
                    aria-hidden="true"></i> Add More</button>
                </div>
            </div>
        </div>
        <div class="col-md-12">
           <h5 class="text-info mt-3">Customize Product Section</h5>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description</label>
                <textarea name="p2_desc" class="form-control" minlength="3"
                     required="" rows="4">{{$p2_desc}}</textarea>
            </div>
        </div>          
        <div class="col-sm-12">
            <div class="form-group">
                <label>Information</label>
                <div id="p2-container">
                    @if(isset($customProductSection) && !empty($customProductSection))
                    @foreach($customProductSection as $index => $row)
                        <div class="row" id="p2-{{ $index }}">                       
                            <div class="form-group col-md-3">
                                <input type="hidden" name="p2_index[]" value="{{ $index }}">                               
                                <input type="text" name="p2_title[]" value="{{ $row->p2_title }}" class="form-control"
                                placeholder="Title" required>                  
                            </div>         
                            <div class="form-group col-md-3">
                                <input name="p2_image[]" type="file" class="form-control" accept="image/*">
                                <label class="mt-0 mb-0">@if(!empty($row->p2_image)) <a target="_blank" href="{{asset($row->p2_image)}}">View</a>
                                @endif</label>
                                <input value="{{$row->p2_image}}" name="old_p2_image[]" type="hidden">
                            </div>                                 
                            <div class="form-group col-md-5">
                                <textarea name="p2_description[]" class="form-control" minlength="3"
                                        required="" rows="4">{{ $row->p2_description }}</textarea>
                            </div>                        
                            <div class="form-group col-md-1">
                                <button type="button" class="btn btn-block btn-danger remove-p2"
                                        data-id="{{ $index }}"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <div class="row" id="p2-0">                       
                        <div class="form-group col-md-3">
                            <input type="hidden" name="p2_index[]" value="0">                               
                            <input type="text" name="p2_title[]" value="" class="form-control"
                            placeholder="Title" required>                  
                        </div>         
                        <div class="form-group col-md-3">
                            <input name="p2_image[]" type="file" class="form-control" accept="image/*" required>
                            <label class="mt-0 mb-0"></label>
                            <input value="" name="old_p2_image[]" type="hidden">
                        </div>                                 
                        <div class="form-group col-md-5">
                            <textarea name="p2_description[]" class="form-control" minlength="3"
                                    required="" rows="4"></textarea>
                        </div>                        
                        <div class="form-group col-md-1">
                            <button type="button" class="btn btn-block btn-danger remove-p2"
                                    data-id="0"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-sm btn-success mt-2" id="add-p2"><i class="fa fa-plus"
                    aria-hidden="true"></i> Add More</button>
                </div>
            </div>
        </div>
        <div class="col-md-12">
           <h5 class="text-info mt-3">Individual Product Section</h5>
        </div>  
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description</label>
                <textarea name="p3_desc" class="form-control" minlength="3"
                     required="" rows="4">{{$p3_desc}}</textarea>
            </div>
        </div>         
        <div class="col-sm-12">
            <div class="form-group">
                <label>Information</label>
                <div id="p3-container">
                    @if(isset($indivisualProductSection) && !empty($indivisualProductSection))
                    @foreach($indivisualProductSection as $index => $row)
                        <div class="row" id="p3-{{ $index }}">                       
                            <div class="form-group col-md-3">
                                <input type="hidden" name="p3_index[]" value="{{ $index }}">                               
                                <input type="text" name="p3_title[]" value="{{ $row->p3_title }}" class="form-control"
                                placeholder="Title" required>                  
                            </div>         
                            <div class="form-group col-md-3">
                                <input name="p3_image[]" type="file" class="form-control" accept="image/*">
                                <label class="mt-0 mb-0">@if(!empty($row->p3_image)) <a target="_blank" href="{{asset($row->p3_image)}}">View</a>
                                @endif</label>
                                <input value="{{$row->p3_image}}" name="old_p3_image[]" type="hidden">
                            </div>                                 
                            <div class="form-group col-md-5">
                                <textarea name="p3_description[]" class="form-control" minlength="3"
                                        required="" rows="4">{{ $row->p3_description }}</textarea>
                            </div>                        
                            <div class="form-group col-md-1">
                                <button type="button" class="btn btn-block btn-danger remove-p3"
                                        data-id="{{ $index }}"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <div class="row" id="p3-0">                       
                        <div class="form-group col-md-3">
                            <input type="hidden" name="p3_index[]" value="0">                               
                            <input type="text" name="p3_title[]" value="" class="form-control"
                            placeholder="Title" required>                  
                        </div>         
                        <div class="form-group col-md-3">
                            <input name="p3_image[]" type="file" class="form-control" accept="image/*" required>
                            <label class="mt-0 mb-0"></label>
                            <input value="" name="old_p3_image[]" type="hidden">
                        </div>                                 
                        <div class="form-group col-md-5">
                            <textarea name="p3_description[]" class="form-control" minlength="3"
                                    required="" rows="4"></textarea>
                        </div>                        
                        <div class="form-group col-md-1">
                            <button type="button" class="btn btn-block btn-danger remove-p3"
                                    data-id="0"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-sm btn-success mt-2" id="add-p3"><i class="fa fa-plus"
                    aria-hidden="true"></i> Add More</button>
                </div>
            </div>
        </div>        
        
        <div class="col-md-12">
           <h5 class="text-info mt-3">Global Events Section</h5>
        </div> 
        <div class="col-sm-12">
            <div class="form-group">
                <label>Video @if(!empty($geventImage)) <a target="_blank" href="{{asset($geventImage)}}">View</a>
                    @endif</label>
                <input name="gevent_image" type="file" class="form-control" accept="video/*" @if(empty($geventImage)) required @endif>
                <input value="{{$geventImage}}" name="old_gevent_image" type="hidden">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description</label>
                <textarea name="gevent_description" class="form-control" minlength="3"
                     required="" rows="4">{{$geventDescription}}</textarea>
            </div>
        </div>        
        <div class="col-md-12">
           <h5 class="text-info mt-3">Upcoming Events Section</h5>
        </div> 
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description</label>
                <textarea name="uevent_description" class="form-control" minlength="3"
                     required="" rows="4">{{$ueventDescription}}</textarea>
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


    var variationIndex = '{{count($aboutSection) > 0 ? (count($aboutSection) - 1) : 0}}';
    $('#add-p1').on('click', function() {
        variationIndex++;
        $('#p1-container').append(
            `<div class="row" id="p1-${variationIndex}">            
                <div class="form-group col-md-3">
                    <input type="hidden" name="p1_index[]" value="${variationIndex}">                   
                    <input type="text" name="p1_title[]" value="" class="form-control"
                    placeholder="Title" required>                     
                </div>    
                <div class="form-group col-md-3">
                    <input name="p1_image[]" type="file" class="form-control" accept="image/*">
                    <label class="mt-0 mb-0"></label>
                    <input value="" name="old_p1_image[]" type="hidden">
                </div>                                     
                <div class="form-group col-md-5">
                    <textarea name="p1_description[]" class="form-control" minlength="3"
                            required="" rows="4"></textarea>
                </div>                        
                <div class="form-group col-md-1">
                    <button type="button" class="btn btn-block btn-danger remove-p1"
                        data-id="${variationIndex}"><i class="fa fa-minus" aria-hidden="true"></i></button>
                </div>
            </div>`
        );
        initTextEditor();
    });

    $(document).on('click', '.remove-p1', function() {
        if ($('#p1-container .row').length > 1) {
            var id = $(this).data('id');
            $('#p1-' + id).remove();
        } else {
            toastr.error('You cannot delete the last remaining field.');
        }
    }); 


    var variationIndex = '{{count($aboutSection) > 0 ? (count($aboutSection) - 1) : 0}}';
    $('#add-p2').on('click', function() {
        variationIndex++;
        $('#p2-container').append(
            `<div class="row" id="p2-${variationIndex}">            
                <div class="form-group col-md-3">
                    <input type="hidden" name="p2_index[]" value="${variationIndex}">                   
                    <input type="text" name="p2_title[]" value="" class="form-control"
                    placeholder="Title" required>                     
                </div>    
                <div class="form-group col-md-3">
                    <input name="p2_image[]" type="file" class="form-control" accept="image/*">
                    <label class="mt-0 mb-0"></label>
                    <input value="" name="old_p2_image[]" type="hidden">
                </div>                                     
                <div class="form-group col-md-5">
                    <textarea name="p2_description[]" class="form-control" minlength="3"
                            required="" rows="4"></textarea>
                </div>                        
                <div class="form-group col-md-1">
                    <button type="button" class="btn btn-block btn-danger remove-p2"
                        data-id="${variationIndex}"><i class="fa fa-minus" aria-hidden="true"></i></button>
                </div>
            </div>`
        );
        initTextEditor();
    });

    $(document).on('click', '.remove-p2', function() {
        if ($('#p2-container .row').length > 1) {
            var id = $(this).data('id');
            $('#p2-' + id).remove();
        } else {
            toastr.error('You cannot delete the last remaining field.');
        }
    });  
    
    
    var variationIndex = '{{count($aboutSection) > 0 ? (count($aboutSection) - 1) : 0}}';
    $('#add-p3').on('click', function() {
        variationIndex++;
        $('#p3-container').append(
            `<div class="row" id="p3-${variationIndex}">            
                <div class="form-group col-md-3">
                    <input type="hidden" name="p3_index[]" value="${variationIndex}">                   
                    <input type="text" name="p3_title[]" value="" class="form-control"
                    placeholder="Title" required>                     
                </div>    
                <div class="form-group col-md-3">
                    <input name="p3_image[]" type="file" class="form-control" accept="image/*">
                    <label class="mt-0 mb-0"></label>
                    <input value="" name="old_p3_image[]" type="hidden">
                </div>                                     
                <div class="form-group col-md-5">
                    <textarea name="p3_description[]" class="form-control" minlength="3"
                            required="" rows="4"></textarea>
                </div>                        
                <div class="form-group col-md-1">
                    <button type="button" class="btn btn-block btn-danger remove-p3"
                        data-id="${variationIndex}"><i class="fa fa-minus" aria-hidden="true"></i></button>
                </div>
            </div>`
        );
        initTextEditor();
    });

    $(document).on('click', '.remove-p3', function() {
        if ($('#p3-container .row').length > 1) {
            var id = $(this).data('id');
            $('#p3-' + id).remove();
        } else {
            toastr.error('You cannot delete the last remaining field.');
        }
    });    

});
</script>