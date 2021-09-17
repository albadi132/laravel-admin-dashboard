@extends('dashboard.layouts.app')
@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Alerts</h1>
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
                            <h5 class="mb-4">Rounded</h5>
                            <div class="alert alert-primary rounded" role="alert">
                                This is a primary alert—check it out!
                            </div>
                            <div class="alert alert-secondary rounded" role="alert">
                                This is a secondary alert—check it out!
                            </div>
                            <div class="alert alert-success rounded" role="alert">
                                This is a success alert—check it out!
                            </div>
                            <div class="alert alert-danger rounded" role="alert">
                                This is a danger alert—check it out!
                            </div>
                            <div class="alert alert-warning rounded" role="alert">
                                This is a warning alert—check it out!
                            </div>
                            <div class="alert alert-info rounded" role="alert">
                                This is a info alert—check it out!
                            </div>
                            <div class="alert alert-light rounded" role="alert">
                                This is a light alert—check it out!
                            </div>
                            <div class="alert alert-dark rounded mb-0" role="alert">
                                This is a dark alert—check it out!
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Default</h5>
                            <div class="alert alert-primary" role="alert">
                                This is a primary alert—check it out!
                            </div>
                            <div class="alert alert-secondary" role="alert">
                                This is a secondary alert—check it out!
                            </div>
                            <div class="alert alert-success" role="alert">
                                This is a success alert—check it out!
                            </div>
                            <div class="alert alert-danger" role="alert">
                                This is a danger alert—check it out!
                            </div>
                            <div class="alert alert-warning" role="alert">
                                This is a warning alert—check it out!
                            </div>
                            <div class="alert alert-info" role="alert">
                                This is a info alert—check it out!
                            </div>
                            <div class="alert alert-light" role="alert">
                                This is a light alert—check it out!
                            </div>
                            <div class="alert alert-dark mb-0" role="alert">
                                This is a dark alert—check it out!
                            </div>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4 ">Dismissing</h5>
                            <div class="alert alert-warning alert-dismissible fade show rounded mb-0" role="alert">
                                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Bootstrap Notify</h5>
                            <a href="#" class="btn btn-outline-primary rounded notify-btn mb-1" data-from="top"
                                data-align="left">Top Left</a>
                            <a href="#" class="btn btn-outline-primary rounded notify-btn mb-1" data-from="top"
                                data-align="center">Top Center</a>
                            <a href="#" class="btn btn-outline-primary rounded notify-btn mb-1" data-from="top"
                                data-align="right">Top Right</a>
                            <a href="#" class="btn btn-outline-primary rounded notify-btn mb-1" data-from="bottom"
                                data-align="left">Bottom Left</a>
                            <a href="#" class="btn btn-outline-primary rounded notify-btn mb-1" data-from="bottom"
                                data-align="center">Bottom Center</a>
                            <a href="#" class="btn btn-outline-primary rounded notify-btn mb-1" data-from="bottom"
                                data-align="right">Bottom Right</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        @endsection