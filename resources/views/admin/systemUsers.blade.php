@extends('admin.dashboard')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header"><strong>A depiction of Oraganisation Staff</strong></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Organisation Chart
                </div>
                <div class="panel-body">
                    {{--@component('admin.sortBy')--}}
                    {{--@endcomponent--}}
                    <table class="table" id="userTable">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Role</th>
                            <th>Cellphone</th>
                            {{--<th>Email</th>--}}
                            {{--<th>Address</th>--}}
                            <!-- <th>Region</th>
                            <th>Department</th>
                            <th>Position</th> -->
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('footer')
@endsection
@push('scripts')
    <script>
        $(function() {
            $('#userTable').DataTable({
                processing: true,
                serverSide: true,
                type:'GET',
                ajax: '{!! route('userList') !!}',
                columns: [
                    { data: 'name', name: 'name' }  ,
                    { data: 'surname', name: 'surname' },
                    { data: 'userRoleId', name: 'userRoleId' },
                    { data: 'cellphone', name: 'cellphone' },
                    { data: 'email', name: 'email' },
                    { data: 'physicalAddress', name: 'physicalAddress' },
                    // { data: 'regionId', name: 'regionId' },
                    // { data: 'departmentId', name: 'departmentId' },
                    // { data: 'positionId', name: 'positionId' },
                    {data: 'action', name: 'action', orderable: false, searchable: false}

                ]
            });
        });
    </script>
@endpush