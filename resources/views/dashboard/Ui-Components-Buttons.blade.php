@extends('dashboard.layouts.app')
@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Buttons</h1>
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
                            <h5 class="mb-4">Colors</h5>
                            <button type="button" class="btn btn-primary mb-1">Primary</button>
                            <button type="button" class="btn btn-secondary mb-1">Secondary</button>
                            <button type="button" class="btn btn-success mb-1">Success</button>
                            <button type="button" class="btn btn-danger mb-1">Danger</button>
                            <button type="button" class="btn btn-warning mb-1">Warning</button>
                            <button type="button" class="btn btn-info mb-1">Info</button>
                            <button type="button" class="btn btn-light mb-1">Light</button>
                            <button type="button" class="btn btn-dark mb-1">Dark</button>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Rounded</h5>
                            <button type="button" class="btn btn-primary mb-1">Primary</button>
                            <button type="button" class="btn btn-secondary mb-1">Secondary</button>
                        </div>
                    </div>



                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Outline</h5>
                            <button type="button" class="btn btn-outline-primary mb-1">Primary</button>
                            <button type="button" class="btn btn-outline-secondary mb-1">Secondary</button>
                            <button type="button" class="btn btn-outline-success mb-1">Success</button>
                            <button type="button" class="btn btn-outline-danger mb-1">Danger</button>
                            <button type="button" class="btn btn-outline-warning mb-1">Warning</button>
                            <button type="button" class="btn btn-outline-info mb-1">Info</button>
                            <button type="button" class="btn btn-outline-light mb-1">Light</button>
                            <button type="button" class="btn btn-outline-dark mb-1">Dark</button>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">States</h5>
                            <div class="mb-3">
                                <p class="mb-1">This button shows a spinner for 2 seconds and a check icon for 3
                                    seconds before switching
                                    to normal state. This states can be triggered by adding and removing classes.</p>
                                <a href="#" class="btn btn-primary btn-multiple-state" id="successButton">
                                    <div class="spinner d-inline-block">
                                        <div class="bounce1"></div>
                                        <div class="bounce2"></div>
                                        <div class="bounce3"></div>
                                    </div>
                                    <span class="icon success" data-toggle="tooltip" data-placement="top"
                                        title="Everything went right!">
                                        <i class="simple-icon-check"></i>
                                    </span>
                                    <span class="icon fail" data-toggle="tooltip" data-placement="top"
                                        title="Something went wrong!">
                                        <i class="simple-icon-exclamation"></i>
                                    </span>
                                    <span class="label">Click Here</span>
                                </a>
                            </div>

                            <div>
                                <p class="mb-1">This button shows a spinner for 2 seconds and an error icon for 3
                                    seconds before switching
                                    to normal state. This states can be triggered by adding and removing classes.</p>
                                <a href="#" class="btn btn-primary btn-multiple-state" id="failButton">
                                    <div class="spinner d-inline-block">
                                        <div class="bounce1"></div>
                                        <div class="bounce2"></div>
                                        <div class="bounce3"></div>
                                    </div>
                                    <span class="icon success" data-toggle="tooltip" data-placement="top"
                                        title="Everything went right!">
                                        <i class="simple-icon-check"></i>
                                    </span>
                                    <span class="icon fail" data-toggle="tooltip" data-placement="top"
                                        title="Something went wrong!">
                                        <i class="simple-icon-exclamation"></i>
                                    </span>
                                    <span class="label">Click Here</span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Sizes</h5>

                            <div class="mb-4">
                                <h6 class="mb-2">Large Button</h6>
                                <button type="button" class="btn btn-primary btn-lg mb-1">LARGE BUTTON</button>
                                <button type="button" class="btn btn-secondary btn-lg mb-1">LARGE BUTTON</button>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-2">Small Button</h6>
                                <button type="button" class="btn btn-primary btn-sm mb-1">Small Button</button>
                                <button type="button" class="btn btn-secondary btn-sm mb-1">Small Button</button>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-2">Extra Small Button</h6>
                                <button type="button" class="btn btn-primary btn-xs mb-1">Xs Button</button>
                                <button type="button" class="btn btn-secondary btn-xs mb-1">Xs Button</button>
                            </div>
                            <div>
                                <h6 class="mb-2">Block Button</h6>
                                <button type="button" class="btn btn-primary btn-block mb-1">Block level button</button>
                                <button type="button" class="btn btn-secondary btn-block mb-1">Block level
                                    button</button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">States</h5>

                            <div class="mb-4">
                                <h6 class="mb-1">Active</h6>
                                <a href="#" class="btn btn-primary rounded active mb-1" role="button"
                                    aria-pressed="true">Primary
                                    link</a>
                                <a href="#" class="btn btn-secondary rounded active mb-1" role="button"
                                    aria-pressed="true">Link</a>

                            </div>

                            <div>
                                <h6 class="mb-1">Disabled</h6>
                                <button type="button" class="btn btn-primary mb-1" disabled>Primary button</button>
                                <button type="button" class="btn btn-secondary mb-1" disabled>Button</button>

                            </div>

                        </div>
                    </div>



                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Button Groups</h5>

                            <div class="mb-4">
                                <h6 class="mb-1">Basic</h6>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn  btn-primary">Left</button>
                                    <button type="button" class="btn  btn-primary">Middle</button>
                                    <button type="button" class="btn  btn-primary">Right</button>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h6 class="mb-1">Toolbar</h6>

                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group mr-2 mb-1" role="group" aria-label="First group">
                                        <button type="button" class="btn  btn-primary">1</button>
                                        <button type="button" class="btn  btn-primary">2</button>
                                        <button type="button" class="btn btn-primary">3</button>
                                        <button type="button" class="btn  btn-primary">4</button>
                                    </div>
                                    <div class="btn-group mr-2 mb-1" role="group" aria-label="Second group">
                                        <button type="button" class="btn  btn-primary">5</button>
                                        <button type="button" class="btn btn-primary">6</button>
                                        <button type="button" class="btn  btn-primary">7</button>
                                    </div>
                                    <div class="btn-group  mb-1" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-primary">8</button>
                                    </div>
                                </div>
                            </div>


                            <div>
                                <h6 class="mb-1">Sizes</h6>

                                <div class="btn-group btn-group-lg  mr-2  mb-1" role="group">
                                    <button type="button" class="btn  btn-primary">1</button>
                                    <button type="button" class="btn  btn-primary">2</button>
                                </div>
                                <div class="btn-group  mr-2  mb-1" role="group">
                                    <button type="button" class="btn  btn-primary">1</button>
                                    <button type="button" class="btn  btn-primary">2</button>
                                    <button type="button" class="btn btn-primary">3</button>
                                </div>
                                <div class="btn-group btn-group-sm  mr-2  mb-1" role="group">
                                    <button type="button" class="btn  btn-primary">1</button>
                                    <button type="button" class="btn  btn-primary">2</button>
                                    <button type="button" class="btn btn-primary">3</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Nesting</h5>

                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" class="btn btn-secondary">1</button>
                                <button type="button" class="btn btn-secondary">2</button>

                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Vertical variation</h5>
                            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                <button type="button" class="btn btn-secondary default">Button</button>
                                <button type="button" class="btn btn-secondary">Button</button>
                                <button type="button" class="btn btn-secondary">Button</button>
                                <button type="button" class="btn btn-secondary">Button</button>
                                <button type="button" class="btn btn-secondary">Button</button>
                                <button type="button" class="btn btn-secondary default">Button</button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Checkbox and Radio Button</h5>

                            <div class="mb-4">
                                <h6 class="mb-1">Checkbox</h6>
                                <div class="btn-group-toggle mb-1" data-toggle="buttons">
                                    <label class="btn btn-primary active">
                                        <input type="checkbox" checked> Checked
                                    </label>
                                </div>
                                <div class="btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-primary active">
                                        <input type="checkbox" checked> Checked
                                    </label>
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-1">Radio Button</h6>
                                <div>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="options" id="option1" checked> Active
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" id="option2"> Radio
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" id="option3"> Radio
                                        </label>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Bootstrap Default</h5>
                            <button type="button" class="btn btn-primary default mb-1">Primary</button>
                            <button type="button" class="btn btn-secondary default mb-1">Secondary</button>
                            <button type="button" class="btn btn-success default mb-1">Success</button>
                            <button type="button" class="btn btn-danger default mb-1">Danger</button>
                            <button type="button" class="btn btn-warning default mb-1">Warning</button>
                            <button type="button" class="btn btn-info default mb-1">Info</button>
                            <button type="button" class="btn btn-light default mb-1">Light</button>
                            <button type="button" class="btn btn-dark default mb-1">Dark</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection