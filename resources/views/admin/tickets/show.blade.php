@extends('admin.layouts.master')

@section('title', 'Tickets')

@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Tickets</h1>
                    <!--end::Title-->
                    {{ Breadcrumbs::render('adminTicketPage') }}
                </div>
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="row g-5 g-xl-10">
                    <div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10 bg-light">
                        <div class="row g-5 g-xl-4">
                            <div class="col-lg-3 col-6">
                                <div class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                                    <div class="card-body">
                                        <div class="page-title flex-column flex-wrap">
                                            <h1 class="text-white flex-column">{{$pendingStatus}}</h1>
                                        </div>
                                        <div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">Pending Status
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="card bg-success hoverable card-xl-stretch mb-xl-8">
                                    <div class="card-body">
                                        <div class="page-title flex-column flex-wrap">
                                            <h1 class="text-white flex-column">{{$activeStatus}}</h1>
                                        </div>
                                        <div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">Active Status
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="card bg-info hoverable card-xl-stretch mb-xl-8">
                                    <div class="card-body">
                                        <div class="page-title flex-column flex-wrap">
                                            <h1 class="text-white flex-column">{{$inprogressStatus}}</h1>
                                        </div>
                                        <div class="text-white fw-bold fs-2 mb-2 mt-5">In-progress Status
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="card bg-warning hoverable card-xl-stretch mb-5 mb-xl-8">
                                    <div class="card-body">
                                        <div class="page-title flex-column flex-wrap">
                                            <h1 class="text-white flex-column">{{$holdStatus}}</h1>
                                        </div>
                                        <div class="text-white fw-bold fs-2 mb-2 mt-5">Hold Status
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="card bg-danger hoverable card-xl-stretch mb-5 mb-xl-8">
                                    <div class="card-body">
                                        <div class="page-title flex-column flex-wrap">
                                            <h1 class="text-white flex-column">{{$closedStatus}}</h1>
                                        </div>
                                        <div class="text-white fw-bold fs-2 mb-2 mt-5">Closed Status
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @livewire('admin.tickets.tickets-list')
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->

@endsection
