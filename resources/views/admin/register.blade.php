@extends('admin.dashboard')
@section('content')

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function(){
            $("#dob").datepicker({
                maxDate :-0
            });

        });
        // Dealing with the date calender
        $(function()
        {
            $( "#dob" ).datepicker({
                prevText:"click for previous months",
                nextText:"click for next months",
                showOtherMonths:true,
                selectOtherMonths: false
            });
        });
    </script>


  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">REGISTER USER</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>



                        <div style="margin-top:20px; padding:0 10px 0 10px;">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}


                            <div class="form-group">
                                {!! Form::label('name', 'Name:', ['class' => 'col-md-3 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::text('name', $value = null, ['class' => 'form-control']) !!}
                                </div>
                            </div>


                            <div class="form-group">
                                {!! Form::label('surname', 'Surname:', ['class' => 'col-md-3 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::text('surname', $value = null, ['class' => 'form-control']) !!}
                                </div>
                            </div>


                            <div class="form-group">
                                {!! Form::label('cellphone', 'Cellphone:', ['class' => 'col-md-3 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::text('cellphone', $value = null, ['class' => 'form-control']) !!}
                                </div>
                            </div>


                            <div class="form-group">
                                {!! Form::label('dob', 'Date of Birth:', ['class' => 'col-md-3 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::date('dob', $value = null, ['class' => 'form-control','id'=>'dob']) !!}
                                </div>
                            </div>


                            <div class="form-group">
                                {!! Form::label('physicalAddress', 'Physical Address:', ['class' => 'col-md-3 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::text('physicalAddress', $value = null, ['class' => 'form-control']) !!}
                                </div>
                            </div>



                               <div class="form-group">
                                {!! Form::label('staffId', 'Staff Id:', ['class' => 'col-md-3 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::text('staffId', $value = null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                                <div class="form-group{{ $errors->has('userRoleId') ? ' has-error' : '' }}">
                                {!! Form::label('userRoleId', 'User Role:', ['class' => 'col-md-3 control-label']) !!}
                                <div class="col-md-6">

                                    <select class ="form-control">
                                        <option selection disabled> Select Role</option>
                                        @foreach($selectUserRoles as $selectUserRole)
                                            <option  id="{{$selectUserRole->id}}">{{$selectUserRole->name}}</option>
                                        @endforeach
                                    </select>



                                    {{--{!! Form::select('userRoleId',$selectUserRoles,['class' => 'form-control','id' => 'userRoleId']) !!}--}}
                                    @if ($errors->has('userRoleId'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('userRoleId') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('regionId') ? ' has-error' : '' }}">
                                {!! Form::label('regionId', 'Region:', ['class' => 'col-md-3 control-label']) !!}

                                <div class="col-md-6">

                                    {{--{!! Form::select('regionId',$selectRegions,['class' => 'form-control','id' => 'regionId']) !!}--}}

                                    <select class ="form-control">

                                        @foreach($regions as $selectRegion)
                                            <option  id="{{$selectRegion->id}}">{{$selectRegion->name}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('regionId'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('regionId') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('departmentId') ? ' has-error' : '' }}">
                                {!! Form::label('departmentId', 'Department:', ['class' => 'col-md-3 control-label']) !!}

                                <div class="col-md-6">
                                    {{--{!! Form::select('departmentId',$selectDepartments,['class' => 'form-control','id' => 'departmentId']) !!}--}}

                                    <select class ="form-control">

                                        @foreach($departments as $selectDepartment)
                                            <option  id="{{$selectDepartment->id}}">{{$selectDepartment->name}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('departmentId'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('departmentId') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('positionId') ? ' has-error' : '' }}">

                                {!! Form::label('positionId', 'Position:', ['class' => 'col-md-3 control-label']) !!}

                                <div class="col-md-6">
                                    {{--{!! Form::select('positionId',$selectPositions,['class' => 'form-control','id' => 'positionId']) !!}--}}

                                    <select class ="form-control">

                                        @foreach($positions as $position)
                                            <option  id="{{$position->id}}">{{$position->name}}</option>
                                        @endforeach
                                    </select>

                                @if ($errors->has('positionId'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('positionId') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                {!! Form::label('email', 'Email:', ['class' => 'col-md-3 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::email('email',NUll,['class' => 'form-control','id' => 'email']) !!}

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                {{--{!! Form::label('password', 'Password:', ['class' => 'col-md-3 control-label']) !!}--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                    {{--@if ($errors->has('password'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--{!! Form::label('password-confirm', 'Confirm Password:', ['class' => 'col-md-3 control-label']) !!}--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>

     </div>
</div>
</div>
@stop