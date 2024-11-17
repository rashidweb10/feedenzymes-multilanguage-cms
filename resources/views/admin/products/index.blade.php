@extends('admin.layouts.app')

@section('meta.title', 'Products')
@section('meta.desc', 'Products')


@section('main.content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="row mt-1 mb-1">
                <div class="col-md-10 mb-1">
                    <h5 class="mb-0 mt-1"><b>Products</b></h5>
                </div>
                <div class="col-md-2 text-right">
                    <button onclick="smallModal('{{url(route('products.create'))}}', 'Create New')"
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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{isset($row->category->name) ? $row->category->name : ''}}</td>
                            <td><a target="_blank" href="{{asset($row->image)}}">view</a></td>
                            <td>{{$row->is_active ? "Active" : "Inactive"}}</td>
                            <td>{{$row->created_at}}</td>
                            <td>

                                <button
                                    onclick="smallModal('{{url(route('products.edit', $row->id))}}', 'Edit {{$row->name}}')"
                                    class="btn btn-sm btn-primary"><i class="fa-solid fa-pencil"></i> Edit</button>
                                <button type="button" class="btn btn-sm btn-danger"
                                    onclick="confirmModal('{{url(route('products.destroy', $row->id))}}', responseHandler_productPage )"><i
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