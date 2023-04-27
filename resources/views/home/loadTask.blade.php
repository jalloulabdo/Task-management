@if (!empty($tasks) && isset($tasks))

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
@else
<h1>Empty</h1>
@endif