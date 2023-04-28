@extends('layouts.app')

@section('content')
<div class="wrapper"></div>
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @if ($message = Session::get('unique'))
            asdsad
            @endif
        @endforeach
    </ul>
</div>
@endif
<div class="row">
    <div class="col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title"> Edit Project</h4>
                </div>
                <a href="{{ route('projects.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </a>
            </div>
            <div class="card-body">
                <p></p>
                <form action="{{ route('projects.update', $project->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">First name</label>
                            <input type="text" name="name" class="form-control" id="validationDefault01" value="{{$project->name}}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Date Start *</label>
                            <input type="date" name="startDate" class="form-control" id="exampleInputText004" value="{{$project->date_start}}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefaultUsername">Date end </label>
                            <input type="date" name="endDate" class="form-control" id="exampleInputText004" value="{{$project->date_end}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefaultUsername">Date end </label>
                            <textarea class="form-control" name="description" id="exampleInputText040" rows="2">{{$project->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection