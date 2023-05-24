@extends('layouts.app')

@section('template_title')
    {{ $task->name ?? "{{ __('Show') Task" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Task</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tasks.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $task->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $task->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Due Date:</strong>
                            {{ $task->Due_Date }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $task->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $task->category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
