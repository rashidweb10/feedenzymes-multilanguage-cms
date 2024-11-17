@extends('admin.layouts.app')

@section('meta.title', 'Enquiries')
@section('meta.desc', 'Enquiries')


@section('main.content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="row mt-1 mb-1">
                <div class="col-md-2 mt-2">
                    <h5 class="mb-0 mt-4"><b>Enquiries</b></h5>
                </div>
                <div class="col-md-10 mb-1">
                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="search">Search</label>
                                    <input name="search" id="search" type="text" class="form-control" value="{{ request('search') }}" placeholder="Name, Email, Phone">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="from">From Date</label>
                                    <input name="from" id="from" type="date" class="form-control" value="{{ request('from') }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="to">To Date</label>
                                    <input name="to" id="to" type="date" class="form-control" value="{{ request('to') }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-block btn-success mt-4">Search</button>
                            </div>
                            <div class="col-md-1">
                                <a href="{{route('enquiries.index')}}" class="btn btn-block btn-danger mt-4"><i class="fa-solid fa-refresh"></i></a>
                            </div>                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="enquiries-datatable" class=" table table-striped" width="100%" data-page-length="10"
                    width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Product Information</th>
                            <th>Created at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enquiries as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->phone}}</td>
                            <td>{{$row->message}}</td>
                            <td>
                                <ol>
                                    @foreach(json_decode($row->additional_info, true) as $info)
                                    <li>
                                        <strong>Product:</strong> {{ $info['product'] }}<br>
                                        <strong>Price:</strong> {{ $info['price'] }} / {{ $info['weight'] }}<br>
                                        <strong>Category:</strong> {{ $info['category'] }}
                                    </li>
                                    @endforeach
                                </ol>
                            </td>
                            <td>{{$row->created_at}}</td>
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
$(document).ready(function() {
    $('#enquiries-datatable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            /*{
                            extend: 'copyHtml5',
                            text: 'Copy'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Export to Excel'
                        },*/
            {
                extend: 'csvHtml5',
                text: 'Export as CSV',
                className: 'btn btn-sm btn-primary'
            },
            {
                extend: 'pdfHtml5',
                text: 'Export as PDF',
                className: 'btn btn-sm btn-primary'
            }
        ],
        order: [
            [6, 'desc']
        ], // Order by the 'Created at' column (index 6) in descending order
        pageLength: 10
    });
});
</script>
@endsection