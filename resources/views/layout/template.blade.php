<!DOCTYPE html>
<!-- saved from url=(0048)https://adminlte.io/themes/AdminLTE/starter.html -->
<html style="height: auto; min-height: 100%;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion des étudiants</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('AdminLTE/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('AdminLTE/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('AdminLTE/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('AdminLTE/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="{{ asset('AdminLTE/skin-blue.min.css') }}">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="./AdminLTE/css">
    <script defer="" referrerpolicy="origin" src="./AdminLTE/s.js"></script>
    <script nonce="bb16102a-6dd3-49c5-852d-6049bf397dea">(function (w, d) {
            !function (a, e, t, r) {
                a.zarazData = a.zarazData || {};
                a.zarazData.executed = [];
                a.zaraz = {deferred: []};
                a.zaraz.q = [];
                a.zaraz._f = function (e) {
                    return function () {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({m: e, a: t})
                    }
                };
                for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.zaraz.init = () => {
                    var t = e.getElementsByTagName(r)[0], z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
                    a.zarazData.x = Math.random();
                    a.zarazData.w = a.screen.width;
                    a.zarazData.h = a.screen.height;
                    a.zarazData.j = a.innerHeight;
                    a.zarazData.e = a.innerWidth;
                    a.zarazData.l = a.location.href;
                    a.zarazData.r = e.referrer;
                    a.zarazData.k = a.screen.colorDepth;
                    a.zarazData.n = e.characterSet;
                    a.zarazData.o = (new Date).getTimezoneOffset();
                    a.zarazData.q = [];
                    for (; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith("_zaraz_"))).forEach((t => {
                        try {
                            a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                        } catch {
                            a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                        }
                    }));
                    z.referrerPolicy = "origin";
                    z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
                    t.parentNode.insertBefore(z, t)
                };
                ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);</script>
</head>

<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;">

    <header class="main-header">

        <a href="https://adminlte.io/themes/AdminLTE/index2.html" class="logo">

            <span class="logo-mini"><b>A</b>LT</span>

            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">

            <a href="https://adminlte.io/themes/AdminLTE/starter.html#" class="sidebar-toggle" data-toggle="push-menu"
               role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="dropdown messages-menu">

                        <a href="https://adminlte.io/themes/AdminLTE/starter.html#" class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>

                                <ul class="menu">
                                    <li>
                                        <a href="https://adminlte.io/themes/AdminLTE/starter.html#">
                                            <div class="pull-left">

                                                <img src="./AdminLTE/user2-160x160.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>

                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>

                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>

                                </ul>

                            </li>
                            <li class="footer"><a href="https://adminlte.io/themes/AdminLTE/starter.html#">See All
                                    Messages</a></li>
                        </ul>
                    </li>


                    <li class="dropdown notifications-menu">

                        <a href="https://adminlte.io/themes/AdminLTE/starter.html#" class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>

                                <ul class="menu">
                                    <li>
                                        <a href="https://adminlte.io/themes/AdminLTE/starter.html#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="footer"><a href="https://adminlte.io/themes/AdminLTE/starter.html#">View all</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown tasks-menu">

                        <a href="https://adminlte.io/themes/AdminLTE/starter.html#" class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>

                                <ul class="menu">
                                    <li>
                                        <a href="https://adminlte.io/themes/AdminLTE/starter.html#">

                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>

                                            <div class="progress xs">

                                                <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="footer">
                                <a href="https://adminlte.io/themes/AdminLTE/starter.html#">View all tasks</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown user user-menu">

                        <a href="https://adminlte.io/themes/AdminLTE/starter.html#" class="dropdown-toggle"
                           data-toggle="dropdown">

                            <img src="./AdminLTE/user2-160x160.jpg" class="user-image" alt="User Image">

                            <span class="hidden-xs">DAH</span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="user-header">
                                <img src="./user2-160x160.jpg" class="img-circle" alt="User Image">
                                <p>
                                   DAH - Developeuse Web
                                    <small>Titulaire d'une licence professionnelle en Génie Logiciel</small>
                                </p>
                            </li>

                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="https://adminlte.io/themes/AdminLTE/starter.html#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="https://adminlte.io/themes/AdminLTE/starter.html#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="https://adminlte.io/themes/AdminLTE/starter.html#">Friends</a>
                                    </div>
                                </div>

                            </li>

                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="https://adminlte.io/themes/AdminLTE/starter.html#"
                                       class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="https://adminlte.io/themes/AdminLTE/starter.html#"
                                       class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="https://adminlte.io/themes/AdminLTE/starter.html#" data-toggle="control-sidebar"><i
                                class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">

        <section class="sidebar">

            <div class="user-panel">
                <div class="pull-left image">
                    <img src="./AdminLTE/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>DAH</p>

                    <a href="https://adminlte.io/themes/AdminLTE/starter.html#"><i
                            class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <form action="https://adminlte.io/themes/AdminLTE/starter.html#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
</button>
</span>
                </div>
            </form>

            <ul class="sidebar-menu tree" data-widget="tree">

                
                <li class="active"><a href="{{ route('etudiants.index') }}"><i class="fa fa-link"></i>
                        <span>Etudiant</span></a></li>
                <li class="active"><a href="{{ route('niveaux.index') }}"><i class="fa fa-link"></i>
                        <span>Niveaux</span></a></li>
                <li class="active"><a href="{{ route('enseignants.index') }}"><i class="fa fa-link"></i>
                        <span>Enseignants</span></a></li>
                <li class="active"><a href="{{ route('UEs.index') }}"><i class="fa fa-link"></i>
                        <span>UE</span></a></li>
                <li class="active"><a href="{{ route('suivre.index') }}"><i class="fa fa-link"></i>
                        <span>Cours suivi</span></a></li>
                <li class="active"><a href="{{ route('evaluations.index') }}"><i class="fa fa-link"></i>
                        <span>Evaluations</span></a></li>

            </ul>

        </section>

    </aside>

    <div class="content-wrapper" style="min-height: 474px;">

        <section class="content-header">
            <h1>
                Page Header
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="https://adminlte.io/themes/AdminLTE/starter.html#"><i class="fa fa-dashboard"></i>
                        Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <section class="content container-fluid">
            @yield('content')
        </section>

    </div>


    <footer class="main-footer">

        <div class="pull-right hidden-xs">
            Anything you want
        </div>

        <strong>Copyright © 2023 <a href="https://adminlte.io/themes/AdminLTE/starter.html#">Company</a>.</strong> All
        rights reserved.
    </footer>

    <aside class="control-sidebar control-sidebar-dark">

        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="https://adminlte.io/themes/AdminLTE/starter.html#control-sidebar-home-tab"
                                  data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="https://adminlte.io/themes/AdminLTE/starter.html#control-sidebar-settings-tab"
                   data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="pull-right-container">
<span class="label label-danger pull-right">70%</span>
</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>


            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>


            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked="">
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div>

                </form>
            </div>

        </div>
    </aside>


    <div class="control-sidebar-bg"></div>
</div>


<script src="{{ asset('AdminLTE/jquery.min.js') }}"></script>

<script src="{{ asset('AdminLTE/bootstrap.min.js') }}"></script>

<script src="{{ asset('AdminLTE/adminlte.min.js') }}"></script>


</body>
</html>
