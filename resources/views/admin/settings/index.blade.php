@extends('admin.layouts.app')
<!--[$pageInfo]-->

@section('meta.title', __('label.settings'))
@section('meta.desc', __('label.settings'))
{{--@section('page.name', __('label.settings'))--}}

@section('main.content')

<div class="col-md-10 mx-auto">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fa-solid fa-gear"></i> {{__('label.settings')}}</h3>
        </div>
        <div class="card-body">
            <form id="systemSettingForm" action="{{url('admin/settings/update-setting-post')}}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Application Name</label>
                            <input type="text" class="form-control" maxlength="50" name="app_name"
                                value="{{$settings->app_name}}" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="formFile" class="form-label">Application Logo</label>
                            <input class="form-control" type="file" id="formFile" name="app_logo">
                            <input type="hidden" name="_app_logo" value="{{$settings->app_logo}}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Timezone</label>
                            <select class="form-select select2" name="timezone" required>
                                <option value="">--select any one--</option>
                                <option value="Asia/Kolkata" @if($settings->timezone == 'Asia/Kolkata') selected @endif
                                    >Asia/Kolkata</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2 ps-4">
                        <div class="form-group mb-0">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="ui_mode" id="darkMode"
                                    value="dark" @if($settings->ui_mode == 'dark') checked @endif
                                >
                                <label class="form-check-label" for="darkMode">Dark Mode</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 ps-4">
                        <div class="form-group mb-0">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sidebar_collapse"
                                    id="sidebarCollapse" value="on" @if($settings->sidebar_collapse == 'on') checked
                                @endif
                                >
                                <label class="form-check-label" for="sidebarCollapse">Sidebar Collapse</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <hr class="border-3">
                    </div>
                    <div class="col-sm-4 ps-4">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" maxlength="50" name="phone"
                                value="{{$settings->phone}}" required>
                        </div>
                    </div>
                    <div class="col-sm-4 ps-4">
                        <div class="form-group">
                            <label>Whatsapp Number</label>
                            <input type="text" class="form-control" maxlength="50" name="whatsapp_phone"
                                value="{{$settings->whatsapp_phone}}" required>
                        </div>
                    </div>
                    <div class="col-sm-4 ps-4">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" maxlength="50" name="email"
                                value="{{$settings->email}}" required>
                        </div>
                    </div>
                    <div class="col-sm-12 ps-4">
                        <div class="form-group">
                            <label>Google Map Link</label>
                            <input type="url" class="form-control" name="google_map" value="{{$settings->google_map}}"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea rows="3" name="address" class="form-control"
                            required>{{$settings->address}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>About</label>
                        <textarea name="about" class="form-control text-editor"
                            required>{!! $settings->about !!}</textarea>
                    </div>
                    <div class="col-sm-12">
                        <hr class="border-3">
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Author Name</label>
                            <input type="text" class="form-control" maxlength="50" name="author_name"
                                value="{{$settings->author_name}}" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Author Link</label>
                            <input type="url" class="form-control" maxlength="50" name="author_link"
                                value="{{$settings->author_link}}" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-sm btn-block btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('main.script')
<script>
initSelect2('.select2');
initValidate('#systemSettingForm');
$("#systemSettingForm").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

var responseHandler = function(response) {
    console.log(response);
    setTimeout(function() {
        location.reload();
    }, 1500);
}
</script>
@endsection