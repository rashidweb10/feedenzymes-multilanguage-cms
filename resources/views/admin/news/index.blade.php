@extends('admin.layouts.app')

@section('meta.title', __('label.news'))
@section('meta.desc', __('label.news'))


@section('main.content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="row mt-1 mb-1">
                <div class="col-md-10 mb-1">
                    <h5 class="mb-0 mt-1"><b>{{__('label.news')}}</b></h5>
                </div>
                <div class="col-md-2 text-right">
                    <button onclick="smallModal('{{url(route('news.create'))}}', 'Create New')"
                        class="btn btn-sm btn-outline-success"><i class="fa-solid fa-plus"></i> Create New</button>
                </div>

            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="product-categories-datatable" class="datatable table table-striped" width="100%"
                    data-page-length="10" width="100%">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Year</th>
                            <th>Title</th>
                            <th>Image</th>
                            
                            <th>Series</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $index => $row)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{$row->year}}</td>
                            <td>{{$row->name}}</td>
                            <td>
                                <a target="_blank" href="{{asset($row->image)}}">
                                    <img src="{{asset($row->image)}}" class="img-thumbnail" style="width: 40px; height: 40px; object-fit: cover;">
                                </a>
                            </td>
                            
                            <td>{{$row->series}}</td>
                            <td>
                                <span class="badge @if($row->status == 'active') bg-success @else bg-danger @endif">{{ucfirst($row->status)}}</span>
                            </td>
                            <td>{{formatDateTime($row->created_at)}}</td>
                            <td>{{formatDateTime($row->updated_at)}}</td>
                            <td>
                                <button onclick="smallModal('{{url(route('news.edit', $row->id))}}', 'Edit {{$row->name}}')"
                                    class="btn btn-sm btn-primary"><i class="fa-solid fa-pencil"></i> Edit</button>
                                <button type="button" class="btn btn-sm btn-danger"
                                    onclick="confirmModal('{{url(route('news.destroy', $row->id))}}', responseHandler_productPage )"><i
                                        class="fa-solid fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('main.script')
<script>
const responseHandler_productPage = function(response) {
    setTimeout(function() {
        location.reload();
    }, 1500);
}
</script>
@endsection