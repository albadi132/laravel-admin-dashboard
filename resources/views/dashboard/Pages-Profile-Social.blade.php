<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dore jQuery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/video-js.css" />
    <link rel="stylesheet" href="css/vendor/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

            <div class="search" data-search-path="Pages.Search.html?q=">
                <input placeholder="Search...">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>
            </div>

            <a class="btn btn-sm btn-outline-primary ml-3 d-none d-md-inline-block"
                href="https://1.envato.market/5kAb">&nbsp;BUY&nbsp;</a>
        </div>


        <a class="navbar-logo" href="Dashboard.Default.html">
            <span class="logo d-none d-xs-block"></span>
            <span class="logo-mobile d-block d-xs-none"></span>
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <div class="d-none d-md-inline-block align-text-bottom mr-3">
                    <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1" 
                        data-toggle="tooltip" data-placement="left" title="Dark Mode">
                        <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                        <label class="custom-switch-btn" for="switchDark"></label>
                    </div>
                </div>

                <div class="position-relative d-none d-sm-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-grid"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown">
                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-equalizer d-block"></i>
                            <span>Settings</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-male-female d-block"></i>
                            <span>Users</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-puzzle d-block"></i>
                            <span>Components</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-bar-chart-4 d-block"></i>
                            <span>Profits</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-file d-block"></i>
                            <span>Surveys</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-suitcase d-block"></i>
                            <span>Tasks</span>
                        </a>

                    </div>
                </div>

                <div class="position-relative d-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="notificationButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-bell"></i>
                        <span class="count">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">
                        <div class="scroll">
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/profiles/l-2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notifications/1.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notifications/2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 ">
                                <a href="#">
                                    <img src="img/notifications/3.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">3 items just added to wish list by a user!
                                        </p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Sarah Kortney</span>
                    <span>
                        <img alt="Profile Picture" src="img/profiles/l-1.jpg" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="#">Account</a>
                    <a class="dropdown-item" href="#">Features</a>
                    <a class="dropdown-item" href="#">History</a>
                    <a class="dropdown-item" href="#">Support</a>
                    <a class="dropdown-item" href="#">Sign out</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li>
                        <a href="#dashboard">
                            <i class="iconsminds-shop-4"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#layouts">
                            <i class="iconsminds-digital-drawing"></i> Pages
                        </a>
                    </li>
                    <li>
                        <a href="#applications">
                            <i class="iconsminds-air-balloon-1"></i> Applications
                        </a>
                    </li>
                    <li>
                        <a href="#ui">
                            <i class="iconsminds-pantone"></i> UI
                        </a>
                    </li>
                    <li>
                        <a href="#menu">
                            <i class="iconsminds-three-arrow-fork"></i> Menu
                        </a>
                    </li>
                    <li>
                        <a href="Blank.Page.html">
                            <i class="iconsminds-bucket"></i> Blank Page
                        </a>
                    </li>
                    <li>
                        <a href="https://dore-jquery-docs.coloredstrategies.com" target="_blank">
                            <i class="iconsminds-library"></i> Docs
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="dashboard">
                    <li>
                        <a href="Dashboard.Default.html">
                            <i class="simple-icon-rocket"></i> <span class="d-inline-block">Default</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Analytics.html">
                            <i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Ecommerce.html">
                            <i class="simple-icon-basket-loaded"></i> <span class="d-inline-block">Ecommerce</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Content.html">
                            <i class="simple-icon-doc"></i> <span class="d-inline-block">Content</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="layouts" id="layouts">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Authorization</span>
                        </a>
                        <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Auth.Login.html">
                                        <i class="simple-icon-user-following"></i> <span
                                            class="d-inline-block">Login</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Auth.Register.html">
                                        <i class="simple-icon-user-follow"></i> <span
                                            class="d-inline-block">Register</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Auth.ForgotPassword.html">
                                        <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Forgot
                                            Password</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true"
                            aria-controls="collapseProduct" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Product</span>
                        </a>
                        <div id="collapseProduct" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Product.List.html">
                                        <i class="simple-icon-credit-card"></i> <span class="d-inline-block">Data
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Thumbs.html">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">Thumb
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Images.html">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Image
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Detail.html">
                                        <i class="simple-icon-book-open"></i> <span class="d-inline-block">Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseProfile" aria-expanded="true"
                            aria-controls="collapseProfile" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Profile</span>
                        </a>
                        <div id="collapseProfile" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li class="active">
                                    <a href="Pages.Profile.Social.html">
                                        <i class="simple-icon-share"></i> <span class="d-inline-block">Social</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Profile.Portfolio.html">
                                        <i class="simple-icon-link"></i> <span class="d-inline-block">Portfolio</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true"
                            aria-controls="collapseBlog" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Blog</span>
                        </a>
                        <div id="collapseBlog" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Blog.html">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Blog.Detail.html">
                                        <i class="simple-icon-book-open"></i> <span class="d-inline-block">Detail</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Blog.Detail.Alt.html">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Detail
                                            Alt</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMisc" aria-expanded="true"
                            aria-controls="collapseMisc" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Miscellaneous</span>
                        </a>
                        <div id="collapseMisc" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Misc.Coming.Soon.html">
                                        <i class="simple-icon-hourglass"></i> <span class="d-inline-block">Coming
                                            Soon</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Error.html">
                                        <i class="simple-icon-exclamation"></i> <span
                                            class="d-inline-block">Error</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Faq.html">
                                        <i class="simple-icon-question"></i> <span class="d-inline-block">Faq</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Invoice.html">
                                        <i class="simple-icon-bag"></i> <span class="d-inline-block">Invoice</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Knowledge.Base.html">
                                        <i class="simple-icon-graduation"></i> <span class="d-inline-block">Knowledge
                                            Base</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Mailing.html">
                                        <i class="simple-icon-envelope-open"></i> <span
                                            class="d-inline-block">Mailing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Pricing.html">
                                        <i class="simple-icon-diamond"></i> <span class="d-inline-block">Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Search.html">
                                        <i class="simple-icon-magnifier"></i> <span class="d-inline-block">Search</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="applications">
                    <li>
                        <a href="Apps.MediaLibrary.html">
                            <i class="simple-icon-picture"></i> <span class="d-inline-block">Library</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Todo.List.html">
                            <i class="simple-icon-check"></i> <span class="d-inline-block">Todo</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Survey.List.html">
                            <i class="simple-icon-calculator"></i> <span class="d-inline-block">Survey</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Chat.html">
                            <i class="simple-icon-bubbles"></i> <span class="d-inline-block">Chat</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="ui">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseForms" aria-expanded="true"
                            aria-controls="collapseForms" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Forms</span>
                        </a>
                        <div id="collapseForms" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Ui.Forms.Components.html">
                                        <i class="simple-icon-event"></i> <span class="d-inline-block">Components</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Layouts.html">
                                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Layouts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Validation.html">
                                        <i class="simple-icon-check"></i> <span class="d-inline-block">Validation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Wizard.html">
                                        <i class="simple-icon-magic-wand"></i> <span
                                            class="d-inline-block">Wizard</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseDataTables" aria-expanded="true"
                            aria-controls="collapseDataTables" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Datatables</span>
                        </a>
                        <div id="collapseDataTables" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Ui.Datatables.Rows.html">
                                        <i class="simple-icon-screen-desktop"></i> <span class="d-inline-block">Full
                                            Page UI</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Scroll.html">
                                        <i class="simple-icon-mouse"></i> <span class="d-inline-block">Scrollable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Pagination.html">
                                        <i class="simple-icon-notebook"></i> <span
                                            class="d-inline-block">Pagination</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Default.html">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Default</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseComponents" aria-expanded="true"
                            aria-controls="collapseComponents" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Components</span>
                        </a>
                        <div id="collapseComponents" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Ui.Components.Alerts.html">
                                        <i class="simple-icon-bell"></i> <span class="d-inline-block">Alerts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Badges.html">
                                        <i class="simple-icon-badge"></i> <span class="d-inline-block">Badges</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Buttons.html">
                                        <i class="simple-icon-control-play"></i> <span
                                            class="d-inline-block">Buttons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Cards.html">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Cards</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="Ui.Components.Carousel.html">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Carousel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Charts.html">
                                        <i class="simple-icon-chart"></i> <span class="d-inline-block">Charts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Collapse.html">
                                        <i class="simple-icon-arrow-up"></i> <span
                                            class="d-inline-block">Collapse</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Dropdowns.html">
                                        <i class="simple-icon-arrow-down"></i> <span
                                            class="d-inline-block">Dropdowns</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Editors.html">
                                        <i class="simple-icon-book-open"></i> <span
                                            class="d-inline-block">Editors</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Icons.html">
                                        <i class="simple-icon-star"></i> <span class="d-inline-block">Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.InputGroups.html">
                                        <i class="simple-icon-note"></i> <span class="d-inline-block">Input
                                            Groups</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Jumbotron.html">
                                        <i class="simple-icon-screen-desktop"></i> <span
                                            class="d-inline-block">Jumbotron</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Modal.html">
                                        <i class="simple-icon-docs"></i> <span class="d-inline-block">Modal</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Navigation.html">
                                        <i class="simple-icon-cursor"></i> <span
                                            class="d-inline-block">Navigation</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="Ui.Components.PopoverandTooltip.html">
                                        <i class="simple-icon-pin"></i> <span class="d-inline-block">Popover &
                                            Tooltip</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Sortable.html">
                                        <i class="simple-icon-shuffle"></i> <span class="d-inline-block">Sortable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Tables.html">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Tables</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

                <ul class="list-unstyled" data-link="menu" id="menuTypes">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                            aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Types</span>
                        </a>
                        <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Menu.Default.html">
                                        <i class="simple-icon-control-pause"></i> <span
                                            class="d-inline-block">Default</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Subhidden.html">
                                        <i class="simple-icon-arrow-left mi-subhidden"></i> <span
                                            class="d-inline-block">Subhidden</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Hidden.html">
                                        <i class="simple-icon-control-start mi-hidden"></i> <span
                                            class="d-inline-block">Hidden</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Mainhidden.html">
                                        <i class="simple-icon-control-rewind mi-hidden"></i> <span
                                            class="d-inline-block">Mainhidden</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel" aria-expanded="true"
                            aria-controls="collapseMenuLevel" class="rotate-arrow-icon collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Levels</span>
                        </a>
                        <div id="collapseMenuLevel" class="collapse" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel2"
                                        aria-expanded="true" aria-controls="collapseMenuLevel2"
                                        class="rotate-arrow-icon collapsed">
                                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Another
                                            Level</span>
                                    </a>
                                    <div id="collapseMenuLevel2" class="collapse">
                                        <ul class="list-unstyled inner-level-menu">
                                            <li>
                                                <a href="#">
                                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                                        Level</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuDetached" aria-expanded="true"
                            aria-controls="collapseMenuDetached" class="rotate-arrow-icon collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Detached</span>
                        </a>
                        <div id="collapseMenuDetached" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>Sarah Kortney</h1>
                        <div class="text-zero top-right-button-container">
                            <button type="button"
                                class="btn btn-lg btn-outline-primary dropdown-toggle dropdown-toggle-split top-right-button top-right-button-single"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ACTIONS
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </div>
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
                    </div>
                    <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab"
                                aria-controls="first" aria-selected="true">PROFILE</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab"
                                aria-controls="second" aria-selected="false">IMAGES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab"
                                aria-controls="third" aria-selected="false">FRIENDS</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                            <div class="row">
                                <div class="col-12 mb-5">
                                    <img class="social-header card-img" src="img/social/header.jpg" />
                                </div>
                                <div class="col-12 col-lg-5 col-xl-4 col-left">
                                    <a href="img/profiles/1.jpg" class="lightbox">
                                        <img alt="Profile" src="img/profiles/l-1.jpg"
                                            class="img-thumbnail card-img social-profile-img">
                                    </a>

                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="text-center pt-4">
                                                <p class="list-item-heading pt-2">Sarah Cortney</p>
                                            </div>
                                            <p class="mb-3">
                                                I’m a web developer. I spend my whole day, practically every day,
                                                experimenting with HTML, CSS, and JavaScript; dabbling with Python and
                                                Ruby; and inhaling a wide variety of potentially useless information
                                                through a few hundred RSS feeds. I build websites that delight and
                                                inform. I do it well.
                                            </p>

                                            <p class="text-muted text-small mb-2">Location</p>
                                            <p class="mb-3">Nairobi, Kenya</p>

                                            <p class="text-muted text-small mb-2">Responsibilities</p>
                                            <p class="mb-3">
                                                <a href="#">
                                                    <span
                                                        class="badge badge-pill badge-outline-theme-2 mb-1">FRONTEND</span>
                                                </a>
                                                <a href="#">
                                                    <span
                                                        class="badge badge-pill badge-outline-theme-2 mb-1">JAVASCRIPT</span>
                                                </a>
                                                <a href="#">
                                                    <span
                                                        class="badge badge-pill badge-outline-theme-2 mb-1">SECURITY</span>
                                                </a>
                                                <a href="#">
                                                    <span
                                                        class="badge badge-pill badge-outline-theme-2 mb-1">DESIGN</span>
                                                </a>
                                            </p>
                                            <p class="text-muted text-small mb-2">Contact</p>
                                            <div class="social-icons">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#"><i class="simple-icon-social-facebook"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><i class="simple-icon-social-twitter"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><i class="simple-icon-social-instagram"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-4 d-none d-lg-block">
                                        <div class="card-body">
                                            <h5 class="card-title"><span>Photos</span><a
                                                    class="btn-link float-right text-small pt-1" href="#">View All</a>
                                            </h5>
                                            <div class="row social-image-row gallery">
                                                <div class="col-6">
                                                    <a href="img/products/marble-cake.jpg">
                                                        <img class="img-fluid border-radius"
                                                            src="img/products/marble-cake-thumb.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="img/products/parkin.jpg">
                                                        <img class="img-fluid border-radius"
                                                            src="img/products/parkin-thumb.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="img/products/fruitcake.jpg">
                                                        <img class="img-fluid border-radius"
                                                            src="img/products/fruitcake-thumb.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="img/products/tea-loaf.jpg">
                                                        <img class="img-fluid border-radius"
                                                            src="img/products/tea-loaf-thumb.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="img/products/napoleonshat.jpg">
                                                        <img class="img-fluid border-radius"
                                                            src="img/products/napoleonshat-thumb.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="img/products/magdalena.jpg">
                                                        <img class="img-fluid border-radius"
                                                            src="img/products/magdalena-thumb.jpg" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-4 d-none d-lg-block">
                                        <div class="card-body">
                                            <h5 class="card-title">Who to Follow</h5>

                                            <div
                                                class="d-flex flex-row mb-3 pb-3 border-bottom justify-content-between align-items-center">
                                                <a href="#">
                                                    <img src="img/profiles/l-2.jpg" alt="Philip Nelms"
                                                        class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                                </a>
                                                <div class="pl-3 flex-fill">
                                                    <a href="#">
                                                        <p class="font-weight-medium mb-0">Philip Nelms</p>
                                                        <p class="text-muted mb-0 text-small">09.08.2019 - 12:45</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a class="btn btn-outline-primary btn-xs" href="#">FOLLOW</a>
                                                </div>
                                            </div>

                                            <div
                                                class="d-flex flex-row mb-3 pb-3 border-bottom justify-content-between align-items-center">
                                                <a href="#">
                                                    <img src="img/profiles/l-4.jpg" alt="Mimi Carreira"
                                                        class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                                </a>
                                                <div class="pl-3 flex-fill">
                                                    <a href="#">
                                                        <p class="font-weight-medium mb-0">Mimi Carreira</p>
                                                        <p class="text-muted mb-0 text-small">14.08.2019 - 10:10</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a class="btn btn-outline-primary btn-xs" href="#">FOLLOW</a>
                                                </div>
                                            </div>

                                            <div
                                                class="d-flex flex-row mb-3 pb-3 border-bottom justify-content-between align-items-center">
                                                <a href="#">
                                                    <img src="img/profiles/l-3.jpg" alt="Brynn Bragg"
                                                        class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                                </a>
                                                <div class="pl-3 flex-fill">
                                                    <a href="#">
                                                        <p class="font-weight-medium mb-0">Brynn Bragg</p>
                                                        <p class="text-muted mb-0 text-small">23.07.2019 - 16:10</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a class="btn btn-outline-primary btn-xs" href="#">FOLLOW</a>
                                                </div>
                                            </div>

                                            <div
                                                class="d-flex flex-row mb-3 pb-3 border-bottom justify-content-between align-items-center">
                                                <a href="#">
                                                    <img src="img/profiles/l-7.jpg" alt="Rasheeda Vaquera"
                                                        class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                                </a>
                                                <div class="pl-3 flex-fill">
                                                    <a href="#">
                                                        <p class="font-weight-medium mb-0">Rasheeda Vaquera</p>
                                                        <p class="text-muted mb-0 text-small">18.07.2019 - 12:00</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a class="btn btn-outline-primary btn-xs" href="#">FOLLOW</a>
                                                </div>
                                            </div>

                                            <div
                                                class="d-flex flex-row mb-3 pb-3 border-bottom justify-content-between align-items-center">
                                                <a href="#">
                                                    <img src="img/profiles/l-8.jpg" alt="Mayra Sibley"
                                                        class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                                </a>
                                                <div class="pl-3 flex-fill">
                                                    <a href="#">
                                                        <p class="font-weight-medium mb-0">Esperanza Lodge</p>
                                                        <p class="text-muted mb-0 text-small">13.07.2019 - 13:00</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a class="btn btn-outline-primary btn-xs" href="#">FOLLOW</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card mb-4 d-none d-lg-block">
                                        <div class="position-absolute card-top-buttons">
                                            <button class="btn btn-header-light icon-button">
                                                <i class="simple-icon-refresh"></i>
                                            </button>
                                        </div>

                                        <div class="card-body">
                                            <h5 class="card-title">Recent Posts</h5>
                                            <div>
                                                <div class="d-flex flex-row mb-3">
                                                    <a class="d-block position-relative" href="#">
                                                        <img src="img/products/marble-cake-thumb.jpg" alt="Marble Cake"
                                                            class="list-thumbnail border-0" />
                                                        <span
                                                            class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                                                    </a>
                                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                                        <a href="#">
                                                            <p class="list-item-heading">Progressively Maintain
                                                                Extensive Infomediaries</p>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row mb-3">
                                                    <a class="d-block position-relative" href="#">
                                                        <img src="img/products/fruitcake-thumb.jpg" alt="Fruitcake"
                                                            class="list-thumbnail border-0" />
                                                    </a>
                                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                                        <a href="#">
                                                            <p class="list-item-heading">Assertively Iterate Resource
                                                                Maximizing</p>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row mb-3">
                                                    <a class="d-block position-relative" href="#">
                                                        <img src="img/products/chocolate-cake-thumb.jpg" alt="Chocolate Cake"
                                                            class="list-thumbnail border-0" />
                                                    </a>
                                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                                        <a href="#">
                                                            <p class="list-item-heading">Podcasting Operational Change
                                                            </p>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row">
                                                    <a class="d-block position-relative" href="#">
                                                        <img src="img/products/fat-rascal-thumb.jpg" alt="Fat Rascal"
                                                            class="list-thumbnail border-0" />
                                                    </a>
                                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                                        <a href="#">
                                                            <p class="list-item-heading">Manufactured Products</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-7 col-xl-8 col-right">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="d-flex flex-row mb-3">
                                                <a href="#">
                                                    <img src="img/profiles/l-1.jpg" alt="Mayra Sibley"
                                                        class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                                </a>
                                                <div class="pl-3">
                                                    <a href="#">
                                                        <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                                        <p class="text-muted mb-0 text-small">03.08.2018 - 17:10</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <p>
                                                Keeping your eye on the ball while
                                                performing a deep dive on the start-up mentality.
                                            </p>

                                            <div class="position-relative mb-3">
                                                <video id="my-video" class="video-js card-img video-content" controls
                                                    preload="auto" poster="img/video/subpage-video-poster.jpg"
                                                    data-setup="{}">
                                                    <source
                                                        src="http://distribution.bbb3d.renderfarming.net/video/mp4/bbb_sunflower_1080p_30fps_normal.mp4"
                                                        type='video/mp4'>
                                                </video>
                                            </div>
                                            <div>
                                                <div class="post-icon mr-3 d-inline-block"><a href="#"><i
                                                            class="simple-icon-heart mr-1"></i></a> <span>4
                                                        Likes</span></div>
                                                <div class="post-icon d-inline-block"><i
                                                        class="simple-icon-bubble mr-1"></i> <span>1
                                                        Comment</span></div>
                                            </div>

                                            <div class="mt-5">
                                                <div class="d-flex flex-row mb-4 justify-content-between">
                                                    <a href="#">
                                                        <img src="img/profiles/l-8.jpg" alt="Brynn Bragg"
                                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                                    </a>
                                                    <div class="pl-3">
                                                        <a href="#">
                                                            <p class="font-weight-medium mb-0 ">Brynn Bragg</p>
                                                            <p class="text-muted mb-0 text-small">Two Days Ago</p>
                                                        </a>
                                                        <p class="mt-3">
                                                            Mass incarceration, preliminary thinking systems thinking
                                                            vibrant thought leadership corporate social responsibility.
                                                            Green space global, policymaker; shared value disrupt
                                                            segmentation social capital.
                                                        </p>
                                                    </div>
                                                    <div class="comment-likes">
                                                        <span class="post-icon"><a href="#"><span>2 Likes</span> <i
                                                                    class="simple-icon-heart ml-2"></i></a></span>
                                                    </div>
                                                </div>

                                                <div class="comment-contaiener">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Add a comment">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-secondary" type="button"><span
                                                                    class="d-inline-block">Send</span> <i
                                                                    class="simple-icon-arrow-right ml-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="d-flex flex-row mb-3">
                                                <a href="#">
                                                    <img src="img/profiles/l-1.jpg" alt="Mayra Sibley"
                                                        class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                                </a>
                                                <div class="pl-3">
                                                    <a href="#">
                                                        <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                                        <p class="text-muted mb-0 text-small">09.08.2018 - 12:45</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <p>
                                                Podcasting operational change management inside of workflows to
                                                establish a framework. Taking seamless key performance indicators
                                                offline to maximise the long tail. Keeping your eye on the ball while
                                                performing a deep dive on the start-up mentality.
                                            </p>
                                            <a href="img/details/5.jpg" class="lightbox">
                                                <img class="img-fluid border-0 border-radius mb-3"
                                                    src="img/details/5.jpg" />
                                            </a>
                                            <div>
                                                <div class="post-icon mr-3 d-inline-block"><a href="#"><i
                                                            class="simple-icon-heart mr-1"></i></a> <span>211
                                                        Likes</span></div>
                                                <div class="post-icon d-inline-block"><i
                                                        class="simple-icon-bubble mr-1"></i> <span>2
                                                        Comments</span></div>
                                            </div>

                                            <div class="mt-5">
                                                <div class="d-flex flex-row mb-3 border-bottom justify-content-between">
                                                    <a href="#">
                                                        <img src="img/profiles/l-7.jpg" alt="Mayra Sibley"
                                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                                    </a>
                                                    <div class="pl-3 flex-grow-1">
                                                        <a href="#">
                                                            <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                                            <p class="text-muted mb-0 text-small">Two Days Ago</p>
                                                        </a>
                                                        <p class="mt-3">
                                                            Taking seamless key performance indicators
                                                            offline to maximise the long tail.
                                                        </p>
                                                    </div>
                                                    <div class="comment-likes">
                                                        <span class="post-icon"><a href="#"><span>4 Likes</span> <i
                                                                    class="simple-icon-heart ml-2"></i></a></span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mb-4 justify-content-between">
                                                    <a href="#">
                                                        <img src="img/profiles/l-5.jpg" alt="Mimi Carreira"
                                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                                    </a>
                                                    <div class="pl-3">
                                                        <a href="#">
                                                            <p class="font-weight-medium mb-0 ">Mimi Carreira</p>
                                                            <p class="text-muted mb-0 text-small">Two Days Ago</p>
                                                        </a>
                                                        <p class="mt-3">
                                                            Mass incarceration, preliminary thinking systems thinking
                                                            vibrant thought leadership corporate social responsibility.
                                                            Green space global, policymaker; shared value disrupt
                                                            segmentation social capital.
                                                        </p>
                                                    </div>
                                                    <div class="comment-likes">
                                                        <span class="post-icon"><a href="#"><span>2 Likes</span> <i
                                                                    class="simple-icon-heart ml-2"></i></a></span>
                                                    </div>
                                                </div>

                                                <div class="comment-contaiener">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Add a comment">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-secondary" type="button"><span
                                                                    class="d-inline-block">Send</span> <i
                                                                    class="simple-icon-arrow-right ml-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="d-flex flex-row mb-3">
                                                <a href="#">
                                                    <img src="img/profiles/l-1.jpg" alt="Mayra Sibley"
                                                        class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                                </a>
                                                <div class="pl-3">
                                                    <a href="#">
                                                        <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                                        <p class="text-muted mb-0 text-small">09.08.2018 - 12:45</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <p>
                                                Podcasting operational change management inside of workflows to
                                                establish a framework. Taking seamless key performance indicators
                                                offline to maximise the long tail. Keeping your eye on the ball while
                                                performing a deep dive on the start-up mentality.
                                            </p>
                                            <div>
                                                <div class="post-icon mr-3 d-inline-block"><a href="#"><i
                                                            class="simple-icon-heart mr-1"></i></a> <span>211
                                                        Likes</span></div>
                                                <div class="post-icon d-inline-block"><i
                                                        class="simple-icon-bubble mr-1"></i> <span>2
                                                        Comments</span></div>
                                            </div>

                                            <div class="mt-5">
                                                <div class="comment-contaiener">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Add a comment">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-secondary" type="button"><span
                                                                    class="d-inline-block">Send</span> <i
                                                                    class="simple-icon-arrow-right ml-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="d-flex flex-row mb-3">
                                                <a href="#">
                                                    <img src="img/profiles/l-1.jpg" alt="Mayra Sibley"
                                                        class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                                </a>
                                                <div class="pl-3">
                                                    <a href="#">
                                                        <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                                        <p class="text-muted mb-0 text-small">09.08.2018 - 12:45</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <p>
                                                Podcasting operational change management inside of workflows to
                                                establish a framework. Taking seamless key performance indicators
                                                offline to maximise the long tail. Keeping your eye on the ball while
                                                performing a deep dive on the start-up mentality.
                                            </p>
                                            <a href="img/details/1.jpg" class="lightbox">
                                                <img class="img-fluid border-0 border-radius mb-3"
                                                    src="img/details/1.jpg" />
                                            </a>
                                            <div>
                                                <div class="post-icon mr-3 d-inline-block"><a href="#"><i
                                                            class="simple-icon-heart mr-1"></i></a> <span>211
                                                        Likes</span></div>
                                                <div class="post-icon d-inline-block"><i
                                                        class="simple-icon-bubble mr-1"></i> <span>2
                                                        Comments</span></div>
                                            </div>

                                            <div class="mt-5">
                                                <div class="d-flex flex-row mb-3 justify-content-between">
                                                    <a href="#">
                                                        <img src="img/profiles/l-7.jpg" alt="Mayra Sibley"
                                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                                    </a>
                                                    <div class="pl-3 flex-grow-1">
                                                        <a href="#">
                                                            <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                                            <p class="text-muted mb-0 text-small">Two Days Ago</p>
                                                        </a>
                                                        <p class="mt-3">
                                                            Taking seamless key performance indicators
                                                            offline to maximise the long tail.
                                                        </p>
                                                    </div>
                                                    <div class="comment-likes">
                                                        <span class="post-icon"><a href="#"><span>4 Likes</span> <i
                                                                    class="simple-icon-heart ml-2"></i></a></span>
                                                    </div>
                                                </div>

                                                <div class="comment-contaiener">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Add a comment">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-secondary" type="button"><span
                                                                    class="d-inline-block">Send</span> <i
                                                                    class="simple-icon-arrow-right ml-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="mb-4">25 July 2019</h5>
                                </div>
                            </div>
                            <div class="row gallery gallery-page mb-5">
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="img/products/marble-cake.jpg">
                                        <img class="img-fluid border-radius" src="img/products/marble-cake-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="img/products/parkin.jpg">
                                        <img class="img-fluid border-radius" src="img/products/parkin-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="img/products/fruitcake.jpg">
                                        <img class="img-fluid border-radius" src="img/products/fruitcake-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="img/products/tea-loaf.jpg">
                                        <img class="img-fluid border-radius" src="img/products/tea-loaf-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="img/products/napoleonshat.jpg">
                                        <img class="img-fluid border-radius" src="img/products/napoleonshat-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="img/products/magdalena.jpg">
                                        <img class="img-fluid border-radius" src="img/products/magdalena-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3">
                                    <a href="img/products/marble-cake.jpg">
                                        <img class="img-fluid border-radius" src="img/products/marble-cake.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3">
                                    <a href="img/products/parkin.jpg">
                                        <img class="img-fluid border-radius" src="img/products/parkin.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3">
                                    <a href="img/products/fruitcake.jpg">
                                        <img class="img-fluid border-radius" src="img/products/fruitcake.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3">
                                    <a href="img/products/tea-loaf.jpg">
                                        <img class="img-fluid border-radius" src="img/products/tea-loaf.jpg" />
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h5 class="mb-4">14 April 2019</h5>
                                </div>
                            </div>
                            <div class="row gallery gallery-page mb-5">

                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="img/products/magdalena.jpg">
                                        <img class="img-fluid border-radius" src="img/products/magdalena-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="img/products/napoleonshat.jpg">
                                        <img class="img-fluid border-radius" src="img/products/napoleonshat-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="img/products/tea-loaf.jpg">
                                        <img class="img-fluid border-radius" src="img/products/tea-loaf-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="img/products/fruitcake.jpg">
                                        <img class="img-fluid border-radius" src="img/products/fruitcake-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="img/products/parkin.jpg">
                                        <img class="img-fluid border-radius" src="img/products/parkin-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="img/products/marble-cake.jpg">
                                        <img class="img-fluid border-radius" src="img/products/marble-cake-thumb.jpg" />
                                    </a>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <h5 class="mb-4">05 March 2019</h5>
                                </div>
                            </div>
                            <div class="row gallery gallery-page mb-5">
                                <div class="col-6 col-lg-3 col-md-3">
                                    <a href="img/products/parkin.jpg">
                                        <img class="img-fluid border-radius" src="img/products/parkin.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3">
                                    <a href="img/products/fruitcake.jpg">
                                        <img class="img-fluid border-radius" src="img/products/fruitcake.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3">
                                    <a href="img/products/tea-loaf.jpg">
                                        <img class="img-fluid border-radius" src="img/products/tea-loaf.jpg" />
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card d-flex flex-row mb-4">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile" src="img/profiles/l-8.jpg"
                                                class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                        </a>
                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <a href="#">
                                                        <p class="list-item-heading mb-1 truncate">Latarsha Gama</p>
                                                    </a>
                                                    <p class="mb-2 text-muted text-small">Head Developer</p>
                                                    <button type="button"
                                                        class="btn btn-xs btn-outline-primary ">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card d-flex flex-row mb-4">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile" src="img/profiles/l-2.jpg"
                                                class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                        </a>
                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <a href="#">
                                                        <p class="list-item-heading mb-1 truncate">Kathryn Mengel</p>
                                                    </a>
                                                    <p class="mb-2 text-muted text-small">Art Director</p>
                                                    <button type="button"
                                                        class="btn btn-xs btn-outline-primary ">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card d-flex flex-row mb-4">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile" src="img/profiles/l-3.jpg"
                                                class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                        </a>
                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <a href="#">
                                                        <p class="list-item-heading mb-1 truncate">Laree Munsch</p>
                                                    </a>
                                                    <p class="mb-2 text-muted text-small">Lead Programmer</p>
                                                    <button type="button"
                                                        class="btn btn-xs btn-outline-primary ">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card d-flex flex-row mb-4">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile" src="img/profiles/l-4.jpg"
                                                class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                        </a>
                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <a href="#">
                                                        <p class="list-item-heading mb-1 truncate">Esperanza Lodge</p>
                                                    </a>
                                                    <p class="mb-2 text-muted text-small">Director</p>
                                                    <button type="button"
                                                        class="btn btn-xs btn-outline-primary ">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card d-flex flex-row mb-4">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile" src="img/profiles/l-5.jpg"
                                                class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                        </a>
                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <a href="#">
                                                        <p class="list-item-heading mb-1 truncate">Mimi Carreira</p>
                                                    </a>
                                                    <p class="mb-2 text-muted text-small">Photographer</p>
                                                    <button type="button"
                                                        class="btn btn-xs btn-outline-primary ">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card d-flex flex-row mb-4">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile" src="img/profiles/l-6.jpg"
                                                class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                        </a>
                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <a href="#">
                                                        <p class="list-item-heading mb-1 truncate">Rasheeda Vaquera</p>
                                                    </a>
                                                    <p class="mb-2 text-muted text-small">Account</p>
                                                    <button type="button"
                                                        class="btn btn-xs btn-outline-primary ">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card d-flex flex-row mb-4">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile" src="img/profiles/l-7.jpg"
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
                                                    <button type="button"
                                                        class="btn btn-xs btn-outline-primary ">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card d-flex flex-row mb-4">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile" src="img/profiles/l-8.jpg"
                                                class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                        </a>
                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <a href="#">
                                                        <p class="list-item-heading mb-1 truncate">Kathryn Mengel</p>
                                                    </a>
                                                    <p class="mb-2 text-muted text-small">Chief Designer</p>
                                                    <button type="button"
                                                        class="btn btn-xs btn-outline-primary ">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card d-flex flex-row mb-4">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile" src="img/profiles/l-9.jpg"
                                                class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                        </a>
                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <a href="#">
                                                        <p class="list-item-heading mb-1 truncate">Philip Nelms</p>
                                                    </a>
                                                    <p class="mb-2 text-muted text-small">...</p>
                                                    <button type="button"
                                                        class="btn btn-xs btn-outline-primary ">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card d-flex flex-row mb-4">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile" src="img/profiles/l-10.jpg"
                                                class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                        </a>
                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <a href="#">
                                                        <p class="list-item-heading mb-1 truncate">Velva Valdovinos</p>
                                                    </a>
                                                    <p class="mb-2 text-muted text-small">Developer</p>
                                                    <button type="button"
                                                        class="btn btn-xs btn-outline-primary ">View</button>
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
        </div>
    </main>

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">ColoredStrategies 2019</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Review</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Purchase</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Docs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/progressbar.min.js"></script>
    <script src="js/vendor/baguetteBox.min.js"></script>
    <script src="js/vendor/video.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>