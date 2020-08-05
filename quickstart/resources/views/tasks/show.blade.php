@extends('layouts.app')

@section('title')
    <title>{{ trans('task.list_tasks') }}</title>
@endsection

@section('content')
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

                </tbody>
            </table>
        </div>
    </div>
@endsection
