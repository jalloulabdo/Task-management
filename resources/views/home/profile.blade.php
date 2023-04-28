@extends('layouts.app')

@section('content')
<style>
    .custom-control-label:before {
        display: none;
    }
</style>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="iq-edit-list usr-edit">
                            <ul class="iq-edit-profile d-flex nav nav-pills">
                                <li class="col-md-6 p-0">
                                    <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                        Personal Information
                                    </a>
                                </li>
                                <li class="col-md-6 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                        Change Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="iq-edit-list-data">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Personal Information</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('profileEdit', $user->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row align-items-center">
                                            <div class="col-md-12">
                                                <div class="profile-img-edit">
                                                    <div class="crm-profile-img-edit">
                                                        <img class="crm-profile-pic rounded-circle avatar-100" src="{{ $user->image ? url('storage/images/membre/'.$user->image) : url('storage/images/membre/user-1.jpg') }}" alt="profile-pic">
                                                        <div class="crm-p-image bg-primary">
                                                            <i class="las la-pen upload-button"></i>
                                                            <input class="file-upload" name="image" type="file" accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" row align-items-center">
                                            <div class="form-group col-sm-6">
                                                <label for="fname">Full Name:</label>
                                                <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="lname">Email:</label>
                                                <input type="text" name="email" class="form-control" id="email" value="{{ $user->email }}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="uname">Phone</label>
                                                <input type="text" name="phone" class="form-control" id="uname" value="{{ $user->phone }}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="dob">Date Of Birth:</label>
                                                <input type="date" name="date_birth" class="form-control" id="date_birth" value="{{ $user->date_birth }}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="d-block">Gender:</label>
                                                <div class="custom-control custom-checkbox mb-3 custom-control-inline">
                                                    <input type="radio" id="male" name="gender" value="Male" class="custom-radio-1 mr-2" onclick="checkRadio(id)" {{ $user->gender == 'Male' ? 'checked' : ''}}>
                                                    <label class="custom-control-label" for="customControlValidation1"> Male </label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-3 custom-control-inline">
                                                    <input type="radio" id="female" name="gender" value="Female" class="custom-radio-1 mr-2" {{ $user->gender == 'Female' ? 'checked' : ''}}>
                                                    <label class="custom-control-label" for="customControlValidation1"> Female </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Change Password</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('password.update') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label for="cpass">{{ __('Email Address') }}</label>
                                            <input id="email" type="email" class="form-control" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="npass">{{ __('Password') }}</label>
                                            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="vpass">{{ __('Confirm Password') }}</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">{{ __('Reset Password') }}</button>
                                        <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection