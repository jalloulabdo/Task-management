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
                <a href="{{ route('membres.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </a>
            </div>
            <div class="card-body">
                <p></p>
                <form action="{{ route('membres.update', $membre->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <div class="crm-profile-img-edit position-relative">
                                    <img class="crm-profile-pic rounded avatar-100" src="{{ $membre->image ? url('storage/images/membre/'.$membre->image) : url('storage/images/membre/user-1.jpg') }}" alt="profile-pic">
                                    <div class="crm-p-image bg-primary">
                                        <i class="las la-pen upload-button"></i>
                                        <input class="file-upload" type="file" name="image" accept="image/*">
                                    </div>
                                </div>
                                <div class="img-extension mt-3">
                                    <div class="d-inline-block align-items-center">
                                        <span>Only</span>
                                        <a href="javascript:void();">.jpg</a>
                                        <a href="javascript:void();">.png</a>
                                        <a href="javascript:void();">.jpeg</a>
                                        <span>allowed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Full name</label>
                            <input type="text" name="name" class="form-control" id="validationDefault01" value="{{$membre->name}}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefaultUsername">Email *</label>
                            <input type="text" name="email" class="form-control" id="exampleInputText004" value="{{$membre->email}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputText004" value="{{$membre->phone}}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Password</label>
                            <div class="input-group mb-4">

                                <div class="input-group-prepend">
                                    <button class="btn btn-primary" type="button" onClick=generatePass()>Generate </button>
                                </div>

                                <input type="text" class="form-control" name="password" id="password" value="{{$membre->password}}">
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function generatePass() {
        var pass = '';
        var str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' +
            'abcdefghijklmnopqrstuvwxyz0123456789@#$';

        for (let i = 1; i <= 8; i++) {
            var char = Math.floor(Math.random() * str.length + 1);
            pass += str.charAt(char)
        }
        $('#password').val(pass);
    }
</script>
@endsection