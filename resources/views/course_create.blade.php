@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <form class="form-horizontal" role="form" method="POST" action="{{ route('course.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('materie') ? ' has-error' : '' }}">
                            <label for="materie" class="col-md-4 control-label">materie</label>

                            <div class="col-md-6">
                                <input id="materie" type="materie" class="form-control" name="materie" value="{{ old('materie') }}" required autofocus>

                                @if ($errors->has('materie'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('materie') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                            <label for="user_id" class="col-md-4 control-label">ID Titular</label>

                            <div class="col-md-6">
                                <input id="user_id" type="user_id" class="form-control" name="user_id" required>

                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
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
