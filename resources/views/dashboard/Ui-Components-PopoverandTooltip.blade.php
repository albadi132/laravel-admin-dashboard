@extends('dashboard.layouts.app')
@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Popover and Tooltip</h1>
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
                        <div class="card-body">

                            <h5 class="mb-4">Popover</h5>
                            <button type="button" class="btn btn-secondary mb-2"  
                                data-toggle="popover" data-placement="top"
                                data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on top
                            </button>

                            <button type="button" class="btn btn-secondary mb-2"
                                data-toggle="popover" data-placement="right"
                                data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on right
                            </button>

                            <button type="button" class="btn btn-secondary mb-2"
                                data-toggle="popover" data-placement="bottom" data-content="Vivamus
                                              sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on bottom
                            </button>

                            <button type="button" class="btn btn-secondary mb-2"
                                data-toggle="popover" data-placement="left"
                                data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on left
                            </button>

                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Tooltip</h5>
                            <button type="button" class="btn btn-secondary mb-2" data-toggle="tooltip"
                                data-placement="top" title="Tooltip on top">
                                Tooltip on top
                            </button>
                            <button type="button" class="btn btn-secondary mb-2" data-toggle="tooltip"
                                data-placement="right" title="Tooltip on right">
                                Tooltip on right
                            </button>
                            <button type="button" class="btn btn-secondary mb-2" data-toggle="tooltip"
                                data-placement="bottom" title="Tooltip on bottom">
                                Tooltip on bottom
                            </button>
                            <button type="button" class="btn btn-secondary mb-2" data-toggle="tooltip"
                                data-placement="left" title="Tooltip on left">
                                Tooltip on left
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection