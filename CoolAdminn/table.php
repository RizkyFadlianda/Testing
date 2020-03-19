<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Charts</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <style type="text/css">
        .form-style-1 {
            margin: 10px auto;
            max-width: 400px;
            padding: 20px 12px 10px 20px;
            font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        }

        .form-style-1 li {
            padding: 0;
            display: block;
            list-style: none;
            margin: 10px 0 0 0;
        }

        .form-style-1 label {
            margin: 0 0 3px 0;
            padding: 0px;
            display: block;
            font-weight: bold;
        }

        .form-style-1 input[type=text],
        .form-style-1 input[type=date],
        .form-style-1 input[type=datetime],
        .form-style-1 input[type=number],
        .form-style-1 input[type=search],
        .form-style-1 input[type=time],
        .form-style-1 input[type=url],
        .form-style-1 input[type=email],
        textarea,
        select {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            border: 1px solid #BEBEBE;
            padding: 7px;
            margin: 0px;
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            -o-transition: all 0.30s ease-in-out;
            outline: none;
        }

        .form-style-1 input[type=text]:focus,
        .form-style-1 input[type=date]:focus,
        .form-style-1 input[type=datetime]:focus,
        .form-style-1 input[type=number]:focus,
        .form-style-1 input[type=search]:focus,
        .form-style-1 input[type=time]:focus,
        .form-style-1 input[type=url]:focus,
        .form-style-1 input[type=email]:focus,
        .form-style-1 textarea:focus,
        .form-style-1 select:focus {
            -moz-box-shadow: 0 0 8px #88D5E9;
            -webkit-box-shadow: 0 0 8px #88D5E9;
            box-shadow: 0 0 8px #88D5E9;
            border: 1px solid #88D5E9;
        }

        .form-style-1 .field-divided {
            width: 49%;
        }

        .form-style-1 .field-long {
            width: 100%;
        }

        .form-style-1 .field-select {
            width: 100%;
        }

        .form-style-1 .field-textarea {
            height: 100px;
        }

        .form-style-1 input[type=submit],
        .form-style-1 input[type=button] {
            background: #4B99AD;
            padding: 8px 15px 8px 15px;
            border: none;
            color: #fff;
        }

        .form-style-1 input[type=submit]:hover,
        .form-style-1 input[type=button]:hover {
            background: #4691A4;
            box-shadow: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
        }

        .form-style-1 .required {
            color: red;
        }
    </style>
    <script type="text/javascript" src="jquery.truncatable.js"></script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">

                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>


                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="index.html">
                                <i class="fas fa-desktop"></i>Dashboard</a>

                        </li>
                        <li>
                            <a href="chart.php">
                                <i class="fas fa-heartbeat"></i>Analisa Transaksi</a>
                        </li>
                        <li class="active has-sub">
                            <a href="table.php">
                                <i class="fas fa-columns"></i>Indikator Transaksi</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="far fa-edit"></i>Rule</a>
                        </li>
                        <li>
                            <a href="calendar.php">
                                <i class="fas fa-clipboard-list"></i>Laporan Transaksi</a>
                        </li>
                        <li>
                            <a href="map.php">
                                <i class="fas fa-clipboard"></i>Laporan user</a>
                        </li>

                    </ul>
                    </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">

                            </form>
                            <div class="overview-wrap">

                                <div class="overview-wrap">
                                    <div class="overview-wrap">

                                        <div class="overview-wrap">
                                            <a href="index.html">
                                                <i class="fas fa-sign-out-alt"></i> Logout</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Input Data Gejala</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form name="form3" method="post" onSubmit="return validasi(this);" action="simpangejala.php" class="form-horizontal">
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="inputEmail4">Kode Indikator</label>
                                                    <input type="text" id="kd_gejala" name="kd_gejala" placeholder="Masukkan kode Indikator" class="form-control">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="inputEmail4">Nilai Bobot</label>
                                                    <input type="number" id="nilai_bobot" name="nilai_bobot" placeholder="Masukkan nilai bobot" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9 ">
                                                    <label for="textarea-input" class=" form-control-label">Indikator</label>
                                                    <textarea name="gejala" id="gejala" rows="9" placeholder="Definisikan Indikator..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button name="simpan" type="Submit" id="simpan" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-3 m-b-30">

                                            <script>
                                                function validasi(form) {
                                                    if (form.kd_gejala.value == "") {
                                                        alert("Masukkan kode gejala..!");
                                                        form.kd_gejala.focus();
                                                        return false;
                                                    } else if (form.gejala.value == "") {
                                                        alert("Masukkan gejala..!");
                                                        form.gejala.focus();
                                                        return false;
                                                    } else if (form.nilai_bobot.value == "") {
                                                        alert("Masukkan nilai bobot..!");
                                                        form.nilai_bobot.focus();
                                                        return false;
                                                    }
                                                    form.submit();
                                                }

                                                function konfirmasi(kd_gejala) {
                                                    var kd_hapus = kd_gejala;
                                                    var url_str;
                                                    url_str = "hpsgejala.php?kdhapus=" + kd_hapus;
                                                    var r = confirm("Yakin ingin menghapus data..?" + kd_hapus);
                                                    if (r == true) {
                                                        window.location = url_str;
                                                    } else {
                                                        //alert("no");
                                                    }
                                                }
                                            </script>


                                            <i class="zmdi zmdi-map"></i>Data Gejala
                                        </h3>
                                        <table id="table" class="table">
                                            <thead class="thead-dark">

                                                <tr>
                                                    <th scope="col">Kode Gejala</th>
                                                    <th scope="col">Gejala</th>
                                                    <th scope="col">Nilai Bobot</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Hapus</th>

                                                </tr>
                                            </thead>
                                            <?php
                                            //include "inc.connect/connect.php";
                                            //include "../librari/inc.koneksidb.php";
                                            include "koneksi.php";
                                            $sql = "SELECT * FROM gejala ORDER BY kd_gejala";
                                            $qry = mysql_query($sql, $koneksi) or die("SQL Error" . mysql_error());
                                            $no = 0;
                                            while ($data = mysql_fetch_array($qry)) {
                                                $no++;
                                            ?>
                                                <tbody>
                                                    <tr valign="baseline">

                                                        <td><?php echo $data['kd_gejala']; ?></td>
                                                        <td><?php echo $data['gejala']; ?></td>
                                                        <td><?php echo $data['nilai_bobot']; ?></td>
                                                        <td><a title="Edit Gejala" href="edgejala.php?kdubah=<?php echo $data['kd_gejala']; ?>"><i class="fas fa-edit"></i> Edit</a></td>
                                                        <td><a title="Hapus Gejala" style="cursor:pointer;" onclick="return konfirmasi('<?php echo $data['kd_gejala']; ?>');"><i class="fas fa-trash"></i> Hapus</a>
                                                        </td>
                                                    </tr>
                                                <?php
                                            } ?>
                                                </tbody>
                                        </table>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MAIN CONTENT-->
                </div>
                <!-- END PAGE CONTAINER-->

            </div>

            <!-- Jquery JS-->
            <script src="vendor/jquery-3.2.1.min.js"></script>
            <!-- Bootstrap JS-->
            <script src="vendor/bootstrap-4.1/popper.min.js"></script>
            <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
            <!-- Vendor JS       -->
            <script src="vendor/slick/slick.min.js">
            </script>
            <script src="vendor/wow/wow.min.js"></script>
            <script src="vendor/animsition/animsition.min.js"></script>
            <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
            </script>
            <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
            <script src="vendor/counter-up/jquery.counterup.min.js">
            </script>
            <script src="vendor/circle-progress/circle-progress.min.js"></script>
            <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
            <script src="vendor/chartjs/Chart.bundle.min.js"></script>
            <script src="vendor/select2/select2.min.js">
            </script>

            <!-- Main JS-->
            <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->