@extends('dashboard.layouts.app')
@section('content')

        <div class="container-fluid ">
            <div class="row">
                <div class="col-12">

                    <h1>Form Components</h1>
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
                            <h5 class="mb-4">Custom Inputs</h5>


                            <h6>Checkbox</h6>
                            <div class="mb-4">
                                <div class="custom-control custom-checkbox mb-4">
                                    <input type="checkbox" class="custom-control-input" id="customCheckThis">
                                    <label class="custom-control-label" for="customCheckThis">Check this custom
                                        checkbox</label>
                                </div>
                            </div>

                            <h6>Radios</h6>
                            <div class="mb-4">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Toggle this custom
                                        radio</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Or toggle this other custom
                                        radio</label>
                                </div>
                            </div>

                            <h6>Disabled</h6>
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckDisabled"
                                        disabled>
                                    <label class="custom-control-label" for="customCheckDisabled">Check this custom
                                        checkbox</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="radio3" name="radioDisabled" class="custom-control-input"
                                        disabled>
                                    <label class="custom-control-label">Toggle this custom radio</label>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Select 2</h5>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>State Single</label>
                                    <select class="form-control select2-single" data-width="100%">
                                        <option label="&nbsp;">&nbsp;</option>

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
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                        <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                        <option value="TPZ">The Panic Zone</option>
                                        <option value="TTZ">The Twilight Zone</option>
                                    </select>
                                </div>

                                <div class="col-sm-6">

                                    <label>State Multiple</label>
                                    <select class="form-control select2-multiple" multiple="multiple" data-width="100%">
                                        <option label="&nbsp;">&nbsp;</option>

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
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                        <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                        <option value="TPZ">The Panic Zone</option>
                                        <option value="TTZ">The Twilight Zone</option>

                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Typeahead</h5>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group typeahead-container">
                                        <input type="text" class="form-control typeahead" name="query" id="query"
                                            placeholder="Start typing something to search..." data-provide="typeahead"
                                            autocomplete="off">
                                        <div class="input-group-append ">
                                            <button type="submit" class="btn btn-primary default">
                                                <i class="simple-icon-magnifier"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="mb-4">Date Picker</h5>
                                    <div class="form-group mb-3">
                                        <label>Date</label>
                                        <input class="form-control datepicker" placeholder="Date">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Date Range</label>
                                        <div class="input-daterange input-group" id="datepicker">
                                            <input type="text" class="input-sm form-control" name="start"
                                                placeholder="Start" />
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="input-sm form-control" name="end"
                                                placeholder="End" />
                                        </div>
                                    </div>
                                    <div class="form-group mb-1">
                                        <label>Date Component</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-text input-group-append input-group-addon">
                                                <i class="simple-icon-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="mb-4">Date Picker Embeded</h5>
                                    <div class="form-group">
                                        <div class="date-inline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Image Picker</h5>

                            <p class="mb-5">
                                This component is intended to be used as a bridge between library and forms to select
                                images.
                            </p>
                            <h6>Multiple Select</h6>

                            <div class="select-from-library-container mb-1">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-xl-4">
                                        <div class="select-from-library-button sfl-multiple mb-5"
                                            data-library-id="#libraryModal" data-count="-1">
                                            <div
                                                class="card d-flex flex-row mb-4 media-thumb-container justify-content-center align-items-center">
                                                Select from library
                                            </div>
                                        </div>


                                        <div class="selected-library-item sfl-selected-item mb-5">
                                            <div class="card d-flex flex-row media-thumb-container">
                                                <a class="d-flex align-self-center">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                        alt="uploaded image"
                                                        class="list-media-thumbnail responsive border-0 sfl-selected-item-image" />
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div
                                                        class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                                        <a class="w-100">
                                                            <p
                                                                class="list-item-heading mb-1 truncate sfl-selected-item-label">
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="pl-1 align-self-center">
                                                        <a href="#"
                                                            class="btn-link delete-library-item sfl-delete-item"><i
                                                                class="simple-icon-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <h6>Single Select</h6>

                            <div class="select-from-library-container mb-1">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-xl-4">
                                        <div class="select-from-library-button sfl-single mb-5"
                                            data-library-id="#libraryModal" data-count="1">
                                            <div
                                                class="card d-flex flex-row mb-4 media-thumb-container justify-content-center align-items-center">
                                                Select an item from library
                                            </div>
                                        </div>


                                        <div class="selected-library-item sfl-selected-item mb-5">
                                            <div class="card d-flex flex-row media-thumb-container">
                                                <a class="d-flex align-self-center">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                        alt="uploaded image"
                                                        class="list-media-thumbnail responsive border-0 sfl-selected-item-image" />
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div
                                                        class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                                        <a class="w-100">
                                                            <p
                                                                class="list-item-heading mb-1 truncate sfl-selected-item-label">
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="pl-1 align-self-center">
                                                        <a href="#"
                                                            class="btn-link delete-library-item sfl-delete-item"><i
                                                                class="simple-icon-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Dropzone</h5>
                            <form action="/file-upload">
                                <div class="dropzone">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Cropper</h5>
                            <label class="btn btn-outline-primary btn-upload" for="inputImage"
                                title="Upload image file">
                                <input type="file" class="sr-only" id="inputImage" name="file"
                                    accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                Select File
                            </label>
                            <div class="row">
                                <div class="col-4">
                                    <div id="cropperContainer">
                                        <img id="cropperImage" alt="Cropper Image"
                                            src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="cropper-preview"></div>
                                </div>
                                <div class="col-2">
                                    <div class="cropper-preview"></div>
                                </div>
                                <div class="col-1">
                                    <div class="cropper-preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Tags</h5>
                            <input data-role="tagsinput" type="text">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Switch</h5>
                            <div class="row">
                                <div class="col-12 col-xs-6">
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Primary</label>
                                        <div class="col-12">
                                            <div class="custom-switch custom-switch-primary mb-2">
                                                <input class="custom-switch-input" id="switch" type="checkbox">
                                                <label class="custom-switch-btn" for="switch"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Secondary</label>
                                        <div class="col-12">
                                            <div class="custom-switch custom-switch-secondary mb-2">
                                                <input class="custom-switch-input" id="switch2" type="checkbox" checked>
                                                <label class="custom-switch-btn" for="switch2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6">
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Primary Inverse</label>
                                        <div class="col-12">
                                            <div class="custom-switch custom-switch-primary-inverse mb-2">
                                                <input class="custom-switch-input" id="switch3" type="checkbox" checked>
                                                <label class="custom-switch-btn" for="switch3"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Secondary Inverse</label>
                                        <div class="col-12">
                                            <div class="custom-switch custom-switch-secondary-inverse mb-2">
                                                <input class="custom-switch-input" id="switch4" type="checkbox">
                                                <label class="custom-switch-btn" for="switch4"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-xs-6">
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Primary Small</label>
                                        <div class="col-12">
                                            <div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchS" type="checkbox">
                                                <label class="custom-switch-btn" for="switchS"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Secondary Small</label>
                                        <div class="col-12">
                                            <div class="custom-switch custom-switch-secondary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchS2" type="checkbox"
                                                    checked>
                                                <label class="custom-switch-btn" for="switchS2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6">
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Primary Inverse Small</label>
                                        <div class="col-12">
                                            <div
                                                class="custom-switch custom-switch-primary-inverse mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchS3" type="checkbox"
                                                    checked>
                                                <label class="custom-switch-btn" for="switchS3"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Secondary Inverse Small</label>
                                        <div class="col-12">
                                            <div
                                                class="custom-switch custom-switch-secondary-inverse mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchS4" type="checkbox">
                                                <label class="custom-switch-btn" for="switchS4"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Slider</h5>
                            <div class="row">
                                <div class="col-12 col-xs-6 mb-3">
                                    <div class="form-group mb-4">
                                        <label>Double Slider</label>
                                        <div>
                                            <div class="slider" id="doubleSlider"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6 mb-3">
                                    <div class="form-group mb-4">
                                        <label>Single Slider</label>
                                        <div>
                                            <div class="slider" id="singleSlider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Rating</h5>
                            <div class="row">
                                <div class="col-12 col-xs-6">
                                    <div class="form-group mb-1">
                                        <label class="d-block">Readonly</label>
                                        <select class="rating" data-current-rating="5" data-readonly="true">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6">
                                    <div class="form-group mb-1">
                                        <label class="d-block">Empty</label>
                                        <select class="rating" data-current-rating="-1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Select from Library Modal -->
        <div class="modal fade modal-right select-from-library" id="libraryModal" tabindex="-1" role="dialog"
            aria-labelledby="libraryModal" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Select from Library</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body scroll pt-0 pb-0 mt-4 mb-4">
                        <div class="accordion" id="accordion">
                            <div class="mb-2">
                                <button class="btn btn-link p-0 folder-button-collapse" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="icon-container">
                                        <i class="simple-icon-arrow-down"></i>
                                    </span>
                                    <span class="folder-name">Cakes</span>
                                </button>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="list disable-text-selection">
                                        <div class="row">

                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/chocolate-cake-thumb.jpg"
                                                data-path="img/products/chocolate-cake-thumb.jpg"
                                                data-label="chocolate-cake-thumb.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/chocolate-cake-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">chocolate-cake-thumb.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/marble-cake-thumb.jpg"
                                                data-path="img/products/marble-cake-thumb.jpg" data-label="marble-cake.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/marble-cake-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">marble-cake.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/fruitcake-thumb.jpg"
                                                data-path="img/products/fruitcake-thumb.jpg" data-label="fruitcake.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/fruitcake-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">fruitcake.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/fat-rascal-thumb.jpg"
                                                data-path="img/products/fat-rascal-thumb.jpg" data-label="fat-rascal.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/fat-rascal-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">fat-rascal.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/chocolate-cake-thumb.jpg"
                                                data-path="img/products/chocolate-cake-thumb.jpg"
                                                data-label="chocolate-cake-thumb.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/chocolate-cake-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">chocolate-cake-thumb.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/marble-cake-thumb.jpg"
                                                data-path="img/products/marble-cake-thumb.jpg" data-label="marble-cake.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/marble-cake-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">marble-cake.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <button class="btn btn-link p-0 folder-button-collapse collapsed" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="icon-container">
                                        <i class="simple-icon-arrow-down"></i>
                                    </span>
                                    <span class="folder-name">Cupcakes</span>
                                </button>

                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="list disable-text-selection">
                                        <div class="row">
                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/streuselkuchen-thumb.jpg"
                                                data-path="img/products/streuselkuchen-thumb.jpg"
                                                data-label="streuselkuchen-thumb.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/streuselkuchen-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">streuselkuchen-thumb.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/cremeschnitte-thumb.jpg"
                                                data-path="img/products/cremeschnitte-thumb.jpg"
                                                data-label="cremeschnitte-thumb.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/cremeschnitte-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">cremeschnitte-thumb.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary sfl-submit">Select</button>
                    </div>
                </div>
            </div>
        </div>

        @endsection