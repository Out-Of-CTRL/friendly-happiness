@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <form class="form-horizontal" role="form" method="POST" action="{{ route('group.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nume') ? ' has-error' : '' }}">
                            <label for="nume" class="col-md-4 control-label">Nume</label>

                            <div class="col-md-6">
                                <input id="nume" type="nume" class="form-control" name="nume" value="{{ old('nume') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sef') ? ' has-error' : '' }}">
                            <label for="sef" class="col-md-4 control-label">Șef</label>

                            <div class="col-md-6">
                                <input id="sef" type="sef" class="form-control" name="sef" required>
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
