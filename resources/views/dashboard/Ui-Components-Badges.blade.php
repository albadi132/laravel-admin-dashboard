@extends('dashboard.layouts.app')
@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Badges</h1>
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
                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Sizes</h5>
                            <h1>Example heading
                                <span class="badge badge-secondary">New</span>
                            </h1>
                            <h2>Example heading
                                <span class="badge badge-secondary">New</span>
                            </h2>
                            <h3>Example heading
                                <span class="badge badge-secondary">New</span>
                            </h3>
                            <h4>Example heading
                                <span class="badge badge-secondary">New</span>
                            </h4>
                            <h5>Example heading
                                <span class="badge badge-secondary">New</span>
                            </h5>
                            <h6>Example heading
                                <span class="badge badge-secondary">New</span>
                            </h6>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Colors</h5>
                            <span class="badge badge-pill badge-primary mb-1">Primary</span>
                            <span class="badge badge-pill badge-secondary mb-1">Secondary</span>
                            <span class="badge badge-pill badge-success mb-1">Success</span>
                            <span class="badge badge-pill badge-danger mb-1">Danger</span>
                            <span class="badge badge-pill badge-warning mb-1">Warning</span>
                            <span class="badge badge-pill badge-info mb-1">Info</span>
                            <span class="badge badge-pill badge-light mb-1">Light</span>
                            <span class="badge badge-pill badge-dark mb-1">Dark</span>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Outline</h5>
                            <span class="badge badge-pill badge-outline-primary mb-1">Primary</span>
                            <span class="badge badge-pill badge-outline-secondary mb-1">Secondary</span>
                            <span class="badge badge-pill badge-outline-success mb-1">Success</span>
                            <span class="badge badge-pill badge-outline-danger mb-1">Danger</span>
                            <span class="badge badge-pill badge-outline-warning mb-1">Warning</span>
                            <span class="badge badge-pill badge-outline-info mb-1">Info</span>
                            <span class="badge badge-pill badge-outline-light mb-1">Light</span>
                            <span class="badge badge-pill badge-outline-dark mb-1">Dark</span>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Links</h5>
                            <a href="#" class="badge badge-primary mb-1">Primary</a>
                            <a href="#" class="badge badge-secondary mb-1">Secondary</a>
                            <a href="#" class="badge badge-success mb-1">Success</a>
                            <a href="#" class="badge badge-danger mb-1">Danger</a>
                            <a href="#" class="badge badge-warning mb-1">Warning</a>
                            <a href="#" class="badge badge-info mb-1">Info</a>
                            <a href="#" class="badge badge-light mb-1">Light</a>
                            <a href="#" class="badge badge-dark mb-1">Dark</a>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Counter Badges</h5>
                            <button type="button" class="btn btn-primary">
                                Notifications&nbsp;
                                <span class="badge badge-light">4</span>
                            </button>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Bootstrap Default</h5>
                            <span class="badge badge-primary mb-1">Primary</span>
                            <span class="badge badge-secondary mb-1">Secondary</span>
                            <span class="badge badge-success mb-1">Success</span>
                            <span class="badge badge-danger mb-1">Danger</span>
                            <span class="badge badge-warning mb-1">Warning</span>
                            <span class="badge badge-info mb-1">Info</span>
                            <span class="badge badge-light mb-1">Light</span>
                            <span class="badge badge-dark mb-1">Dark</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @endsection