@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::open(['url'=>'/password/email', 'form-horizontal'])!!}
                    <div class="form-group"{{ $errors->has('email') ? ' has-error' : ''}}>
                        {!! Form::label('email', 'Alamat Email',['class'=>'col-md-4 control-label'])!!}
                        <div class="col-md-6">
                            {!! Form::email('email', null, ['class'=>'form-control']) !!}
                            {!! $errors->first('email', '<p class="help-block">message</p>')!!}
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn primary">
                                <a class="btn btn-link" href="http://localhost:8000/password/reset/3bdf9ccf3b6d5fbc1855a32ed2a44216a3d638ee820df62f39dc71a3dfa5020d">Submit</a>
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
