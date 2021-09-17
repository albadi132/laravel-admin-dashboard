@extends('dashboard.layouts.app')
@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Cards</h1>
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
                    <h5 class="mb-4">Icon Card</h5>
                    <div class="row icon-cards-row mb-4">
                        <div class="col-md-3 col-lg-2 col-sm-4 col-6 mb-4">
                            <a href="#" class="card">
                                <div class="card-body text-center">
                                    <i class="iconsminds-clock"></i>
                                    <p class="card-text font-weight-semibold mb-0">Pending Orders</p>
                                    <p class="lead text-center">16</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <h5 class="mb-4">Image Card</h5>
                    <div class="row mb-4">
                        <div class="col-xs-6 col-lg-3 col-12 mb-4">
                            <div class="card">
                                <div class="position-relative">
                                    <img class="card-img-top" src="img/cards/thumb-1.jpg" alt="Card image cap">
                                    <span
                                        class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                                    <span
                                        class="badge badge-pill badge-secondary position-absolute badge-top-left-2">TRENDING</span>
                                </div>
                                <div class="card-body">
                                    <p class="list-item-heading mb-4">Homemade Cheesecake with Fresh Berries and Mint
                                    </p>
                                    <footer>
                                        <p class="text-muted text-small mb-0 font-weight-light">09.04.2018</p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-lg-3 col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="list-item-heading mb-4">Homemade Cheesecake with Fresh Berries and Mint
                                    </p>
                                    <footer>
                                        <p class="text-muted text-small mb-0 font-weight-light">09.04.2018</p>
                                    </footer>
                                </div>
                                <div class="position-relative">
                                    <img class="card-img-bottom" src="img/cards/thumb-1.jpg" alt="Card image cap">
                                    <span
                                        class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                                    <span
                                        class="badge badge-pill badge-secondary position-absolute badge-top-left-2">TRENDING</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h5 class="mb-4">Image Overlay Card</h5>
                    <div class="row mb-4">

                        <div class="col-xs-6 col-lg-3 col-12 mb-4">
                            <div class="card bg-dark text-white">
                                <img class="card-img" src="img/cards/thumb-1.jpg" alt="Card image">
                                <div class="card-img-overlay">
                                    <p class="list-item-heading mb-5">Fruitcake</p>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="mb-4">Image Card List</h5>

                    <div class="row mb-4">

                        <div class="col-md-12 mb-4">

                            <div class="card d-flex flex-row mb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Thumbnail" src="img/cards/thumb-1.jpg"
                                        class="list-thumbnail responsive border-0 card-img-left" />
                                </a>
                                <div class="pl-2 d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero align-items-lg-center">
                                        <a href="#" class="w-40 w-sm-100">
                                            <p class="list-item-heading mb-1 truncate">Chocolate Cake</p>
                                        </a>
                                        <p class="mb-1 text-muted text-small w-15 w-sm-100">Cupcakes</p>
                                        <p class="mb-1 text-muted text-small w-15 w-sm-100">09.04.2018</p>
                                        <div class="w-15 w-sm-100">
                                            <span class="badge badge-pill badge-secondary">ON HOLD</span>
                                        </div>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-1 align-self-center pr-4">
                                        <label class="custom-control custom-checkbox mb-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="mb-4">Tab Card</h5>

                    <div class="row mb-4">
                        <div class="col-md-6 col-lg-3 col-12 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs " role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first"
                                                role="tab" aria-controls="first" aria-selected="true">Tab 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="second-tab" data-toggle="tab" href="#second"
                                                role="tab" aria-controls="second" aria-selected="false">Tab 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="third-tab" data-toggle="tab" href="#third"
                                                role="tab" aria-controls="third" aria-selected="false">Tab 3</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="first" role="tabpanel"
                                            aria-labelledby="first-tab">
                                            <h6 class="mb-4">Homemade Cheesecake with Fresh Berries and Mint</h6>
                                            <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                                        </div>
                                        <div class="tab-pane fade" id="second" role="tabpanel"
                                            aria-labelledby="second-tab">
                                            <h6 class="mb-4">Wedding Cake with Flowers Macarons and Blueberries</h6>
                                            <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>

                                        </div>
                                        <div class="tab-pane fade" id="third" role="tabpanel"
                                            aria-labelledby="third-tab">
                                            <h6 class="mb-4">Cheesecake with Chocolate Cookies and Cream Biscuits</h6>
                                            <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 col-12 mb-4">
                            <div class="card">
                                <div class="card-header pl-0 pr-0">
                                    <ul class="nav nav-tabs card-header-tabs  ml-0 mr-0" role="tablist">
                                        <li class="nav-item w-50 text-center">
                                            <a class="nav-link active" id="first-tab_" data-toggle="tab"
                                                href="#firstFull" role="tab" aria-controls="first"
                                                aria-selected="true">Tab 1</a>
                                        </li>
                                        <li class="nav-item w-50 text-center">
                                            <a class="nav-link" id="second-tab_" data-toggle="tab" href="#secondFull"
                                                role="tab" aria-controls="second" aria-selected="false">Tab 2</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="firstFull" role="tabpanel"
                                            aria-labelledby="first-tab_">
                                            <h6 class="mb-4">Homemade Cheesecake with Fresh Berries and Mint</h6>
                                            <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                                        </div>
                                        <div class="tab-pane fade" id="secondFull" role="tabpanel"
                                            aria-labelledby="second-tab_">
                                            <h6 class="mb-4">Wedding Cake with Flowers Macarons and Blueberries</h6>
                                            <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h5 class="mb-4">User Card</h5>

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-4 col-12 mb-4">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img alt="Profile" src="img/profiles/l-1.jpg"
                                            class="img-thumbnail border-0 rounded-circle mb-4 list-thumbnail">
                                        <p class="list-item-heading mb-1">Sarah Kortney</p>
                                        <p class="mb-4 text-muted text-small">Executive Director</p>
                                        <button type="button" class="btn btn-sm btn-outline-primary ">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-lg-4 col-12 mb-4">
                            <div class="card d-flex flex-row mb-4">
                                <a class="d-flex" href="#">
                                    <img alt="Profile" src="img/profiles/l-1.jpg"
                                        class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                </a>
                                <div class=" d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="list-item-heading mb-1 truncate">Sarah Kortney</p>
                                            </a>
                                            <p class="mb-2 text-muted text-small">Executive Director</p>
                                            <button type="button" class="btn btn-xs btn-outline-primary ">Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card d-flex flex-row">
                                <a class="d-flex" href="#">
                                    <div class="rounded-circle m-4 align-self-center list-thumbnail-letters">
                                        SK
                                    </div>
                                </a>
                                <div class=" d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="list-item-heading mb-1 truncate">Sarah Kortney</p>
                                            </a>
                                            <p class="mb-2 text-muted text-small">Executive Director</p>
                                            <button type="button" class="btn btn-xs btn-outline-primary ">Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-lg-4 col-12 mb-4">
                            <div class="card d-flex flex-row mb-4">
                                <a class="d-flex" href="#">
                                    <img alt="Profile" src="img/profiles/l-1.jpg"
                                        class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center small">
                                </a>
                                <div class=" d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="list-item-heading mb-1 truncate">Sarah Kortney</p>
                                            </a>
                                            <p class="mb-2 text-muted text-small">Executive Director</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card d-flex flex-row">
                                <a class="d-flex" href="#">
                                    <div class="rounded-circle m-4 align-self-center list-thumbnail-letters small">
                                        SK
                                    </div>
                                </a>
                                <div class=" d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="list-item-heading mb-1 truncate">Sarah Kortney</p>
                                            </a>
                                            <p class="mb-2 text-muted text-small">Executive Director</p>
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