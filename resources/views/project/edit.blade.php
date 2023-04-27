@extends('layouts.app')

@section('content')
<div class="wrapper"></div>
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title"> Edit Project</h4>
                    </div>
                </div>
                <div class="card-body">
                    <p></p>
                    <form action="{{ route('projects.update', $project->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault01">First name</label>
                                <input type="text" name="name" class="form-control" id="validationDefault01"  value="{{$project->name}}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault02">Date Start *</label>
                                <input type="date" name="startDate" class="form-control" id="exampleInputText004" value="{{$project->date_start}}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefaultUsername">Date end  </label>
                                <input type="date" name="endDate" class="form-control" id="exampleInputText004"value="{{$project->date_end}}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefaultUsername">Date end  </label>
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