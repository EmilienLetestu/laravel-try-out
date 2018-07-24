@extends('layouts.base')

    @section('content')

        @include('components.form_errors')

        {!! Form::open(['url' => route('tasks.update', $task), 'method' => 'put' ]) !!}

            {!! Form::text('name', $task->name) !!}
            {!! Form::date('dead_line', $task->dead_line) !!}
            {!! Form::textarea('description', $task->description) !!}

            <button class="btn btn-success">Envoyer</button>

        {!! Form::close() !!}
    @endsection