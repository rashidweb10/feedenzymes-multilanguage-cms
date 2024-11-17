@extends('admin.layouts.app')

@section('meta.title', 'Pages')
@section('meta.desc', 'Pages')


@section('main.content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="row mt-1 mb-1">
                <div class="col-md-10 mb-1">
                    <h5 class="mb-0 mt-1"><b>Pages</b></h5>
                </div>
                {{--<div class="col-md-2 text-right">
                    <button onclick="smallModal('{{url(route('pages.create'))}}', 'Create New')"
                        class="btn btn-sm btn-outline-success"><i class="fa-solid fa-plus"></i> Create New</button>
                </div>--}}

            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="product-categories-datatable" class="datatable table table-striped" width="100%"
                    data-page-length="10" width="100%">
                    <thead>
                        <tr>
                            <th width="10%">Sr No</th>
                            <th width="80%">Page Name</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->name}}</td>
                            <td>

                                <button
                                    onclick="largeModal('{{url(route('pages.edit', $row->id))}}', 'Edit {{$row->name}}')"
                                    class="btn btn-sm btn-primary"><i class="fa-solid fa-pencil"></i> Edit</button>
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