@if (!empty($tasks) && isset($tasks))
@foreach($tasks as $task)
<div class="col-lg-12">
    <div class="card card-widget task-card">
        <div class="card-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <div class="custom-control custom-task custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="customCheck{{ $task->id }}">
                        <label class="custom-control-label" for="customCheck{{ $task->id }}"></label>
                    </div>
                    <div>
                        <h5 class="mb-2">{{ $task->name }}</h5>
                        <div class="media align-items-center">
                            <div class="btn bg-body mr-3"><i class="ri-align-justify mr-2"></i>{{ $task->deadline }}</div>
                            <a href="#" class="iq-media">
                                <img class="img-fluid avatar-40 rounded-circle" src="{{ $task->image ? url('storage/images/membre/'.$task->image) : '' }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center mt-md-0 mt-3">
                    <a href="#" class="btn bg-secondary-light mr-3">Design</a>
                    <a class="btn bg-secondary-light" data-toggle="collapse" href="#collapseEdit{{ $task->id }}" role="button" aria-expanded="false" aria-controls="collapseEdit1"><i class="ri-edit-box-line m-0"></i></a>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $idProject }}" name="project_modal" />
        <div class="collapse" id="collapseEdit{{ $task->id }}">
            <div class="card card-list task-card">
                <div class="card-header d-flex align-items-center justify-content-between px-0 mx-3">
                    <div class="header-title">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <label class="custom-control-label h5" for="customCheck05">Edit Task</label>
                        </div>
                    </div>
                    <div><a href="#" class="btn bg-secondary-light">Design</a></div>
                </div>
                <div class="card-body">
                    <div class="form-group mb-3 position-relative">
                        <input type="text" class="form-control bg-white" name="name" placeholder="Design landing page of webkit" value="{{ $task->name }}">
                        <a href="#" class="task-edit task-simple-edit text-body"><i class="ri-edit-box-line"></i></a>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-0">
                                        <label for="exampleInputText2" class="h5">Memebers</label>
                                        <select name="membre" class=" form-control" data-style="py-0">
                                            <option value="">Memebers</option>
                                            @foreach($membres as $membre)
                                            @if($membre->id == $task->membre_id)
                                            <option value="{{ $membre->id }}" selected>{{$membre->name}}</option>
                                            @else
                                            <option value="{{ $membre->id }}">{{$membre->name}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-0">
                                        <label for="exampleInputText3" class="h5">Due Dates*</label>
                                        <input type="date" class="form-control" name="deadline" id="exampleInputText3" value="{{ $task->deadline }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="mb-2">Description</h5>
                                    <textarea class="form-control" name="description" id="exampleInputText040" rows="2">{{ $task->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-4">
                            <button type="submit" class="btn btn-primary mr-3">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endforeach
@else
<h1>Empty</h1>
@endif