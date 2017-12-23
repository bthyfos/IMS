@extends('admin.dashboard')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header"><strong>Staff List</strong></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
<<<<<<< HEAD
                    <div class="table-responsive">
                        <table class="table" id="userTable">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Role</th>
                                <th>Cellphone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Region</th>
                                <th>Department</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
=======
                    <div class = "table-responsive">
                    <table class="table" id="userTable">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Role</th>
                            <th>Cellphone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Region</th>
                            <th>Department</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>

>>>>>>> 1eedeca1af0a02fffc0905a778c00e4519e9a814
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@push('scripts')
    <script>
        $(function()
        {
            $('#userTable').DataTable({
                processing: true,
                serverSide: true,
                method:'GET',
<<<<<<< HEAD

=======
>>>>>>> 1eedeca1af0a02fffc0905a778c00e4519e9a814
                ajax: '{!! route('userList') !!}',
                columns: [
                    { data: 'name', name: 'name' }  ,
                    { data: 'surname', name: 'surname' },
                    { data: 'userRoleId', name: 'userRoleId' },
                    { data: 'cellphone', name: 'cellphone' },
                    { data: 'email', name: 'email' },
                    { data: 'physicalAddress', name: 'physicalAddress' },
                    { data: 'regionId', name: 'regionId' },
                    { data: 'departmentId', name: 'departmentId' },
                    { data: 'positionId', name: 'positionId' },
                    {data: 'action', name: 'action', orderable: false, searchable: false}

                ]
            });
        });
    </script>
@endpush