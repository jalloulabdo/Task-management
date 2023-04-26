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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-4">
            <div class="card card-block card-stretch card-height">
                <h5 class=" m-3">À faire</h5>
                <div class="card-body" id="to-do">

                    @foreach($tasks as $task)
                    @if($task->status== 0)
                    <div class="card card-list" id="mov{{ $task->id }}">
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
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card card-block card-stretch card-height">
                <h5 class="m-3">En cours</h5>
                <div class="card-body" id="doing">

                    <div class="card card-list">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <svg class="svg-icon text-secondary mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <div class="pl-3 border-left">
                                    <h5 class="mb-1">Direct Development</h5>
                                    <p class="mb-0">Unveling the design system</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-list">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <svg class="svg-icon text-primary mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                </svg>
                                <div class="pl-3 border-left">
                                    <h5 class="mb-1">action point assigned</h5>
                                    <p class="mb-0">Unveling the design system</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-list">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <svg class="svg-icon text-warning mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <div class="pl-3 border-left">
                                    <h5 class="mb-1">Private Notes</h5>
                                    <p class="mb-0">Unveling the design system</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-list mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <svg class="svg-icon text-success mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                                <div class="pl-3 border-left">
                                    <h5 class="mb-1">Support Request</h5>
                                    <p class="mb-0">Unveling the design system</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card card-block card-stretch card-height">
                <h5 class="m-3">Terminé</h5>
                <div class="card-body" id="done">

                    <div class="card card-list">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <svg class="svg-icon text-secondary mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <div class="pl-3 border-left">
                                    <h5 class="mb-1">Direct Development</h5>
                                    <p class="mb-0">Unveling the design system</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-list">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <svg class="svg-icon text-primary mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                </svg>
                                <div class="pl-3 border-left">
                                    <h5 class="mb-1">action point assigned</h5>
                                    <p class="mb-0">Unveling the design system</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-list">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <svg class="svg-icon text-warning mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <div class="pl-3 border-left">
                                    <h5 class="mb-1">Private Notes</h5>
                                    <p class="mb-0">Unveling the design system</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-list mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <svg class="svg-icon text-success mr-3" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                                <div class="pl-3 border-left">
                                    <h5 class="mb-1">Support Request</h5>
                                    <p class="mb-0">Unveling the design system</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
        console.log(elementId);
        console.log(targetID);
        console.log(sourceId);
    });
</script>
@endsection