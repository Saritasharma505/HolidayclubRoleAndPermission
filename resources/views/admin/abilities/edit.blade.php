@extends('layouts.app')

@section('content')
   <h1 class="page-title fa fa-briefcase"> Permission Edit</h1>
    
    {!! Form::model($ability, ['method' => 'PUT', 'route' => ['admin.abilities.update', $ability->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
           <a href="{{ route('admin.permissions.index') }}" class="btn btn-success">Back</a>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

