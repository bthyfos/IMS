@extends('admin.dashboard')
@section('content')

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                    

                     <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
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

                        <div class="form-group{{ $errors->has('cellphone') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Cellphone</label>

                            <div class="col-md-6">
                                <input id="cellphone" type="number" class="form-control" name="cellphone" value="{{ old('cellphone') }}" required>

                                @if ($errors->has('cellphone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cellphone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                                 <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                                 <div class="form-group{{ $errors->has('physicalAddress') ? ' has-error' : '' }}">
                            <label for="physicalAddress" class="col-md-4 control-label">Physical Address</label>

                            <div class="col-md-6">
                                <input id="physicalAddress" type="number" class="form-control" name="physicalAddress" value="{{ old('physicalAddress') }}" required>

                                @if ($errors->has('physicalAddress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('physicalAddress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('staffId') ? ' has-error' : '' }}">
                            <label for="staffId" class="col-md-4 control-label">Staff Id</label>

                            <div class="col-md-6">
                                <input id="staffId" type="text" class="form-control" name="staffId" value="{{ old('staffId') }}" required>

                                @if ($errors->has('staffId'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('staffId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('userRoleId') ? ' has-error' : '' }}">
                            <label for="userRoleId" class="col-md-4 control-label">User Role</label>

                            <div class="col-md-6">

                                 {!! Form::select('userRoleId',$selectUserRoles,['class' => 'form-control input-sm','id' => 'userRoleId']) !!}
                               
                                <!-- <input id="userRoleId" type="text" name="userRoleId" value="{{ old('userRoleId') }}" required>
 -->
                                @if ($errors->has('userRoleId'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userRoleId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group{{ $errors->has('regionId') ? ' has-error' : '' }}">
                            <label for="regionId" class="col-md-4 control-label">Region</label>

                            <div class="col-md-6">

                                 {!! Form::select('regionId',$selectRegions,['class' => 'form-control input-sm','id' => 'regionId']) !!}
                                @if ($errors->has('regionId'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('regionId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('departmentId') ? ' has-error' : '' }}">
                            <label for="departmentId" class="col-md-4 control-label">Department</label>

                            <div class="col-md-6">
                                {!! Form::select('departmentId',$selectDepartments,['class' => 'form-control input-sm','id' => 'departmentId']) !!}
                                @if ($errors->has('departmentId'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('departmentId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('positionId') ? ' has-error' : '' }}">
                            <label for="positionId" class="col-md-4 control-label">Position</label>

                            <div class="col-md-6">
                                {!! Form::select('positionId',$selectPositions,['class' => 'form-control input-sm','id' => 'positionId']) !!}
                                @if ($errors->has('positionId'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('positionId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
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





                    
          <!-- 
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    
                </div>
            </div>
        </div> -->
     </div>
</div>
</div>
@stop