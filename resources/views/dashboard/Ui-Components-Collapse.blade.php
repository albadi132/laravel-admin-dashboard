@extends('dashboard.layouts.app')
@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Collapse</h1>
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
                            <h5 class="mb-4">Basic</h5>
                            <p class="mb-0">
                                <a class="btn btn-primary mb-1" data-toggle="collapse" href="#collapseExample"
                                    role="button" aria-expanded="true" aria-controls="collapseExample">
                                    Link with href
                                </a>
                                <button class="btn btn-primary mb-1" type="button" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    Button with data-target
                                </button>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="p-4 border mt-4">
                                    <p class="mb-0">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. Nihil anim keffiyeh helvetica,
                                        craft beer labore wes anderson cred nesciunt sapiente ea proident. Anim
                                        pariatur
                                        cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                        squid.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Multiple Targets</h5>
                            <p class="mb-0">
                                <a class="btn btn-primary mb-1" data-toggle="collapse" href="#multiCollapseExample1"
                                    role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle
                                    first element</a>
                                <button class="btn btn-primary mb-1" type="button" data-toggle="collapse"
                                    data-target="#multiCollapseExample2" aria-expanded="false"
                                    aria-controls="multiCollapseExample2">Toggle second element</button>
                                <button class="btn btn-primary mb-1" type="button" data-toggle="collapse"
                                    data-target=".multi-collapse" aria-expanded="false"
                                    aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle
                                    both elements</button>
                            </p>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="collapse  multi-collapse" id="multiCollapseExample1">
                                        <div class="p-4 border mt-4">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Nihil anim keffiyeh helvetica,
                                            craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="collapse  multi-collapse" id="multiCollapseExample2">
                                        <div class="p-4 border mt-4">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. Nihil anim keffiyeh helvetica,
                                            craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Accordion</h5>
                            <div id="accordion">

                                <div class="border">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                    </button>

                                    <div id="collapseOne" class="collapse show " data-parent="#accordion">
                                        <div class="p-4">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute,
                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod.
                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                            coffee
                                            nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                            labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice
                                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="border">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </button>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="p-4">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute,
                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod.
                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                            coffee
                                            nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                            labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice
                                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="border">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </button>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="p-4">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute,
                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod.
                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                            coffee
                                            nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                            labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice
                                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
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