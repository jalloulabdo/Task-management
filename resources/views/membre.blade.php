@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5>Membres</h5>
                            <div class="d-flex align-items-center">
                                <div class="list-grid-toggle d-flex align-items-center mr-3">
                                    <div data-toggle-extra="tab" data-target-extra="#grid" class="active">
                                        <div class="grid-icon mr-3">
                                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="3" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="14" width="7" height="7"></rect>
                                                <rect x="3" y="14" width="7" height="7"></rect>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-toggle-extra="tab" data-target-extra="#list">
                                        <div class="grid-icon">
                                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="21" y1="10" x2="3" y2="10"></line>
                                                <line x1="21" y1="6" x2="3" y2="6"></line>
                                                <line x1="21" y1="14" x2="3" y2="14"></line>
                                                <line x1="21" y1="18" x2="3" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-3 border-left btn-new">
                                    <a href="#" class="btn btn-primary" data-target="#new-user-modal" data-toggle="modal">New Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="grid" class="item-content animate__animated animate__fadeIn active" data-toggle-extra="tab-content">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card-transparent card-block card-stretch card-height">
                        <div class="card-body text-center p-0">
                            <div class="item">
                                <div class="odr-img">
                                    <img src="../assets/images/user/01.jpg" class="img-fluid rounded-circle avatar-90 m-auto" alt="image">
                                </div>
                                <div class="odr-content rounded">
                                    <h4 class="mb-2">Ruben Franci</h4>
                                    <p class="mb-3">rubenfranci@gmail.com</p>
                                    <ul class="list-unstyled mb-3">
                                        <li class="bg-secondary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-mail-open-line m-0"></i></li>
                                        <li class="bg-primary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-chat-3-line m-0"></i></li>
                                        <li class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></li>
                                    </ul>
                                    <div class="pt-3 border-top">
                                        <a href="#" class="btn btn-primary">Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card-transparent card-block card-stretch card-height">
                        <div class="card-body text-center p-0">
                            <div class="item">
                                <div class="odr-img">
                                    <img src="../assets/images/user/02.jpg" class="img-fluid rounded-circle avatar-90 m-auto" alt="image">
                                </div>
                                <div class="odr-content rounded">
                                    <h4 class="mb-2">Kaylynn Press</h4>
                                    <p class="mb-3">kaylynnpress@gmail.com</p>
                                    <ul class="list-unstyled mb-3">
                                        <li class="bg-secondary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-mail-open-line m-0"></i></li>
                                        <li class="bg-primary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-chat-3-line m-0"></i></li>
                                        <li class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></li>
                                    </ul>
                                    <div class="pt-3 border-top">
                                        <a href="#" class="btn btn-primary">Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card-transparent card-block card-stretch card-height">
                        <div class="card-body text-center p-0">
                            <div class="item">
                                <div class="odr-img">
                                    <img src="../assets/images/user/03.jpg" class="img-fluid rounded-circle avatar-90 m-auto" alt="image">
                                </div>
                                <div class="odr-content rounded">
                                    <h4 class="mb-2">Corey Press</h4>
                                    <p class="mb-3">coreypress@gmail.com</p>
                                    <ul class="list-unstyled mb-3">
                                        <li class="bg-secondary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-mail-open-line m-0"></i></li>
                                        <li class="bg-primary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-chat-3-line m-0"></i></li>
                                        <li class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></li>
                                    </ul>
                                    <div class="pt-3 border-top">
                                        <a href="#" class="btn btn-primary">Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card-transparent card-block card-stretch card-height">
                        <div class="card-body text-center p-0">
                            <div class="item">
                                <div class="odr-img">
                                    <img src="../assets/images/user/04.jpg" class="img-fluid rounded-circle avatar-90 m-auto" alt="image">
                                </div>
                                <div class="odr-content rounded">
                                    <h4 class="mb-2">Zain Carder</h4>
                                    <p class="mb-3">zaincarder@gmail.com</p>
                                    <ul class="list-unstyled mb-3">
                                        <li class="bg-secondary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-mail-open-line m-0"></i></li>
                                        <li class="bg-primary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-chat-3-line m-0"></i></li>
                                        <li class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></li>
                                    </ul>
                                    <div class="pt-3 border-top">
                                        <a href="#" class="btn btn-primary">Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card-transparent card-block card-stretch card-height">
                        <div class="card-body text-center p-0">
                            <div class="item">
                                <div class="odr-img">
                                    <img src="../assets/images/user/05.jpg" class="img-fluid rounded-circle avatar-90 m-auto" alt="image">
                                </div>
                                <div class="odr-content rounded">
                                    <h4 class="mb-2">Erin Donin</h4>
                                    <p class="mb-3">erindonin@gmail.com</p>
                                    <ul class="list-unstyled mb-3">
                                        <li class="bg-secondary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-mail-open-line m-0"></i></li>
                                        <li class="bg-primary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-chat-3-line m-0"></i></li>
                                        <li class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></li>
                                    </ul>
                                    <div class="pt-3 border-top">
                                        <a href="#" class="btn btn-primary">Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card-transparent card-block card-stretch card-height">
                        <div class="card-body text-center p-0">
                            <div class="item">
                                <div class="odr-img">
                                    <img src="../assets/images/user/06.jpg" class="img-fluid rounded-circle avatar-90 m-auto" alt="image">
                                </div>
                                <div class="odr-content rounded">
                                    <h4 class="mb-2">Mira Herwitz</h4>
                                    <p class="mb-3">miraherwitz@gmail.com</p>
                                    <ul class="list-unstyled mb-3">
                                        <li class="bg-secondary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-mail-open-line m-0"></i></li>
                                        <li class="bg-primary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-chat-3-line m-0"></i></li>
                                        <li class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></li>
                                    </ul>
                                    <div class="pt-3 border-top">
                                        <a href="#" class="btn btn-primary">Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card-transparent card-block card-stretch card-height">
                        <div class="card-body text-center p-0">
                            <div class="item">
                                <div class="odr-img">
                                    <img src="../assets/images/user/07.jpg" class="img-fluid rounded-circle avatar-90 m-auto" alt="image">
                                </div>
                                <div class="odr-content rounded">
                                    <h4 class="mb-2">Kaiya George</h4>
                                    <p class="mb-3">kaiyageorge@gmail.com</p>
                                    <ul class="list-unstyled mb-3">
                                        <li class="bg-secondary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-mail-open-line m-0"></i></li>
                                        <li class="bg-primary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-chat-3-line m-0"></i></li>
                                        <li class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></li>
                                    </ul>
                                    <div class="pt-3 border-top">
                                        <a href="#" class="btn btn-primary">Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card-transparent card-block card-stretch card-height">
                        <div class="card-body text-center p-0">
                            <div class="item">
                                <div class="odr-img">
                                    <img src="../assets/images/user/08.jpg" class="img-fluid rounded-circle avatar-90 m-auto" alt="image">
                                </div>
                                <div class="odr-content rounded">
                                    <h4 class="mb-2">Lincoln George</h4>
                                    <p class="mb-3">lincolngeorge@gmail.com</p>
                                    <ul class="list-unstyled mb-3">
                                        <li class="bg-secondary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-mail-open-line m-0"></i></li>
                                        <li class="bg-primary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-chat-3-line m-0"></i></li>
                                        <li class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></li>
                                    </ul>
                                    <div class="pt-3 border-top">
                                        <a href="#" class="btn btn-primary">Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card-transparent card-block card-stretch card-height">
                        <div class="card-body text-center p-0">
                            <div class="item">
                                <div class="odr-img">
                                    <img src="../assets/images/user/09.jpg" class="img-fluid rounded-circle avatar-90 m-auto" alt="image">
                                </div>
                                <div class="odr-content rounded">
                                    <h4 class="mb-2">Paityn Siphron</h4>
                                    <p class="mb-3">paitynsiphron@gmail.com</p>
                                    <ul class="list-unstyled mb-3">
                                        <li class="bg-secondary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-mail-open-line m-0"></i></li>
                                        <li class="bg-primary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-chat-3-line m-0"></i></li>
                                        <li class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></li>
                                    </ul>
                                    <div class="pt-3 border-top">
                                        <a href="#" class="btn btn-primary">Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="list" class="item-content animate__animated animate__fadeIn" data-toggle-extra="tab-content">
            <div class="table-responsive rounded bg-white mb-4">
                <table class="table mb-0 table-borderless tbl-server-info">
                    <tbody>
                        <tr>
                            <td>
                                <div class="media align-items-center">
                                    <img src="../assets/images/user/01.jpg" class="img-fluid rounded-circle avatar-40" alt="image">
                                    <h5 class="ml-3">Paityn Siphron</h5>
                                </div>
                            </td>
                            <td>paitynsiphron@gmail.com</td>
                            <td>
                                <div class="media align-items-center">
                                    <div class="bg-secondary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-mail-open-line m-0"></i></div>
                                    <div class="bg-primary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-chat-3-line m-0"></i></div>
                                    <div class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Message</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="text-body"><i class="las la-pen mr-3"></i></a>
                                    <a href="#" class="text-body"><i class="las la-trash-alt mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media align-items-center">
                                    <img src="../assets/images/user/02.jpg" class="img-fluid rounded-circle avatar-40" alt="image">
                                    <h5 class="ml-3">Kaylynn Press</h5>
                                </div>
                            </td>
                            <td>kaylynnpress@gmail.com</td>
                            <td>
                                <div class="media align-items-center">
                                    <div class="bg-secondary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-mail-open-line m-0"></i></div>
                                    <div class="bg-primary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-chat-3-line m-0"></i></div>
                                    <div class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Message</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="text-body"><i class="las la-pen mr-3"></i></a>
                                    <a href="#" class="text-body"><i class="las la-trash-alt mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media align-items-center">
                                    <img src="../assets/images/user/03.jpg" class="img-fluid rounded-circle avatar-40" alt="image">
                                    <h5 class="ml-3">Corey Press</h5>
                                </div>
                            </td>
                            <td>coreypress@gmail.com</td>
                            <td>
                                <div class="media align-items-center">
                                    <div class="bg-secondary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-mail-open-line m-0"></i></div>
                                    <div class="bg-primary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-chat-3-line m-0"></i></div>
                                    <div class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Message</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="text-body"><i class="las la-pen mr-3"></i></a>
                                    <a href="#" class="text-body"><i class="las la-trash-alt mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media align-items-center">
                                    <img src="../assets/images/user/04.jpg" class="img-fluid rounded-circle avatar-40" alt="image">
                                    <h5 class="ml-3">Zain Carder</h5>
                                </div>
                            </td>
                            <td>zaincarder@gmail.com</td>
                            <td>
                                <div class="media align-items-center">
                                    <div class="bg-secondary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-mail-open-line m-0"></i></div>
                                    <div class="bg-primary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-chat-3-line m-0"></i></div>
                                    <div class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Message</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="text-body"><i class="las la-pen mr-3"></i></a>
                                    <a href="#" class="text-body"><i class="las la-trash-alt mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media align-items-center">
                                    <img src="../assets/images/user/05.jpg" class="img-fluid rounded-circle avatar-40" alt="image">
                                    <h5 class="ml-3">Erin Donin</h5>
                                </div>
                            </td>
                            <td>erindonin@gmail.com</td>
                            <td>
                                <div class="media align-items-center">
                                    <div class="bg-secondary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-mail-open-line m-0"></i></div>
                                    <div class="bg-primary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-chat-3-line m-0"></i></div>
                                    <div class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Message</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="text-body"><i class="las la-pen mr-3"></i></a>
                                    <a href="#" class="text-body"><i class="las la-trash-alt mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media align-items-center">
                                    <img src="../assets/images/user/06.jpg" class="img-fluid rounded-circle avatar-40" alt="image">
                                    <h5 class="ml-3">Mira Herwitz</h5>
                                </div>
                            </td>
                            <td>miraherwitz@gmail.com</td>
                            <td>
                                <div class="media align-items-center">
                                    <div class="bg-secondary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-mail-open-line m-0"></i></div>
                                    <div class="bg-primary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-chat-3-line m-0"></i></div>
                                    <div class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Message</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="text-body"><i class="las la-pen mr-3"></i></a>
                                    <a href="#" class="text-body"><i class="las la-trash-alt mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media align-items-center">
                                    <img src="../assets/images/user/07.jpg" class="img-fluid rounded-circle avatar-40" alt="image">
                                    <h5 class="ml-3">Kaiya George</h5>
                                </div>
                            </td>
                            <td>kaiyageorge@gmail.com</td>
                            <td>
                                <div class="media align-items-center">
                                    <div class="bg-secondary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-mail-open-line m-0"></i></div>
                                    <div class="bg-primary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-chat-3-line m-0"></i></div>
                                    <div class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Message</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="text-body"><i class="las la-pen mr-3"></i></a>
                                    <a href="#" class="text-body"><i class="las la-trash-alt mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media align-items-center">
                                    <img src="../assets/images/user/08.jpg" class="img-fluid rounded-circle avatar-40" alt="image">
                                    <h5 class="ml-3">Lincoln George</h5>
                                </div>
                            </td>
                            <td>lincolngeorge@gmail.com</td>
                            <td>
                                <div class="media align-items-center">
                                    <div class="bg-secondary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-mail-open-line m-0"></i></div>
                                    <div class="bg-primary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-chat-3-line m-0"></i></div>
                                    <div class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Message</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="text-body"><i class="las la-pen mr-3"></i></a>
                                    <a href="#" class="text-body"><i class="las la-trash-alt mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media align-items-center">
                                    <img src="../assets/images/user/09.jpg" class="img-fluid rounded-circle avatar-40" alt="image">
                                    <h5 class="ml-3">Paityn Siphron</h5>
                                </div>
                            </td>
                            <td>paitynsiphron@gmail.com</td>
                            <td>
                                <div class="media align-items-center">
                                    <div class="bg-secondary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-mail-open-line m-0"></i></div>
                                    <div class="bg-primary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-chat-3-line m-0"></i></div>
                                    <div class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Message</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="text-body"><i class="las la-pen mr-3"></i></a>
                                    <a href="#" class="text-body"><i class="las la-trash-alt mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Page end  -->
    </div>

</div>

<div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-user-modal">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-block text-center pb-3 border-bttom">
                <h3 class="modal-title" id="exampleModalCenterTitle02">New Membre</h3>
            </div>
            <div class="modal-body">
             <form action="{{ route('membres.store') }}" method="POST">
                 @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3 custom-file-small">
                            <label for="exampleInputText01" class="h5">Upload Profile Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02" name="image">
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText2" class="h5" >Full Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputText2" placeholder="Enter your full name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText04"  class="h5">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputText04" placeholder="Enter phone number">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText006"  class="h5">Email</label>
                            <input type="text" class="form-control"  name="email" id="exampleInputText006" placeholder="Enter your Email">
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText2" class="h5">Type</label>
                            <select name="type" class="selectpicker form-control" data-style="py-0">
                                <option>Type</option>
                                <option>Trainee</option>
                                <option>Employee</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText2" class="h5">Role</label>
                            <select name="type" class="selectpicker form-control" data-style="py-0">
                                <option>Role</option>
                                <option>Designer</option>
                                <option>Developer</option>
                                <option>Manager</option>
                                <option>BDE</option>
                                <option>SEO</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                            <button type="submit" class="btn btn-primary mr-3"  >Save</button>
                            <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                        </div>
                    </div>
                </div>
             </form>
            </div>
        </div>
    </div>
</div>

@endsection