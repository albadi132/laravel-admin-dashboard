@extends('dashboard.layouts.app')
@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Form Validation</h1>
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
                <div class="col-12 col-lg-6 mb-5">
                    <h5 class="mb-5">Bootstrap Validation</h5>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Basic</h5>
                            <form class="needs-validation tooltip-label-right" novalidate>
                                <div class="form-group position-relative error-l-50">
                                    <label>Name</label>
                                    <input type="text" class="form-control" required>
                                    <div class="invalid-tooltip">
                                        Name is required!
                                    </div>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>Age</label>
                                    <input type="number" class="form-control" required>
                                    <div class="invalid-tooltip">
                                        Age is required!
                                    </div>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>Details</label>
                                    <textarea class="form-control" rows="2" required></textarea>
                                    <div class="invalid-tooltip">
                                        Details are required!
                                    </div>
                                </div>
                                <div class="form-group position-relative">
                                    <label>Radio</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                            class="custom-control-input" required>
                                        <label class="custom-control-label" for="customRadio1">Toggle this custom
                                            radio</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio"
                                            class="custom-control-input" required>
                                        <label class="custom-control-label" for="customRadio2">Or toggle this other
                                            custom radio</label>
                                    </div>
                                    <div class="invalid-tooltip">
                                        Radio is required!
                                    </div>
                                </div>
                                <div class="form-group position-relative">
                                    <label>Check</label>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1"
                                            name="jQueryCheckbox" required>
                                        <label class="custom-control-label" for="customCheck1">Check first</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2"
                                            name="jQueryCheckbox" required>
                                        <label class="custom-control-label" for="customCheck2">Check second</label>
                                    </div>
                                    <div class="invalid-tooltip">
                                        Checkboxes are required!
                                    </div>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>State</label>
                                    <select class="custom-select" required>
                                        <option value=""></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        State is required!
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 error-l-200">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation1"
                                        required>
                                    <label class="custom-control-label" for="customControlValidation1">Check this custom
                                        checkbox</label>
                                    <div class="invalid-tooltip">Check this!</div>
                                </div>
                                <button type="submit" class="btn btn-primary mb-0">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <h5 class="mb-5">jQuery Validation</h5>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Basic</h5>
                            <form id="exampleForm" class="tooltip-label-right" novalidate>
                                <div class="form-group position-relative error-l-50">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="jQueryName" required>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>Age</label>
                                    <input type="number" class="form-control" required name="jQueryAge">
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>Details</label>
                                    <textarea class="form-control" rows="2" name="jQueryDetail" required></textarea>
                                </div>
                                <div class="form-group position-relative">
                                    <label>Radio</label>
                                    <div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="jQueryCustomRadio1" name="jQueryCustomRadio"
                                                class="custom-control-input" required>
                                            <label class="custom-control-label" for="jQueryCustomRadio1">Toggle this
                                                custom
                                                radio</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="jQueryCustomRadio2" name="jQueryCustomRadio"
                                                class="custom-control-input" required>
                                            <label class="custom-control-label" for="jQueryCustomRadio2">Or toggle this
                                                other
                                                custom
                                                radio</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative">
                                    <label>Check</label>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="jQueryCustomCheck1"
                                            name="jQueryCheckbox" required>
                                        <label class="custom-control-label" for="jQueryCustomCheck1">Check first</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="jQueryCustomCheck2"
                                            name="jQueryCheckbox" required>
                                        <label class="custom-control-label" for="jQueryCustomCheck2">Check
                                            second</label>
                                    </div>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>State</label>
                                    <select class="custom-select" required>
                                        <option value=""></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group position-relative error-l-200">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="jQueryControlValidation"
                                            name="jQueryControlValidation" required>
                                        <label class="custom-control-label" for="jQueryControlValidation">Check this
                                            custom
                                            checkbox</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mb-0">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Top Labels Over Line</h5>

                            <form id="exampleFormTopLabels" class="tooltip-right-bottom">
                                <div class="form-group has-float-label">
                                    <input class="form-control" name="jQueryTopLabelsEmail" required />
                                    <span>E-mail</span>
                                </div>
                                <div class="form-group has-float-label">
                                    <input class="form-control" type="password" name="jQueryTopLabelsPassword"
                                        required />
                                    <span>Password</span>
                                </div>
                                <div class="form-group has-float-label">
                                    <input data-role="tagsinput" class="tags-input" type="text" required
                                        name="jQueryTopLabelsTags">
                                    <span>Tags</span>
                                </div>
                                <div class="form-group has-float-label">
                                    <input class="form-control datepicker" required name="jQueryTopLabelsDate">
                                    <span>Date</span>
                                </div>
                                <div class="form-group has-float-label">
                                    <select class="form-control select2-single" name="jQueryTopLabelsState" required data-width="100%">
                                        <option></option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                    </select>
                                    <span>State</span>
                                </div>
                                <button class="btn btn-primary" type="submit">Sign up</button>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Top Labels In Input</h5>

                            <form id="exampleFormLabelsInInput" class="tooltip-right-bottom">
                                <div class="form-group has-top-label">
                                    <input class="form-control" name="jQueryLabelsInInputEmail" required />
                                    <span>E-MAIL</span>
                                </div>

                                <div class="form-group has-top-label">
                                    <input class="form-control" id="password" type="password"
                                        name="jQueryLabelsInInputPassword" required />
                                    <span>PASSWORD</span>
                                </div>

                                <div class="form-group has-top-label">
                                    <input data-role="tagsinput" class="tags-input" type="text"
                                        name="jQueryLabelsInInputTags" required>
                                    <span>TAGS</span>
                                </div>

                                <div class="form-group has-top-label">
                                    <input class="form-control datepicker" name="jQueryLabelsInInputDate" required>
                                    <span>DATE</span>
                                </div>

                                <div class="form-group has-top-label">
                                    <select class="form-control select2-single" data-width="100%" name="jQueryLabelsInInputState"
                                        required>
                                        <option></option>

                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                    </select>
                                    <span>STATE</span>
                                </div>

                                <button class="btn btn-primary" type="submit">Sign up</button>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Common Rules</h5>
                            <form id="rulesForm" class="tooltip-label-right" novalidate>
                                <div class="form-group position-relative error-l-50">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="rulesName">
                                    <small class="form-text text-muted">Must be letters only!</small>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>Id</label>
                                    <input type="text" class="form-control" name="rulesId">
                                    <small class="form-text text-muted">Must be digits and 8 chars only!</small>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>Age</label>
                                    <input type="text" class="form-control" name="rulesAge">
                                    <small class="form-text text-muted">Must be 18 and over!</small>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="rulesEmail">
                                    <small class="form-text text-muted">Must be a valid email!</small>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>Details</label>
                                    <textarea class="form-control" rows="2" name="rulesDetail"></textarea>
                                    <small class="form-text text-muted">Must be 20 chars or less!</small>
                                </div>
                                <div class="form-group position-relative error-l-75">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="rulesPassword" id="rulesPassword">
                                    <small class="form-text text-muted">Must be at least 6 chars!</small>
                                </div>
                                <div class="form-group position-relative error-l-125">
                                    <label>Confirm Password</label>
                                    <input type="text" class="form-control" name="rulesPasswordConfirm"
                                        id="rulesPasswordConfirm">
                                    <small class="form-text text-muted">Must be same with password!</small>
                                </div>
                                <div class="form-group position-relative error-l-75">
                                    <label>Credit Card</label>
                                    <input type="text" class="form-control" name="rulesCreditCard" id="rulesCreditCard">
                                    <small class="form-text text-muted">Must be a valid credit card number without
                                        whitespace!</small>
                                </div>
                                <button type="submit" class="btn btn-primary mb-0">Submit</button>
                            </form>
                        </div>
                    </div>


                </div>

                <div class="col-12">

                    <h5 class="mb-4">Tooltip Positioning</h5>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="mb-4">Locations</h6>

                            <form id="tooltipPositions" novalidate class="mb-5">
                                <div class="tooltip-label-right">
                                    <div class="error-l-100 position-relative form-group">
                                        <label>Label Right</label>
                                        <input name="input1" required="" id="input1" type="text" class="form-control">
                                        <div class="invalid-tooltip">Label Right!</div>
                                    </div>
                                </div>
                                <div class="tooltip-center-top position-relative form-group">
                                    <label>Top Center</label>
                                    <input name="input2" required="" id="input2" type="text" class="form-control">
                                    <div class="invalid-tooltip">Top Center!</div>
                                </div>
                                <div class="tooltip-center-bottom position-relative form-group">
                                    <label>Bottom Center</label>
                                    <input name="input3" required="" id="input3" type="text" class="form-control">
                                    <div class="invalid-tooltip">Bottom Center!</div>
                                </div>
                                <div class="tooltip-left-top position-relative form-group">
                                    <label>Top Left</label>
                                    <input name="input4" required="" id="input4" type="text" class="form-control">
                                    <div class="invalid-tooltip">Top Left!</div>
                                </div>
                                <div class="tooltip-right-top position-relative form-group">
                                    <label>Top Right</label>
                                    <input name="input5" required="" id="input5" type="text" class="form-control">
                                    <div class="invalid-tooltip">Top Right!</div>
                                </div>
                                <div class="tooltip-left-bottom position-relative form-group">
                                    <label>Bottom Left</label>
                                    <input name="input6" required="" id="input6" type="text" class="form-control">
                                    <div class="invalid-tooltip">Bottom Left!</div>
                                </div>
                                <div class="tooltip-right-bottom position-relative form-group">
                                    <label>Bottom Right</label>
                                    <input name="input7" required="" id="input7" type="text" class="form-control">
                                    <div class="invalid-tooltip">Bottom Right!</div>
                                </div>
                                <button class="btn btn-primary">Submit</button>
                            </form>


                            <h6 class="mb-4">Label Right Position Helpers</h6>

                            <form id="tooltipHelpers" novalidate class="tooltip-label-right">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="error-l-0 position-relative form-group">
                                            <label>error-l-0</label>
                                            <input name="input8" required="" id="input8" type="text"
                                                class="form-control">
                                            <div class="invalid-tooltip">error-l-0</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="error-l-25 position-relative form-group">
                                            <label>error-l-25</label>
                                            <input name="input9" required="" id="input9" type="text"
                                                class="form-control">
                                            <div class="invalid-tooltip">error-l-25</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="error-l-50 position-relative form-group">
                                            <label>error-l-50</label>
                                            <input name="input10" required="" id="input10" type="text"
                                                class="form-control">
                                            <div class="invalid-tooltip">error-l-50</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="error-l-75 position-relative form-group">
                                            <label>error-l-75</label>
                                            <input name="input11" required="" id="input11" type="text"
                                                class="form-control">
                                            <div class="invalid-tooltip">error-l-75</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="error-l-100 position-relative form-group">
                                            <label>error-l-100</label>
                                            <input name="input12" required="" id="input12" type="text"
                                                class="form-control">
                                            <div class="invalid-tooltip">error-l-100</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="error-l-125 position-relative form-group">
                                            <label>error-l-125</label>
                                            <input name="input13" required="" id="input13" type="text"
                                                class="form-control">
                                            <div class="invalid-tooltip">error-l-125</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="error-l-150 position-relative form-group">
                                            <label>error-l-150</label>
                                            <input name="input14" required="" id="input14" type="text"
                                                class="form-control">
                                            <div class="invalid-tooltip">error-l-150</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="error-l-175 position-relative form-group">
                                            <label>error-l-175</label>
                                            <input name="input15" required="" id="input15" type="text"
                                                class="form-control">
                                            <div class="invalid-tooltip">error-l-175</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="error-l-200 position-relative form-group">
                                            <label>error-l-200</label>
                                            <input name="input16" required="" id="input16" type="text"
                                                class="form-control">
                                            <div class="invalid-tooltip">error-l-200</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="error-l-225 position-relative form-group">
                                            <label>error-l-225</label>
                                            <input name="input17" required="" id="input17" type="text"
                                                class="form-control">
                                            <div class="invalid-tooltip">error-l-225</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="error-l-250 position-relative form-group">
                                            <label>error-l-250</label>
                                            <input name="input18" required="" id="input18" type="text"
                                                class="form-control">
                                            <div class="invalid-tooltip">error-l-250</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="error-l-275 position-relative form-group">
                                            <label>error-l-275</label>
                                            <input name="input19" required="" id="input19" type="text"
                                                class="form-control">
                                            <div class="invalid-tooltip">error-l-275</div>
                                        </div>
                                    </div>
                                </div><button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection