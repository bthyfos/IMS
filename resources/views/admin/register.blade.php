@extends('admin.dashboard')
@section('content')

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
                    

                     <div class="panel-body">
                            <div class="row justify-content-center" >
                                <!-- align="center" -->
                                <div class="col-lg-8">

                                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}


                         <div class="form-group">
                        {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-6">
                            {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'name']) !!}
                        </div>
                    </div>


                     <div class="form-group">
                        {!! Form::label('surname', 'Surname:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-6">
                            {!! Form::text('surname', $value = null, ['class' => 'form-control', 'placeholder' => 'surname']) !!}
                        </div>
                    </div>


                     <div class="form-group">
                        {!! Form::label('cellphone', 'Cellphone:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-6">
                            {!! Form::text('cellphone', $value = null, ['class' => 'form-control', 'placeholder' => 'surname']) !!}
                        </div>
                    </div>
                    

                     <div class="form-group">
                        {!! Form::label('dob', 'Date of Birth:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-6">
                            {!! Form::date('dob', $value = null, ['class' => 'form-control', 'placeholder' => 'surname']) !!}
                        </div>
                    </div>


                       <!--   <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Surname</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 -->
                        <!-- <div class="form-group{{ $errors->has('cellphone') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Cellphone</label>

                            <div class="col-md-6">
                                <input id="cellphone" type="number" class="form-control" name="cellphone" value="{{ old('cellphone') }}" required>

                                @if ($errors->has('cellphone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cellphone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

                               <!--   <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                     <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

                        <div class="form-group">
                        {!! Form::label('physicalAddress', 'Physical Address:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-6">
                            {!! Form::text('physicalAddress', $value = null, ['class' => 'form-control', 'placeholder' => 'surname']) !!}
                        </div>
                    </div>

<!-- <div class="form-group{{ $errors->has('physicalAddress') ? ' has-error' : '' }}">
                            <label for="physicalAddress" class="col-md-4 control-label">Physical Address</label>

                            <div class="col-md-6">
                                <input id="physicalAddress" type="number" class="form-control" name="physicalAddress" value="{{ old('physicalAddress') }}" required>

                                @if ($errors->has('physicalAddress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('physicalAddress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->


               <div class="form-group">
                        {!! Form::label('staffId', 'Staff Id:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-6">
                            {!! Form::text('staffId', $value = null, ['class' => 'form-control', 'placeholder' => 'surname']) !!}
                        </div>
                    </div>



                       <!--  <div class="form-group{{ $errors->has('staffId') ? ' has-error' : '' }}">
                            <label for="staffId" class="col-md-4 control-label">Staff Id</label>

                            <div class="col-md-6">
                                <input id="staffId" type="text" class="form-control" name="staffId" value="{{ old('staffId') }}" required>

                                @if ($errors->has('staffId'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('staffId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

                        <div class="form-group{{ $errors->has('userRoleId') ? ' has-error' : '' }}">
                             {!! Form::label('userRoleId', 'User Role:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-6">

                                 {!! Form::select('userRoleId',$selectUserRoles,['class' => 'form-control','id' => 'userRoleId']) !!}
                                @if ($errors->has('userRoleId'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userRoleId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group{{ $errors->has('regionId') ? ' has-error' : '' }}">
                          {!! Form::label('regionId', 'Region:', ['class' => 'col-lg-2 control-label']) !!}

                            <div class="col-lg-6">

                                 {!! Form::select('regionId',$selectRegions,['class' => 'form-control','id' => 'regionId']) !!}
                                @if ($errors->has('regionId'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('regionId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('departmentId') ? ' has-error' : '' }}">
                           {!! Form::label('departmentId', 'Department:', ['class' => 'col-lg-2 control-label']) !!}

                            <div class="col-lg-6">
                                {!! Form::select('departmentId',$selectDepartments,['class' => 'form-control','id' => 'departmentId']) !!}
                                @if ($errors->has('departmentId'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('departmentId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('positionId') ? ' has-error' : '' }}">

                             {!! Form::label('positionId', 'Position:', ['class' => 'col-lg-2 control-label']) !!}

                            <div class="col-lg-6">
                                {!! Form::select('positionId',$selectPositions,['class' => 'form-control','id' => 'positionId']) !!}
                                @if ($errors->has('positionId'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('positionId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}

                            <div class="col-lg-6">
                               {!! Form::email('email',NUll,['class' => 'form-control','id' => 'email']) !!}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {!! Form::label('password', 'Password:', ['class' => 'col-lg-2 control-label']) !!}

                            <div class="col-lg-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                              {!! Form::label('password-confirm', 'Confirm Password:', ['class' => 'col-lg-2 control-label']) !!}

                            <div class="col-lg-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
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
</div>
</div>
@stop