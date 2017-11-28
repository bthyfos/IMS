@extends('admin.dashboard')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header"><strong>CHANGE PASSWORD</strong></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div style="margin-top:20px; padding:0 10px  0 10px;">
                        {!! Form::open(['url' => 'update', 'method' => 'post', 'class' => 'form-horizontal', 'id'=>"passwordChangeForm" ]) !!}
                        {!! Form::hidden('email',\Auth::user()->email) !!}
                        {{ csrf_field() }}



                        <div class="form-group">
                            {!! Form::label('Password', 'Password', array('class' => 'col-md-3 control-label')) !!}
                            <div class="col-md-6">
                                {{--{!! Form::password('password',NULL,['class' => 'form-control input-lg','id' => 'password']) !!}--}}
                                <input type="password" id="password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('Confirm Password', 'Confirm Password', array('class' => 'col-md-3 control-label validate[required]')) !!}
                            <div class="col-md-6">
                                <input type="password" id="confirm_password" class="form-control">
                                {{--{!! Form::password('confirm_password',NULL,['class' => 'form-control input-lg','id' => 'confirm_password']) !!}--}}
                                @if ($errors->has('confirm_password')) <p class="help-block red">*{{ $errors->first('confirm_password') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-10">
                                <button type="submit" type="button" class="btn btn-sm">Update Password</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@stop