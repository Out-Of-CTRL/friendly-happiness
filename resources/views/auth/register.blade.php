@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inregistrare</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('matricol') ? ' has-error' : '' }}">
                            <label for="matricol" class="col-md-4 control-label">Cod matricol</label>

                            <div class="col-md-6">
                                <input id="matricol" type="text" class="form-control" name="matricol" value="{{ old('matricol') }}" required autofocus>

                                @if ($errors->has('matricol'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('matricol') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nume') ? ' has-error' : '' }}">
                            <label for="nume" class="col-md-4 control-label">Nume</label>

                            <div class="col-md-6">
                                <input id="nume" type="text" class="form-control" name="nume" value="{{ old('nume') }}" required autofocus>

                                @if ($errors->has('nume'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nume') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('prenume') ? ' has-error' : '' }}">
                            <label for="prenume" class="col-md-4 control-label">Prenume</label>

                            <div class="col-md-6">
                                <input id="prenume" type="text" class="form-control" name="prenume" value="{{ old('prenume') }}" required autofocus>

                                @if ($errors->has('prenume'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenume') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Adresa e-mail</label>

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
                            <label for="password" class="col-md-4 control-label">Parola</label>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirma parola</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Inregistrare
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
