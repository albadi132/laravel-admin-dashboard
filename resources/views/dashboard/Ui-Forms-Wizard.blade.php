@extends('dashboard.layouts.app')
@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Form Wizard</h1>
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

                <div class="col-12 mb-4">
                    <h5 class="mb-4">Validation</h5>
                    <div class="card mb-4">
                        <div id="smartWizardValidation">
                            <ul class="card-header">
                                <li><a href="#step-0">Step 1<br /><small>First step description</small></a></li>
                                <li><a href="#step-1">Step 2<br /><small>Second step description</small></a></li>
                                <li><a href="#step-2">Step 3<br /><small>Third step description</small></a></li>
                            </ul>

                            <div class="card-body">
                                <div id="step-0">
                                    <form id="form-step-0" class="tooltip-label-right" novalidate>
                                        <div class="form-group position-relative error-l-100">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" name="emailValidation"
                                                id="emailValidation" placeholder="Your email address" required>
                                        </div>
                                        <div class="form-group position-relative error-l-100">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="passwordValidation"
                                                id="passwordValidation" placeholder="Your password" required>
                                        </div>
                                    </form>
                                </div>
                                <div id="step-1">
                                    <form id="form-step-1" class="tooltip-label-right" novalidate>
                                        <div class="form-group position-relative error-l-75">
                                            <label for="name">First Name</label>
                                            <input type="text" class="form-control" name="nameValidation"
                                                id="nameValidation" placeholder="Your first name" required>
                                        </div>
                                        <div class="form-group position-relative error-l-75">
                                            <label for="lastName">Last Name</label>
                                            <input type="text" class="form-control" name="lastNameValidation"
                                                id="lastNameValidation" placeholder="Your last name" required>
                                        </div>
                                    </form>
                                </div>
                                <div id="step-2">
                                    <h4 class="text-center">Thank you for your feedback!</h4>
                                    <p class="muted text-center p-4">
                                        Podcasting operational change management inside of workflows to establish a
                                        framework. Taking seamless key performance indicators offline to maximise the
                                        long tail. Keeping your eye on the ball while performing a deep dive on the
                                        start-up mentality.
                                    </p>
                                </div>
                            </div>

                            <div class="btn-toolbar custom-toolbar text-center card-body pt-0">
                                <button class="btn btn-secondary prev-btn" type="button">Previous</button>
                                <button class="btn btn-secondary next-btn" type="button">Next</button>
                                <button class="btn btn-secondary finish-btn" type="submit">Finish</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <h5 class="mb-4">Custom Buttons</h5>
                    <div class="card mb-4">
                        <div id="smartWizardCustomButtons">
                            <ul class="card-header">
                                <li><a href="#customButtons1">Step 1<br /><small>First step description</small></a></li>
                                <li><a href="#customButtons2">Step 2<br /><small>Second step description</small></a>
                                </li>
                                <li><a href="#customButtons3">Step 3<br /><small>Third step description</small></a></li>
                            </ul>

                            <div class="card-body">
                                <div id="customButtons1">
                                    <h4 class="pb-2">Step 1 Content</h4>
                                    <form>
                                        <label class="form-group has-top-label">
                                            <input class="form-control" />
                                            <span>FIRST NAME</span>
                                        </label>

                                        <label class="form-group has-top-label">
                                            <input class="form-control" type="password" placeholder="" />
                                            <span>LAST NAME</span>
                                        </label>
                                    </form>
                                </div>
                                <div id="customButtons2">
                                    <h4 class="pb-2">Step 2 Content</h4>
                                    <form>
                                        <label class="form-group has-top-label">
                                            <input class="form-control" />
                                            <span>E-MAIL</span>
                                        </label>

                                        <label class="form-group has-top-label">
                                            <input class="form-control" id="password" type="password" placeholder="" />
                                            <span>PASSWORD</span>
                                        </label>
                                    </form>
                                </div>
                                <div id="customButtons3">
                                    <h4 class="pb-2">Step 3 Content</h4>
                                    <form>
                                        <label class="form-group has-top-label">
                                            <textarea class="form-control" rows="3"></textarea>
                                            <span>DETAILS</span>
                                        </label>
                                    </form>
                                </div>
                            </div>

                            <div class="btn-toolbar custom-toolbar text-center card-body pt-0">
                                <button class="btn btn-secondary prev-btn" type="button">Previous</button>
                                <button class="btn btn-secondary next-btn" type="button">Next</button>
                                <button class="btn btn-secondary reset-btn" type="submit">Reset</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <h5 class="mb-4">Clickable Anchors</h5>
                    <div class="card mb-4">
                        <div id="smartWizardClickable">
                            <ul class="card-header">
                                <li><a href="#clickable1">Step 1<br /><small>First step description</small></a></li>
                                <li><a href="#clickable2">Step 2<br /><small>Second step description</small></a></li>
                                <li><a href="#clickable3">Step 3<br /><small>Third step description</small></a></li>
                            </ul>

                            <div class="card-body">
                                <div id="clickable1">
                                    <h4 class="pb-2">Step 1 Content</h4>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                    recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.
                                </div>
                                <div id="clickable2">
                                    <h4 class="pb-2">Step 2 Content</h4>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting, remaining essentially unchanged. It
                                        was popularised in the 1960s with the release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum. </div>
                                </div>
                                <div id="clickable3">
                                    <h4 class="pb-2">Step 3 Content</h4>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting, remaining essentially unchanged. It
                                        was popularised in the 1960s with the release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <h5 class="mb-4">Default Theme</h5>
                    <div class="card mb-4">
                        <div id="smartWizardDefault">
                            <ul class="card-header">
                                <li><a href="#defaultStep1">Step 1<br /><small>First step description</small></a></li>
                                <li><a href="#defaultStep2">Step 2<br /><small>Second step description</small></a></li>
                                <li><a href="#defaultStep3">Step 3<br /><small>Third step description</small></a></li>
                            </ul>

                            <div class="card-body">
                                <div id="defaultStep1">
                                    <h4 class="pb-2">Step 1 Content</h4>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                    recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.
                                </div>
                                <div id="defaultStep2">
                                    <h4 class="pb-2">Step 2 Content</h4>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting, remaining essentially unchanged. It
                                        was popularised in the 1960s with the release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum. </div>
                                </div>
                                <div id="defaultStep3">
                                    <h4 class="pb-2">Step 3 Content</h4>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting, remaining essentially unchanged. It
                                        was popularised in the 1960s with the release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum. </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <h5 class="mb-4">Dot Theme</h5>
                    <div class="card mb-4">
                        <div id="smartWizardDot">
                            <ul class="card-header">
                                <li><a href="#dotStep1">Step 1<br /><small>First step description</small></a></li>
                                <li><a href="#dotStep2">Step 2<br /><small>Second step description</small></a></li>
                                <li><a href="#dotStep3">Step 3<br /><small>Third step description</small></a></li>
                            </ul>

                            <div class="card-body">
                                <div id="dotStep1">
                                    <h4 class="pb-2">Step 1 Content</h4>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                    recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.
                                </div>
                                <div id="dotStep2">
                                    <h4 class="pb-2">Step 2 Content</h4>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting, remaining essentially unchanged. It
                                        was popularised in the 1960s with the release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum. </div>
                                </div>
                                <div id="dotStep3">
                                    <h4 class="pb-2">Step 3 Content</h4>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting, remaining essentially unchanged. It
                                        was popularised in the 1960s with the release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <h5 class="mb-4">Check Theme</h5>
                    <div class="card mb-4">
                        <div id="smartWizardCheck">
                            <ul class="card-header">
                                <li><a href="#checkStep1">Step 1<br /><small>First step description</small></a></li>
                                <li><a href="#checkStep2">Step 2<br /><small>Second step description</small></a></li>
                                <li><a href="#checkStep3">Step 3<br /><small>Third step description</small></a></li>
                            </ul>

                            <div class="card-body">
                                <div id="checkStep1">
                                    <h4 class="pb-2">Step 1 Content</h4>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                    recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.
                                </div>
                                <div id="checkStep2">
                                    <h4 class="pb-2">Step 2 Content</h4>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting, remaining essentially unchanged. It
                                        was popularised in the 1960s with the release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum. </div>
                                </div>
                                <div id="checkStep3">
                                    <h4 class="pb-2">Step 3 Content</h4>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting, remaining essentially unchanged. It
                                        was popularised in the 1960s with the release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection