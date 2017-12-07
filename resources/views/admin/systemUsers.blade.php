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

                            @component('admin.sortBy')
                            @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('footer')
    <script>
    </script>
@endsection