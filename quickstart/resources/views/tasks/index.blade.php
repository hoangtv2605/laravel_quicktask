@extends('layouts.app')

@section('title')
    <title>{{ trans('task.task') }}</title>
@endsection

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            {{ trans('task.new_task') }}
        </div>

        <div class="card-body">
            <h5 class="card-title">{{ trans('task.task') }}</h5>
            @include('common.errors')

            <form method="POST" action="{{ route('tasks.index') }}">
                @csrf

                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="{{ trans('task.add_new_task') }}" required>
                </div>

                <button class="btn btn-primary" type="submit">{{ trans('task.add') }}</button>
            </form>    
        </div>
    </div>
@endsection
