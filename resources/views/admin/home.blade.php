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
                                    <input type="checkbox" class="form-check-input">
                                    Pie Chart
                                </label>
                            </div>
                            <div>
                                <label class="form-check-label">
                                    <input type="checkbox"  id ="bar" v-on:click="onCheck" class="form-check-input">
                                    Bar Graph
                                </label>
                            </div>
                            <div>
                                <label class="form-check-label"  id="donut"  v-on:click="onCheck">
                                    <input type="checkbox" class="form-check-input">
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
    <script>
        const vm =new Vue({
            el:'#chartsForm',
            data:{
                checkedNames:[]
            },
            methods:{
                onCheck:function()
                {
                    alert(document.body.getAttribute('id'));
                }
            }

        });
    </script>
    {!! Charts::scripts() !!}
    {!! $chart->script()  !!}
@stop

