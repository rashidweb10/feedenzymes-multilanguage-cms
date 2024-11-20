@extends('admin.layouts.app')

@section('meta.title', __('label.productions'))
@section('meta.desc', __('label.productions'))


@section('main.content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="row mt-1 mb-1">
                <div class="col-md-10 mb-1">
                    <h5 class="mb-0 mt-1"><b>{{__('label.productions')}}</b></h5>
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
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productions as $index => $row)
                        <tr>
                            <td width="10%">{{ $index + 1 }}</td>
                            <td width="80%">{{$row->name}}</td>
                            <td width="10%">
                                <button onclick="largeModal('{{url(route('the-products.edit', $row->id))}}', 'Edit {{$row->name}}')"
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