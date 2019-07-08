@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12 pa-0">
                <div class="faq-search-wrap bg-teal-dark-4">
                    <div class="container">
                        <h1 class="display-5 text-white mb-20">Ask a question or browse by category below.</h1>
                        <div class="form-group w-100 mb-0">
                            <div class="input-group">
                                <input class="form-control form-control-lg filled-input bg-white" placeholder="Search by keywords" type="text">
                                <div class="input-group-append">
                                    <span class="input-group-text"><span class="feather-icon"><i data-feather="arrow-right"></i></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-sm-60 mt-30">
                    <div class="hk-row">
                        <div class="col-xl-4">
                            <div class="card">
                                <h6 class="card-header">
                                    Category
                                </h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex align-items-center">
                                        <a href="{{ route('admin.faq') }}"><i class="ion ion-md-sunny mr-15"></i>Terms & conditions<span class="badge badge-light badge-pill ml-15">06</span></a>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center active">
                                        <i class="ion ion-md-unlock mr-15"></i>Privacy policy<span class="badge badge-light badge-pill ml-15">03</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <i class="ion ion-md-bookmark mr-15"></i>Terms of use<span class="badge badge-light badge-pill ml-15">10</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <i class="ion ion-md-filing mr-15"></i>Documentation<span class="badge badge-light badge-pill ml-15">27</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="card card-lg">
                                <h3 class="card-header border-bottom-0">
                                    Privacy policy</h3>
                                <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between activestate">
                                            <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">The Intellectual Property</a>
                                        </div>
                                        <div id="collapse_1i" class="collapse show" data-parent="#accordion_2" role="tabpanel">
                                            <div class="card-body pa-15">The Intellectual Property disclosure will inform users that the contents, logo and other visual media you created is your property and is protected by copyright laws.</div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">Termination clause</a>
                                        </div>
                                        <div id="collapse_2i" class="collapse" data-parent="#accordion_2">
                                            <div class="card-body pa-15">A Termination clause will inform that users’ accounts on your website and mobile app or users’ access to your website and mobile (if users can’t have an account with you) can be terminated in case of abuses or at your sole discretion.</div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">Governing Law</a>
                                        </div>
                                        <div id="collapse_3i" class="collapse" data-parent="#accordion_2">
                                            <div class="card-body pa-15">A Governing Law will inform users which laws govern the agreement. This should the country in which your company is headquartered or the country from which you operate your website and mobile app.</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>
@endsection
