<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Net Admin - @yield('title_page')</title>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300">

    <!-- Foundation Framework -->
    <link rel="stylesheet" href="{{ asset('css/vendor/foundation.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/foundation-float.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/foundation-prototype.min.css')  }}">

    <!-- Foundation Icon -->
    <link rel="stylesheet" href="{{ asset('css/vendor/foundation-icons.css')  }}">

    <!-- Flat Icons -->
    <link rel="stylesheet" href="{{ asset('css/vendor/flat-icons.css') }}">

    <!-- Modernizr -->
    <link rel="stylesheet" href="{{ asset('css/vendor/moderniz.css') }}">

    <!-- Admin styles css -->
    <link rel="stylesheet" href="{{ asset('css/vendor/admin-style.css')  }}">

</head>
<body>
<div class="row full-width wrapper">
    <div class="large-12 columns content-bg">
        <div id="top-menu">
            <div class="row">
                <div class="large-2 medium-4 small-12 columns top-part-no-padding">
                    <div class="logo-bg">
                        <img src="img/logo.png" alt="logo"/>
                        <i class="fi-list toggles" data-toggle="hide"></i>
                    </div>
                </div>
                <div class="large-10 medium-8 small-12 columns top-menu">
                    <div class="row">
                        <div class="large-6 medium-6 small-12 columns">
                            <div class="row">
                                <div class="large-8 columns">
                                    <input id="Text1" type="text" class="search-text" placeholder="Search" />
                                </div>
                            </div>
                        </div>
                        <div class="large-4 medium-6 small-12 columns text-center">
                            <div class="row">
                                <div class="medium-3 small-3 columns">
                                    <div class="notification">
                                        <i class="fi-mail"></i>
                                        <span class="mail">4</span>
                                    </div>
                                </div>
                                <div class="medium-3 small-3 columns">
                                    <div class="notification">
                                        <i class="fi-megaphone"></i>
                                        <span class="megaphone">5</span>
                                    </div>
                                </div>
                                <div class="medium-3 small-3 columns">
                                    <img src="img/32.jpg" alt="picture" class="top-bar-picture" />
                                </div>
                                <div class="medium-3 small-3 columns">
                                    <i class="fi-power power-off"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="no-padding">
                <div class="large-2 medium-12 small-12 columns">
                    <ul class="side-nav">
                        <li class="active"><a href="index.html"><i class="flaticon-dashboard1"></i>Dashboard</a></li>
                        <li><a href="profile.html"><i class="flaticon-profile4"></i>Profile</a></li>
                        <li><a href="staff.html"><i class="flaticon-businessman22"></i>Staff</a></li>
                        <li><a href="inbox.html"><span class="flaticon-mailbox10"></span>Inbox</a></li>
                        <li><a href="invoice.html"><i class="flaticon-invoice1"></i>Invoice</a></li>
                        <li>
                            <ul>
                                <li>
                                    <dl class="accordion" data-accordion="myAccordionGroup">
                                        <dd>
                                            <a href="#panel1c"><i class="flaticon-forms"></i>Components</a>
                                            <div id="panel1c" class="content">
                                                <ul>
                                                    <li>
                                                        <a href="general.html">General</a>
                                                    </li>
                                                    <li>
                                                        <a href="wizard.html">Wizard</a>
                                                    </li>
                                                    <li>
                                                        <a href="editor.html">Wysiwug Editor</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </li>
                        <li><a href="login.html"><i class="flaticon-incoming4"></i>Login</a></li>
                        <li><a href="register.html"><i class="flaticon-add58"></i>Register</a></li>
                        <li><a href="pricing.html"><i class="flaticon-businessman63"></i>Pricing</a></li>
                    </ul>
                </div>
            </div>
            <div class="large-10 medium-12 small-12 columns light-grey-bg-pattern">
                <div class="row">
                    <div class="large-10 columns">
                        <div class="page-name">
                            <h3 class="left">Dashboard</h3>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div id="dashboard">
                    <div class="row">
                        <div class="large-3 medium-6 small-12 columns">
                            <div class="stats border">
                                <div class="left">
                                    Sales
                                    <h3>$97334001</h3>
                                </div>
                                <i class="fi-price-tag right sales"></i>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="large-3 medium-6 small-12 columns">
                            <div class="stats border">
                                <div class="left">
                                    Orders
                                    <h3>400</h3>
                                </div>
                                <i class="fi-shopping-cart right orders"></i>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="large-3 medium-6 small-12 columns">
                            <div class="stats border">
                                <div class="left">
                                    Profit
                                    <h3>$600</h3>
                                </div>
                                <i class="fi-dollar right profit"></i>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="large-3 medium-6 small-12 columns">
                            <div class="stats border">
                                <div class="left">
                                    Users
                                    <h3>100</h3>
                                </div>
                                <i class="fi-torso right user"></i>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="large-8 columns">
                            <div class="custom-panel">
                                <div class="custom-panel-heading">
                                    <h4>Charts</h4>
                                </div>
                                <div class="custom-panel-body">
                                    <div id="morris-area-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="large-4 columns">
                            <div class="custom-panel">
                                <div class="custom-panel-heading">
                                    <h4>Charts</h4>
                                </div>
                                <div class="custom-panel-body">
                                    <div id="morris-donut-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="large-6 columns">
                            <div class="custom-panel">
                                <div class="custom-panel-heading">
                                    <h4>Quick Message</h4>
                                </div>
                                <div class="custom-panel-body">
                                    <label>Address</label>
                                    <input id="Text2" type="text" />
                                    <label>Subject</label>
                                    <input id="Text3" type="text" />
                                    <label>Message</label>
                                    <textarea></textarea>
                                    <a href="#" class="button tiny radius coral-bg right">Send</a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="large-6 columns">
                            <div class="custom-panel">
                                <div class="custom-panel-heading">
                                    <h4>To Do</h4>
                                </div>
                                <div class="custom-panel-body">
                                    <input id="new-todo" type="text" placeholder="What needs to be done?">
                                    <ul id="todo-list">

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="{{ asset('js/vendor/foundation.min.js') }}"></script>
</body>
</html>