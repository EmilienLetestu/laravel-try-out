@extends('layouts.base')

    @section('content')
        <table class="table">
            <thead>
                <tr>
                    <th>
                        Tâches
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Traité
                    </th>
                    <th>
                        Date Limite
                    </th>
                    <th>
                        Modifier
                    </th>
                    <th>
                        Suprimer
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>
                        {{ $task->name }}
                    </td>
                    <td>
                        {{ $task->description }}
                    </td>
                    <td>
                        {{ $task->done }}
                        <a class="btn btn-primary" href="{{ route('updateDone', $task->id) }}"><i class="fas fa-pen"></i></a>
                    </td>
                    <td>
                        {{ $task->dead_line }}
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('tasks.edit', $task) }}"><i class="fas fa-pen"></i></a>
                    </td>
                    <td>
                        {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    @endsection