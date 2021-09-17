@extends('dashboard.layouts.app')
@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Sortable</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Library</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">


                    <h5 class="mb-4">Sorting Columns</h5>
                    <div class="row icon-cards-row mb-4 sortable">
                        <div class="col-md-3 col-lg-3 col-sm-4 col-6 mb-2">
                            <a href="#" class="card">
                                <div class="card-body text-center">
                                    <i class="iconsminds-clock"></i>
                                    <p class="card-text font-weight-semibold mb-0">Pending Orders</p>
                                    <p class="lead text-center">14</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-6 mb-2">
                            <a href="#" class="card">
                                <div class="card-body text-center">
                                    <i class="iconsminds-basket-coins"></i>
                                    <p class="card-text mb-0">Completed Orders</p>
                                    <p class="lead text-center">32</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-6 mb-2">
                            <a href="#" class="card">
                                <div class="card-body text-center">
                                    <i class="iconsminds-arrow-refresh"></i>
                                    <p class="card-text mb-0">Refund Requests</p>
                                    <p class="lead text-center">74</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-6 mb-2">
                            <a href="#" class="card">
                                <div class="card-body text-center">
                                    <i class="iconsminds-mail-read"></i>
                                    <p class="card-text mb-0">New Comments</p>
                                    <p class="lead text-center">25</p>
                                </div>
                            </a>
                        </div>
                    </div>


                    <h5 class="mb-4">Basic</h5>

                    <div class="card mb-4">
                        <div class="card-body">
                            <ul class="sortable list-unstyled">
                                <li>
                                    <p>1. Angel Cake </p>
                                </li>
                                <li>
                                    <p>2. Bibingka </p>
                                </li>
                                <li>
                                    <p>3. Cremeschnitte </p>
                                </li>
                                <li>
                                    <p>4. Faworki</p>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <h5 class="mb-4">Handles</h5>

                    <div class="card mb-4">
                        <div class="card-body">
                            <ul class="sortable list-unstyled">
                                <li>
                                    <p>
                                        <span class="badge badge-pill badge-secondary handle">
                                            <i class="simple-icon-cursor-move"></i>
                                        </span>
                                        <span>Angel Cake</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="badge badge-pill badge-secondary handle">
                                            <i class="simple-icon-cursor-move"></i>
                                        </span> Bibingka</p>
                                </li>
                                <li>
                                    <p>
                                        <span class="badge badge-pill badge-secondary handle">
                                            <i class="simple-icon-cursor-move"></i>
                                        </span> Cremeschnitte</p>
                                </li>
                                <li>
                                    <p>
                                        <span class="badge badge-pill badge-secondary handle">
                                            <i class="simple-icon-cursor-move"></i>
                                        </span> Faworki</p>
                                </li>
                            </ul>

                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>

        @endsection