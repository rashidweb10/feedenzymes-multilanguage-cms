@php
    $content = json_decode($production->contents);
    $nsp_title = $content->nsp_title ?? null;   
    $digestive_title = $content->digestive_title ?? null;   
    $phytase_title = $content->phytase_title ?? null;   
    $nspEnzymes = $content->nspEnzymes ?? [];   
    $digestiveEnzymes = $content->digestiveEnzymes ?? [];   
    $phytaseEnzymes = $content->phytaseEnzymes ?? [];   
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
           <h5 class="text-info">NSP enzymes</h5>
        </div>   
        <div class="col-sm-12">
            <div class="form-group">
                <label>Title</label>
                <input value="{{$nsp_title}}" name="nsp_title" type="text" class="form-control" minlength="3"
                    maxlength="255" required="">
            </div>
        </div>             
        <div class="col-sm-12">
            <div class="form-group">
                <div id="p1-container">
                    @if(isset($nspEnzymes) && !empty($nspEnzymes))
                    @foreach($nspEnzymes as $index => $row)
                        <div class="row" id="p1-{{ $index }}">                       
                            <div class="form-group col-md-3">
                                <input type="hidden" name="p1_index[]" value="{{ $index }}">
                                <select name="p1_status[]" class="form-control mb-2">
                                    <option value="active" {{ $row->p1_status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $row->p1_status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>                                
                                <input type="text" name="p1_title[]" value="{{ $row->p1_title }}" class="form-control"
                                placeholder="Title" required>                  
                            </div>                      
                            <div class="form-group col-md-8">
                                <textarea name="p1_description[]" class="form-control text-editor" minlength="3"
                                        required="">{{ $row->p1_description }}</textarea>
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
                            <select name="p1_status[]" class="form-control mb-2">
                                <option value="active" >Active</option>
                                <option value="inactive">Inactive</option>
                            </select>                             
                            <input type="text" name="p1_title[]" value="" class="form-control"
                            placeholder="Title" required>                            
                        </div>                    
                        <div class="form-group col-md-8">
                            <textarea name="p1_description[]" class="form-control text-editor" minlength="3"
                                 required=""></textarea>
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
           <h5 class="text-info mt-3">Digestive enzymes</h5>
        </div> 
        <div class="col-sm-12">
            <div class="form-group">
                <label>Title</label>
                <input value="{{$digestive_title}}" name="digestive_title" type="text" class="form-control" minlength="3"
                    maxlength="255" required="">
            </div>
        </div>         
        <div class="col-sm-12">
            <div class="form-group">
                <div id="p2-container">
                    @if(isset($digestiveEnzymes) && !empty($digestiveEnzymes))
                    @foreach($digestiveEnzymes as $index => $row)
                        <div class="row" id="p2-{{ $index }}">                       
                            <div class="form-group col-md-3">
                                <input type="hidden" name="p2_index[]" value="{{ $index }}">
                                <select name="p2_status[]" class="form-control mb-2">
                                    <option value="active" {{ $row->p2_status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $row->p2_status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>                                
                                <input type="text" name="p2_title[]" value="{{ $row->p2_title }}" class="form-control"
                                placeholder="Title" required>                 
                            </div>                      
                            <div class="form-group col-md-8">
                                <textarea name="p2_description[]" class="form-control text-editor" minlength="3"
                                        required="">{{ $row->p2_description }}</textarea>
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
                            <select name="p2_status[]" class="form-control mb-2">
                                <option value="active" >Active</option>
                                <option value="inactive">Inactive</option>
                            </select>                            
                            <input type="text" name="p2_title[]" value="" class="form-control"
                            placeholder="Title" required>                             
                        </div>                    
                        <div class="form-group col-md-8">
                            <textarea name="p2_description[]" class="form-control text-editor" minlength="3"
                                required=""></textarea>
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
           <h5 class="text-info mt-3">Phytase Enzymes</h5>
        </div> 
        <div class="col-sm-12">
            <div class="form-group">
                <label>Title</label>
                <input value="{{$phytase_title}}" name="phytase_title" type="text" class="form-control" minlength="3"
                    maxlength="255" required="">
            </div>
        </div>        
        <div class="col-sm-12">
            <div class="form-group">
                <div id="p3-container">
                    @if(isset($phytaseEnzymes) && !empty($phytaseEnzymes))
                    @foreach($phytaseEnzymes as $index => $row)
                        <div class="row" id="p3-{{ $index }}">                       
                            <div class="form-group col-md-3">
                                <input type="hidden" name="p3_index[]" value="{{ $index }}">
                                <select name="p3_status[]" class="form-control mb-2">
                                    <option value="active" {{ $row->p3_status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $row->p3_status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>                               
                                <input type="text" name="p3_title[]" value="{{ $row->p3_title }}" class="form-control"
                                placeholder="Title" required>                  
                            </div>                      
                            <div class="form-group col-md-8">
                                <textarea name="p3_description[]" class="form-control text-editor" minlength="3"
                                        required="">{{ $row->p3_description }}</textarea>
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
                            <select name="p3_status[]" class="form-control mb-2">
                                <option value="active" >Active</option>
                                <option value="inactive">Inactive</option>
                            </select>                            
                            <input type="text" name="p3_title[]" value="" class="form-control"
                            placeholder="Title" required>                            
                        </div>                    
                        <div class="form-group col-md-8">
                            <textarea name="p3_description[]" class="form-control text-editor" minlength="3"
                                required=""></textarea>
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

    var variationIndex = '{{count($nspEnzymes) > 0 ? (count($nspEnzymes) - 1) : 0}}';
    $('#add-p1').on('click', function() {
        variationIndex++;
        $('#p1-container').append(
            `<div class="row" id="p1-${variationIndex}">            
                <div class="form-group col-md-3">
                    <input type="hidden" name="p1_index[]" value="${variationIndex}">
                    <select name="p1_status[]" class="form-control mb-2">
                        <option value="active" >Active</option>
                        <option value="inactive">Inactive</option>
                    </select>                   
                    <input type="text" name="p1_title[]" value="" class="form-control"
                    placeholder="Title" required>                     
                </div>                     
                <div class="form-group col-md-8">
                    <textarea name="p1_description[]" class="form-control text-editor" minlength="3"
                            required=""></textarea>
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
    
    

    var variationIndex = '{{count($digestiveEnzymes) > 0 ? (count($digestiveEnzymes) - 1) : 0}}';
    $('#add-p2').on('click', function() {
        variationIndex++;
        $('#p2-container').append(
            `<div class="row" id="p2-${variationIndex}">            
                <div class="form-group col-md-3">
                    <input type="hidden" name="p2_index[]" value="${variationIndex}">
                    <select name="p2_status[]" class="form-control mb-2">
                        <option value="active" >Active</option>
                        <option value="inactive">Inactive</option>
                    </select>                     
                    <input type="text" name="p2_title[]" value="" class="form-control"
                    placeholder="Title" required>                    
                </div>                     
                <div class="form-group col-md-8">
                    <textarea name="p2_description[]" class="form-control text-editor" minlength="3"
                            required=""></textarea>
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


    var variationIndex = '{{count($nspEnzymes) > 0 ? (count($nspEnzymes) - 1) : 0}}';
    $('#add-p3').on('click', function() {
        variationIndex++;
        $('#p3-container').append(
            `<div class="row" id="p3-${variationIndex}">            
                <div class="form-group col-md-3">
                    <input type="hidden" name="p3_index[]" value="${variationIndex}">
                    <select name="p3_status[]" class="form-control mb-2">
                        <option value="active" >Active</option>
                        <option value="inactive">Inactive</option>
                    </select>                     
                    <input type="text" name="p3_title[]" value="" class="form-control"
                    placeholder="Title" required>                    
                </div>                     
                <div class="form-group col-md-8">
                    <textarea name="p3_description[]" class="form-control text-editor" minlength="3"
                            required=""></textarea>
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