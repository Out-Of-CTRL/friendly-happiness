@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <form class="form-horizontal" role="form" method="POST" action="{{ route('grade.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('val') ? ' has-error' : '' }}">
                            <label for="val" class="col-md-4 control-label">Nota</label>

                            <div class="col-md-6">
                                <input id="val" class="form-control" name="val" value="{{ old('val') }}" required autofocus>

                                @if ($errors->has('val'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('val') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('course_id') ? ' has-error' : '' }}">
                            <label for="course_id" class="col-md-4 control-label">ID Curs</label>

                            <div class="col-md-6">
                                <input id="course_id" class="form-control" name="course_id" required>

                                @if ($errors->has('course_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('course_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                            <label for="user_id" class="col-md-4 control-label">ID Student</label>

                            <div class="col-md-6">
                                <input id="user_id" class="form-control" name="user_id" required>

                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Data</label>

                            <div class="col-md-6">
                                <input id="date" class="form-control" name="date" required>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Trimite
                                </button>
                            </div>
                        </div>

                        
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
