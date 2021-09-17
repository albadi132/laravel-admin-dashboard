@extends('dashboard.layouts.app')
@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Navigation</h1>
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

                            <h5 class="mb-4">Nav Basic</h5>

                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>



                        </div>
                    </div>








                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Nav Horizontal Alignment</h5>

                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>

                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>

                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Nav Vertical Alignment</h5>

                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>

                        </div>
                    </div>



                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Nav Pills</h5>

                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active " href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>



                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Nav Fill and Justify</h5>

                            <ul class="nav nav-pills nav-fill">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Longer nav link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Nav Pills with Dropdowns</h5>

                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>









            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Pagination Basic</h5>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination mb-0">
                                    <li class="page-item ">
                                        <a class="page-link first" href="#">
                                            <i class="simple-icon-control-start"></i>
                                        </a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link prev" href="#">
                                            <i class="simple-icon-arrow-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link next" href="#" aria-label="Next">
                                            <i class="simple-icon-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link last" href="#">
                                            <i class="simple-icon-control-end"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Pagination Sizing</h5>

                            <h6 class="mb-3">Large</h6>
                            <nav class="mb-5">
                                <ul class="pagination pagination-lg mb-0">
                                    <li class="page-item ">
                                        <a class="page-link first" href="#">
                                            <i class="simple-icon-control-start"></i>
                                        </a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link prev" href="#">
                                            <i class="simple-icon-arrow-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link next" href="#" aria-label="Next">
                                            <i class="simple-icon-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link last" href="#">
                                            <i class="simple-icon-control-end"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>



                            <h6 class="mb-3">Small</h6>
                            <nav>
                                <ul class="pagination pagination-sm mb-0">
                                    <li class="page-item ">
                                        <a class="page-link first" href="#">
                                            <i class="simple-icon-control-start"></i>
                                        </a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link prev" href="#">
                                            <i class="simple-icon-arrow-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link next" href="#" aria-label="Next">
                                            <i class="simple-icon-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link last" href="#">
                                            <i class="simple-icon-control-end"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>





                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Pagination Alignment</h5>

                            <h6 class="mb-3">Center</h6>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item ">
                                        <a class="page-link first" href="#">
                                            <i class="simple-icon-control-start"></i>
                                        </a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link prev" href="#">
                                            <i class="simple-icon-arrow-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link next" href="#" aria-label="Next">
                                            <i class="simple-icon-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link last" href="#">
                                            <i class="simple-icon-control-end"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>


                            <h6 class="mb-3">Right</h6>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item ">
                                        <a class="page-link first" href="#">
                                            <i class="simple-icon-control-start"></i>
                                        </a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link prev" href="#">
                                            <i class="simple-icon-arrow-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link next" href="#" aria-label="Next">
                                            <i class="simple-icon-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link last" href="#">
                                            <i class="simple-icon-control-end"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">

                <div class="col-12">


                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Breadcrumb Basic</h5>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                                </ol>
                            </nav>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Library</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection