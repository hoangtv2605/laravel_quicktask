@extends('layouts.app')

@section('title')
    <title>{{ trans('task.list_tasks') }}</title>
@endsection

@section('content')
    @if (count($tasks) > 0)
        <div class="card mt-5">
            <div class="card-header">
                {{ trans('task.list_tasks') }}
            </div>

            <div class="card-body">
                <h5 class="card-title">{{ trans('task.task') }}</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{ trans('task.name') }}</th>
                            <th scope="col">{{ trans('task.delete') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <th scope="row">{{ $task->id }}</th>
                                <td>{{ $task->name }}</td>
                                <td><button class="btn btn-danger" type="submit">{{ trans('task.delete') }}</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
