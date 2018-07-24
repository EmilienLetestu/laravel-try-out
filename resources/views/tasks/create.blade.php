@extends('layouts.base')

    @section('content')

        {!! Form::open(['url' => route('tasks.store') ]) !!}

           {!! Form::text('name') !!}
           {!! Form::date('dead_line') !!}
           {!! Form::textarea('description') !!}

        <button class="btn btn-success">Envoyer</button>

        {!! Form::close() !!}

    @endsection