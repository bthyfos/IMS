@extends('admin.dashboard')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div style="margin-top: 15px;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPositionModal">
                        NEW
                    </button>
                </div>

                <h4 class="page-header"><strong>POSITIONS</strong></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div style="padding:12px 12px 12px 12px;">
                        <div class = "table-responsive">
                        <table class="table" id="positionsTable">
                            <thead>
                            <tr>
                                <th>POSITION ID</th>
                                {{--<th>REGION  NAME</th>--}}
                                <th>DEPARTMENT  NAME</th>
                                <th>POSITION  NAME</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                        </table>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-line-chart">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('scripts')
    <script>
        $(function() {
            $('#positionsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('positions') !!}',
                columns: [
                    { data: 'id', name: 'id' }  ,
                    { data: 'name', name: 'name' },
                    { data: 'departmentId', name: 'departmentId' },

                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>
@endpush