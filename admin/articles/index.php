<html lang="en" style="height: auto;">
<head>
    <?php


    if (!isset($_COOKIE['admin'])) {
        header("Location: http://localhost:9000/admin/login/index.php");
        die();
    }

    include 'function.php';
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="../dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="../dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
    <script defer="" referrerpolicy="origin"
            src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwRGFzaGJvYXJkJTIyJTJDJTIyeCUyMiUzQTAuNDM0MTE0NDEyNzM1MzI5NiUyQyUyMnclMjIlM0ExOTIwJTJDJTIyaCUyMiUzQTEwODAlMkMlMjJqJTIyJTNBOTgwJTJDJTIyZSUyMiUzQTE5MjAlMkMlMjJsJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZhZG1pbmx0ZS5pbyUyRnRoZW1lcyUyRnYzJTJGaW5kZXguaHRtbCUyMiUyQyUyMnIlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmFkbWlubHRlLmlvJTJGdGhlbWVzJTJGdjMlMkZwYWdlcyUyRm1haWxib3glMkZjb21wb3NlLmh0bWwlMjIlMkMlMjJrJTIyJTNBMjQlMkMlMjJuJTIyJTNBJTIyVVRGLTglMjIlMkMlMjJvJTIyJTNBLTE4MCUyQyUyMnElMjIlM0ElNUIlNUQlN0Q="></script>
    <script nonce="b566df61-f7c8-4bac-8ad9-e64e3d9317eb">(function (w, d) {
            !function (dk, dl, dm, dn) {
                dk[dm] = dk[dm] || {};
                dk[dm].executed = [];
                dk.zaraz = {deferred: [], listeners: []};
                dk.zaraz.q = [];
                dk.zaraz._f = function (dp) {
                    return function () {
                        var dq = Array.prototype.slice.call(arguments);
                        dk.zaraz.q.push({m: dp, a: dq})
                    }
                };
                for (const dr of ["track", "set", "debug"]) dk.zaraz[dr] = dk.zaraz._f(dr);
                dk.zaraz.init = () => {
                    var ds = dl.getElementsByTagName(dn)[0], dt = dl.createElement(dn),
                        du = dl.getElementsByTagName("title")[0];
                    du && (dk[dm].t = dl.getElementsByTagName("title")[0].text);
                    dk[dm].x = Math.random();
                    dk[dm].w = dk.screen.width;
                    dk[dm].h = dk.screen.height;
                    dk[dm].j = dk.innerHeight;
                    dk[dm].e = dk.innerWidth;
                    dk[dm].l = dk.location.href;
                    dk[dm].r = dl.referrer;
                    dk[dm].k = dk.screen.colorDepth;
                    dk[dm].n = dl.characterSet;
                    dk[dm].o = (new Date).getTimezoneOffset();
                    if (dk.dataLayer) for (const dy of Object.entries(Object.entries(dataLayer).reduce(((dz, dA) => ({...dz[1], ...dA[1]}))))) zaraz.set(dy[0], dy[1], {scope: "page"});
                    dk[dm].q = [];
                    for (; dk.zaraz.q.length;) {
                        const dB = dk.zaraz.q.shift();
                        dk[dm].q.push(dB)
                    }
                    dt.defer = !0;
                    for (const dC of [localStorage, sessionStorage]) Object.keys(dC || {}).filter((dE => dE.startsWith("_zaraz_"))).forEach((dD => {
                        try {
                            dk[dm]["z_" + dD.slice(7)] = JSON.parse(dC.getItem(dD))
                        } catch {
                            dk[dm]["z_" + dD.slice(7)] = dC.getItem(dD)
                        }
                    }));
                    dt.referrerPolicy = "origin";
                    dt.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(dk[dm])));
                    ds.parentNode.insertBefore(dt, ds)
                };
                ["complete", "interactive"].includes(dl.readyState) ? zaraz.init() : dk.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);</script>
    <style type="text/css">/* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }
            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor, .chartjs-size-monitor-expand, .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand > div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink > div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }</style>
</head>
<body class="sidebar-mini " style="height: auto;">
<div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center" style="height: 0px;">
        <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"
             style="display: none;">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

    </nav>


    <aside class="main-sidebar sidebar-dark-primary ">

        <a href="/index.php" class="brand-link">

        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Dragon board</span>
        </a>

        <div
            class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
            <div class="os-resize-observer-host observed">
                <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
            </div>
            <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                <div class="os-resize-observer"></div>
            </div>
            <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 835px;"></div>
            <div class="os-padding">
                <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
                    <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">


                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" role="menu"
                                data-accordion="false">

                                <li class="nav-item">
                                    <a href="../index.php" class="nav-link">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            Home
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../category/index.php" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            Category
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link">
                                        <i class="nav-icon fas fa-edit"></i>
                                        <p>
                                            Articles
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../other/index.php" class="nav-link">
                                        <i class="nav-icon far fa-plus-square"></i>
                                        <p>
                                            Other
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
            <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                <div class="os-scrollbar-track">
                    <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
                </div>
            </div>
            <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
                <div class="os-scrollbar-track">
                    <div class="os-scrollbar-handle" style="height: 38.2609%; transform: translate(0px, 0px);"></div>
                </div>
            </div>
            <div class="os-scrollbar-corner"></div>
        </div>

    </aside>

    <div class="content-wrapper" style="min-height: 779px;">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>

                    </div>
                </div>
            </div>
            <?php if (isset($_COOKIE['success'])) {
                ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Успіх!</h5>
                    <?= $_COOKIE['success'] ?>
                </div>
            <?php } elseif (isset($_COOKIE['danger'])) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Помилка!</h5>
                </div>
            <?php } ?>

        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-2 ">
                                    <a href="add.php" type="button" class="btn btn-block btn-success ">+ Add articles</a>
                                </div>
                            </div>

                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1"
                                                   class="table table-bordered table-striped dataTable dtr-inline"
                                                   aria-describedby="example1_info">
                                                <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="example1" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Rendering engine: activate to sort column descending">
                                                       #id
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Browser: activate to sort column ascending">Title
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Platform(s): activate to sort column ascending">
                                                        Preview
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Engine version: activate to sort column ascending"
                                                        style="">Likes
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="CSS grade: activate to sort column ascending"
                                                        style="">Category
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="CSS grade: activate to sort column ascending"
                                                        style="">Created_at
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="CSS grade: activate to sort column ascending"
                                                        style="">Update
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="CSS grade: activate to sort column ascending"
                                                        style="">Delete
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                foreach ( articles($connect) as $article){ ?>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0"><?= $article[0] ?></td>
                                                    <td class="dtr-control sorting_1" tabindex="0"><?= $article[1] ?></td>
                                                    <td><?= $article[2] ?></td>
                                                    <td><?= $article[6] ?></td>
                                                    <td style=""><?= $article['category'] ?></td>
                                                    <td style=""><?= $article[8] ?></td>
                                                    <td style=""><a href="update.php?id_articles=<?= $article[0] ?>" class="btn btn-block btn-primary">Update</a></td>
                                                    <td style=""><a href="delete.php?id_articles=<?= $article[0] ?>" class="btn btn-block btn-danger">Delete</a></td>
                                                </tr>
                                                <?php }?>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">#id</th>
                                                    <th rowspan="1" colspan="1">Title</th>
                                                    <th rowspan="1" colspan="1">Preview</th>
                                                    <th rowspan="1" colspan="1" style="">Likes</th>
                                                    <th rowspan="1" colspan="1" style="">Category</th>
                                                    <th rowspan="1" colspan="1" style="">Created_at</th>
                                                    <th rowspan="1" colspan="1" style="">Update</th>
                                                    <th rowspan="1" colspan="1" style="">Delete</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
        </section>

    </div>

    <footer class="main-footer">
        <strong>Copyright © 2022-2023 <a href="https://DragonBoard.io">DragonBoard.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
        </div>
    </footer>

    <aside class="control-sidebar control-sidebar-dark" style="display: none; top: 57px; height: 836px;">

        <div
            class="p-3 control-sidebar-content os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition"
            style="height: 836px;">
            <div class="os-resize-observer-host observed">
                <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
            </div>
            <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                <div class="os-resize-observer"></div>
            </div>
            <div class="os-content-glue" style="margin: -16px; width: 0px; height: 0px;"></div>
            <div class="os-padding">
                <div class="os-viewport os-viewport-native-scrollbars-invisible">
                    <div class="os-content" style="padding: 16px; height: 100%; width: 100%;"><h5>Customize
                            AdminLTE</h5>
                        <hr class="mb-2">
                        <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span></div>
                        <h6>Header Options</h6>
                        <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div>
                        <div class="mb-1"><input type="checkbox" value="1"
                                                 class="mr-1"><span>Dropdown Legacy Offset</span></div>
                        <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No border</span></div>
                        <h6>Sidebar Options</h6>
                        <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Collapsed</span></div>
                        <div class="mb-1"><input type="checkbox" value="1" checked="checked"
                                                 class="mr-1"><span>Fixed</span></div>
                        <div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Sidebar Mini</span>
                        </div>
                        <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini MD</span>
                        </div>
                        <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini XS</span>
                        </div>
                        <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat Style</span>
                        </div>
                        <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Legacy Style</span>
                        </div>
                        <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Compact</span></div>
                        <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Indent</span>
                        </div>
                        <div class="mb-1"><input type="checkbox" value="1"
                                                 class="mr-1"><span>Nav Child Hide on Collapse</span></div>
                        <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable Hover/Focus Auto-Expand</span>
                        </div>
                        <h6>Footer Options</h6>
                        <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div>
                        <h6>Small Text Options</h6>
                        <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body</span></div>
                        <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar</span></div>
                        <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Brand</span></div>
                        <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Nav</span></div>
                        <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Footer</span></div>
                        <h6>Navbar Variants</h6>
                        <div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-white">
                                <option class="bg-primary">Primary</option>
                                <option class="bg-secondary">Secondary</option>
                                <option class="bg-info">Info</option>
                                <option class="bg-success">Success</option>
                                <option class="bg-danger">Danger</option>
                                <option class="bg-indigo">Indigo</option>
                                <option class="bg-purple">Purple</option>
                                <option class="bg-pink">Pink</option>
                                <option class="bg-navy">Navy</option>
                                <option class="bg-lightblue">Lightblue</option>
                                <option class="bg-teal">Teal</option>
                                <option class="bg-cyan">Cyan</option>
                                <option class="bg-dark">Dark</option>
                                <option class="bg-gray-dark">Gray dark</option>
                                <option class="bg-gray">Gray</option>
                                <option class="bg-light">Light</option>
                                <option class="bg-warning">Warning</option>
                                <option class="bg-white">White</option>
                                <option class="bg-orange">Orange</option>
                            </select></div>
                        <h6>Accent Color Variants</h6>
                        <div class="d-flex"></div>
                        <select class="custom-select mb-3 border-0">
                            <option>None Selected</option>
                            <option class="bg-primary">Primary</option>
                            <option class="bg-warning">Warning</option>
                            <option class="bg-info">Info</option>
                            <option class="bg-danger">Danger</option>
                            <option class="bg-success">Success</option>
                            <option class="bg-indigo">Indigo</option>
                            <option class="bg-lightblue">Lightblue</option>
                            <option class="bg-navy">Navy</option>
                            <option class="bg-purple">Purple</option>
                            <option class="bg-fuchsia">Fuchsia</option>
                            <option class="bg-pink">Pink</option>
                            <option class="bg-maroon">Maroon</option>
                            <option class="bg-orange">Orange</option>
                            <option class="bg-lime">Lime</option>
                            <option class="bg-teal">Teal</option>
                            <option class="bg-olive">Olive</option>
                        </select><h6>Dark Sidebar Variants</h6>
                        <div class="d-flex"></div>
                        <select class="custom-select mb-3 text-light border-0 bg-primary">
                            <option>None Selected</option>
                            <option class="bg-primary">Primary</option>
                            <option class="bg-warning">Warning</option>
                            <option class="bg-info">Info</option>
                            <option class="bg-danger">Danger</option>
                            <option class="bg-success">Success</option>
                            <option class="bg-indigo">Indigo</option>
                            <option class="bg-lightblue">Lightblue</option>
                            <option class="bg-navy">Navy</option>
                            <option class="bg-purple">Purple</option>
                            <option class="bg-fuchsia">Fuchsia</option>
                            <option class="bg-pink">Pink</option>
                            <option class="bg-maroon">Maroon</option>
                            <option class="bg-orange">Orange</option>
                            <option class="bg-lime">Lime</option>
                            <option class="bg-teal">Teal</option>
                            <option class="bg-olive">Olive</option>
                        </select><h6>Light Sidebar Variants</h6>
                        <div class="d-flex"></div>
                        <select class="custom-select mb-3 border-0">
                            <option>None Selected</option>
                            <option class="bg-primary">Primary</option>
                            <option class="bg-warning">Warning</option>
                            <option class="bg-info">Info</option>
                            <option class="bg-danger">Danger</option>
                            <option class="bg-success">Success</option>
                            <option class="bg-indigo">Indigo</option>
                            <option class="bg-lightblue">Lightblue</option>
                            <option class="bg-navy">Navy</option>
                            <option class="bg-purple">Purple</option>
                            <option class="bg-fuchsia">Fuchsia</option>
                            <option class="bg-pink">Pink</option>
                            <option class="bg-maroon">Maroon</option>
                            <option class="bg-orange">Orange</option>
                            <option class="bg-lime">Lime</option>
                            <option class="bg-teal">Teal</option>
                            <option class="bg-olive">Olive</option>
                        </select><h6>Brand Logo Variants</h6>
                        <div class="d-flex"></div>
                        <select class="custom-select mb-3 border-0">
                            <option>None Selected</option>
                            <option class="bg-primary">Primary</option>
                            <option class="bg-secondary">Secondary</option>
                            <option class="bg-info">Info</option>
                            <option class="bg-success">Success</option>
                            <option class="bg-danger">Danger</option>
                            <option class="bg-indigo">Indigo</option>
                            <option class="bg-purple">Purple</option>
                            <option class="bg-pink">Pink</option>
                            <option class="bg-navy">Navy</option>
                            <option class="bg-lightblue">Lightblue</option>
                            <option class="bg-teal">Teal</option>
                            <option class="bg-cyan">Cyan</option>
                            <option class="bg-dark">Dark</option>
                            <option class="bg-gray-dark">Gray dark</option>
                            <option class="bg-gray">Gray</option>
                            <option class="bg-light">Light</option>
                            <option class="bg-warning">Warning</option>
                            <option class="bg-white">White</option>
                            <option class="bg-orange">Orange</option>
                            <a href="#">clear</a></select></div>
                </div>
            </div>
            <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                <div class="os-scrollbar-track">
                    <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                </div>
            </div>
            <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden">
                <div class="os-scrollbar-track">
                    <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                </div>
            </div>
            <div class="os-scrollbar-corner"></div>
        </div>
    </aside>

    <div id="sidebar-overlay"></div>
</div>


<script src="../plugins/jquery/jquery.min.js"></script>

<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../plugins/datatables/jquery.dataT ables.min.js"></script>
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../dist/js/adminlte.js"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>
</html>