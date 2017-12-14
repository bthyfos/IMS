@extends('admin.dashboard')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header"><strong>YOUR DASHBOARD</strong></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>

                    <div class="panel-body">
                        <form id="chartsForm">
                            <div>
                                <label class="form-check-label" id="pie" v-on:click="onCheck">
                                    <input type="radio" name="pie" value="pie">
                                    Pie Chart
                                </label>
                            </div>
                            <div>
                                <label class="form-check-label">
                                    <input type="radio"  id ="bar" v-on:click="onCheck"  name="bar" value="bar">
                                    Bar Graph
                                </label>
                            </div>
                            <div>
                                <label class="form-check-label"  id="donut"  v-on:click="onCheck" >
                                    <input type="radio" name="donut" value="donut">
                                  Donut
                                </label>
                            </div>

                        </form>
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-line-chart">

                                {!! $chart->html() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        User Loggings
                    </div>
                    <div class="panel-body">

                            <table id="lastLoginsTable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Region</th>
                                    <th>Department</th>
                                    <th>Last Login</th>
                                </tr>
                                </thead>
                            </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {!! Charts::scripts() !!}
    {!! $chart->script()  !!}
@stop
@push('scripts')
    <script>
        $(function() {
            $('#lastLoginsTable').DataTable({
                processing: true,
                serverSide: true,
                method:'GET',
                ajax: '{!! route('lastLogins') !!}',
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'surname', name: 'surname' },
                    { data: 'regionId', name: 'regionId'},
                    { data: 'departmentId', name: 'departmentId' },
                    { data: 'lastLogin', name: 'lastLogin'}
                ]
            });
        });
    </script>
@endpush

