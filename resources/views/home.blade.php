@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <div class="top-block d-flex align-items-center justify-content-between">
                        <h5>Investment</h5>
                        <span class="badge badge-primary">Monthly</span>
                    </div>
                    <h3>$<span class="counter">35000</span></h3>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                        <p class="mb-0">Total Revenue</p>
                        <span class="text-primary">65%</span>
                    </div>
                    <div class="iq-progress-bar bg-primary-light mt-2">
                        <span class="bg-primary iq-progress progress-1" data-percent="65"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <div class="top-block d-flex align-items-center justify-content-between">
                        <h5>Sales</h5>
                        <span class="badge badge-warning">Anual</span>
                    </div>
                    <h3>$<span class="counter">25100</span></h3>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                        <p class="mb-0">Total Revenue</p>
                        <span class="text-warning">35%</span>
                    </div>
                    <div class="iq-progress-bar bg-warning-light mt-2">
                        <span class="bg-warning iq-progress progress-1" data-percent="35"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <div class="top-block d-flex align-items-center justify-content-between">
                        <h5>Cost</h5>
                        <span class="badge badge-success">Today</span>
                    </div>
                    <h3>$<span class="counter">33000</span></h3>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                        <p class="mb-0">Total Revenue</p>
                        <span class="text-success">85%</span>
                    </div>
                    <div class="iq-progress-bar bg-success-light mt-2">
                        <span class="bg-success iq-progress progress-1" data-percent="85"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <div class="top-block d-flex align-items-center justify-content-between">
                        <h5>Profit</h5>
                        <span class="badge badge-info">Weekly</span>
                    </div>
                    <h3>$<span class="counter">2500</span></h3>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                        <p class="mb-0">Total Revenue</p>
                        <span class="text-info">55%</span>
                    </div>
                    <div class="iq-progress-bar bg-info-light mt-2">
                        <span class="bg-info iq-progress progress-1" data-percent="55"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                        <h5>Task</h5>
                        <div class="d-flex flex-wrap align-items-center" style="width: 40%;">
                            <div class="dropdown  dropdown-project mr-3" style="width: 60%;">
                                <select name="project" id="project" class="selectpicker form-control" data-style="py-0" onchange="">
                                    <option value=""><span class="h6">Projects :</span> webkit Project<i class="ri-arrow-down-s-line ml-2 mr-0"></i></option>
                                    @if(!empty($projects))
                                    @foreach($projects as $index => $project)
                                    @if($index == 0)
                                    <option value="{{ $project->id }}" selected>{{$project->name}}</option>
                                    @else
                                    <option value="{{ $project->id }}">{{$project->name}}</option>
                                    @endif
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-4">
            <div class="card card-block card-stretch card-height">
                <h5 class=" m-3">To do</h5>
                <div class="card-body" id="to-do">
                    @if(!empty($tasks))
                    @foreach($tasks as $task)
                    @if($task->status== 0)
                    <div class="card card-list" id="mov-{{ $task->id }}">
                        <div class="card-body">

                            <div class="d-flex align-items-center">
                                <svg class="svg-icon text-secondary mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <div class="pl-3 border-left">
                                    <h5 class="mb-1">{{ $task->name }}</h5>
                                    <p class="mb-0">{{ $task->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card card-block card-stretch card-height">
                <h5 class="m-3">In progress</h5>
                <div class="card-body" id="doing">
                    @if(!empty($tasks))
                    @foreach($tasks as $task)
                    @if($task->status== 1)
                    <div class="card card-list" id="mov-{{ $task->id }}">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <svg class="svg-icon text-secondary mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <div class="pl-3 border-left">
                                    <h5 class="mb-1">{{ $task->name }}</h5>
                                    <p class="mb-0">{{ $task->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card card-block card-stretch card-height">
                <h5 class="m-3">completed</h5>
                <div class="card-body" id="done">
                    @if(!empty($tasks))
                    @foreach($tasks as $task)
                    @if($task->status== 2)
                    <div class="card card-list" id="mov-{{ $task->id }}">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <svg class="svg-icon text-secondary mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <div class="pl-3 border-left">
                                    <h5 class="mb-1">{{ $task->name }}</h5>
                                    <p class="mb-0">{{ $task->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    dragula([
        document.getElementById("to-do"),
        document.getElementById("doing"),
        document.getElementById("done")
    ]).on('drop', (el, target, source, sibling) => {
        const elementId = $(el).attr("id");
        const targetID = $(target).attr("id");
        const sourceId = $(source).attr("id");
        
        changeStatus(elementId,sourceId,targetID)
    });

    function changeStatus(elementId,sourceId,targetID){
        console.log(elementId);
        console.log(sourceId);
        console.log(targetID);
        
        $_token = "{{ csrf_token() }}";
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ url('/changeStatus') }}",
            type: 'POST',
            async: true ,
            cache: false,
            data: {
                'id': elementId, 'source' : sourceId, 'target' : targetID
            }, //see the $_token
            datatype: 'html',
            success: function(data) { 
            },
            error: function(xhr, textStatus, thrownError) {

            }
        });
    }
</script>
@endsection