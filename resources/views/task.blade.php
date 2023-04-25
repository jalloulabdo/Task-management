@extends('layouts.app')

@section('content')
<style>
    .bootstrap-select>.dropdown-toggle:after {
        margin-top: -1px;
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
    }
</style>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5>Your Task</h5>
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="dropdown  dropdown-project mr-3">
                                    <select name="project" id="project" class="selectpicker form-control" data-style="py-0" onchange="">
                                        <option value=""><span class="h6">Projects :</span> webkit Project<i class="ri-arrow-down-s-line ml-2 mr-0"></i></option>
                                        @foreach($projects as $index => $project)
                                        @if($index == 0)
                                        <option value="{{ $project->id }}" selected>{{$project->name}}</option>
                                        @else
                                        <option value="{{ $project->id }}">{{$project->name}}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                </div>
                                <a href="#" class="btn btn-primary" data-target="#new-task-modal" data-toggle="modal">New Task</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @foreach($tasks as $task)
                            <div class="col-lg-12">
                                <div class="card card-widget task-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="custom-control custom-task custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck0{{$task->id}}">
                                                    <label class="custom-control-label" for="customCheck0{{$task->id}}"></label>
                                                </div>
                                                <div>
                                                    <h5 class="mb-2">{{$task->name}}</h5>
                                                    <div class="media align-items-center">
                                                        <div class="btn bg-body mr-3"><i class="ri-align-justify mr-2"></i>5/10</div>
                                                        <div class="btn bg-body"><i class="ri-survey-line mr-2"></i>3</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media align-items-center mt-md-0 mt-3">
                                                <a href="#" class="btn bg-secondary-light mr-3">Design</a>
                                                <a class="btn bg-secondary-light" data-toggle="collapse" href="#collapseEdit{{$task->id}}" role="button" aria-expanded="false" aria-controls="collapseEdit1"><i class="ri-edit-box-line m-0"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="collapseEdit{{$task->id}}">
                                    <div class="card card-list task-card">
                                        <div class="card-header d-flex align-items-center justify-content-between px-0 mx-3">
                                            <div class="header-title">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck{{$task->id}}">
                                                    <label class="custom-control-label h5" for="customCheck05">Mark as done</label>
                                                </div>
                                            </div>
                                            <div><a href="#" class="btn bg-secondary-light">Design</a></div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group mb-3 position-relative">
                                                <input type="text" class="form-control bg-white" placeholder="Design landing page of webkit" value="{{ $task->name }}">
                                                <a href="#" class="task-edit task-simple-edit text-body"><i class="ri-edit-box-line"></i></a>
                                            </div>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group mb-0">
                                                                <label for="exampleInputText2" class="h5">Memebers</label>
                                                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                                                    <option>Memebers</option>
                                                                    <option>Kianna Septimus</option>
                                                                    <option>Jaxson Herwitz</option>
                                                                    <option>Ryan Schleifer</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group mb-0">
                                                                <label for="exampleInputText3" class="h5">Due Dates*</label>
                                                                <input type="date" class="form-control" id="exampleInputText3" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <h5 class="mb-2">Description</h5>
                                                            <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h5 class="mb-2">Checklist</h5>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                        <label class="custom-control-label mb-1" for="customCheck1">Design mobile version</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck02">
                                                                        <label class="custom-control-label mb-1" for="customCheck02">Use images of unsplash.com</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                                        <label class="custom-control-label" for="customCheck3">Vector images of small size.</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck04">
                                                                        <label class="custom-control-label mb-1" for="customCheck04">Design mobile version of landing page</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                                        <label class="custom-control-label mb-1" for="customCheck5">Use images of unsplash.com</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck06">
                                                                        <label class="custom-control-label" for="customCheck06">Vector images of small size..</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="exampleInputText01" class="h5">Attachments</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile001">
                                                    <label class="custom-file-label" for="inputGroupFile001">Upload media</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>

<div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-task-modal">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-block text-center pb-3 border-bttom">
                <h3 class="modal-title" id="exampleModalCenterTitle">New Task</h3>
            </div>
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                @if(!empty($projects))
                <input type="hidden" name="project_modal" id="project-model" value="{{ $projects[0]->id }}" />
                @else
                <input type="hidden" name="project_modal" id="project-model" value="" />
                @endif

                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText02" class="h5">Task Name*</label>
                                <input type="text" class="form-control" name="name" id="exampleInputText02" placeholder="Enter task Name">
                                <a class="task-edit text-body"><i class="ri-edit-box-line"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Assigned to</label>
                                <select name="membre" class="selectpicker form-control" data-style="py-0">
                                    <option value="">Memebers</option>
                                    @foreach($membres as $membre)
                                    <option value="{{ $membre->id }}">{{$membre->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText05" class="h5">Deadline*</label>
                                <input type="date" name="deadline" class="form-control" id="exampleInputText05" value="" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText040" class="h5">Description</label>
                                <textarea class="form-control" name="description" id="exampleInputText040" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-4">
                                <button type="submit" class="btn btn-primary mr-3">Save</button>
                                <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    const select = document.getElementById('project');
    select.addEventListener('change', function handleChange(event) {
        const idProject = event.target.value
        console.log(idProject);
        document.getElementById('project-model').value = idProject;


    });
</script>

@endsection