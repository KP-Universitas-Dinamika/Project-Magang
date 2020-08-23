<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pro Line - Bootstrap v4.1.3 Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" />
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate-style.css" />
    <!--
Tooplate 2111 Pro Line
http://www.tooplate.com/view/2111-pro-line
-->

    <style type="">
        .margin{
      margin: 0px 10px 10px 10px;
  }
  .margin2{
      margin: 1px 10px 0px 10px;
  }
  .btbh{
      margin-left: 40px;
      margin-bottom: 5px;
  }
</style>
</head>

<body>
    <!-- page header -->
    <div class="container" id="home">
        <div class="col-12 text-center">
            <div class="tm-page-header">
                <!-- <i class="fas fa-4x fa-chart-bar mr-4"></i> -->
                <h1 class="d-inline-block text-uppercase">Eselon 4</h1>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <div class="tm-nav-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav"
                            aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="tmMainNav">
                            <ul class="navbar-nav mx-auto tm-navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#beritugas">Beri Tugas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#Todo">To Do</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#Progres">Progres</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#Selesai">Selesai</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#Revisi">Revisi</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Banner -->
    <section class="tm-banner-section" id="tmVideoSection">
        <div class="container tm-banner-text-container">
            <div class="row">
                <div class="col-12">
                    <header>
                        <h2 class="tm-banner-title">Pro Line Video</h2>
                        <p class="mx-auto tm-banner-subtitle">
                            The video background has a parallax effect. This is fluid and
                            full-width.
                        </p>
                    </header>
                </div>
            </div>
        </div>

        <!-- Video -->
        <video id="hero-vid" autoplay="" loop="" muted>
            <source src="videos/city-night-blur-01.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
    </section>

    <!-- beritugas -->
    <div class="container">

    
        <div class="" id="beritugas">

            <header class="tm-feature-header">
                <!-- <i class="fas fa-5x fa-anchor tm-feature-icon"></i> -->
                <!-- <h3 class="tm-feature-h" align="center">Cras pretium diam ut metus</h3> -->
                <div class="row">
                    <div class="col-sm-12">
                        <center>
                            <h1>Beri Tugas</h1>
                        </center>
                    </div>
                </div>
        </div>

        </header>
        <div class="btbh">
            <a href="TambahProyekE4.php"><button type="button" class="btn btn-info">Beri Tugas</button></a>



        </div>
        <div class="container-fluid">
            <div class="margin">
                <div class="col-sm-12">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark" align="center">
                            <tr>
                                <th>Kode</th>

                                <th>Judul</th>



                                <th>Note</th>
                                <th>Kategori</th>
                                <th>Date</th>

                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody align="center">


                            <tr>
                                <td>Kode</td>
                                <!-- <td>Tugas</td> -->
                                <!-- <td>To do</td> -->
                                <td>Tugas</td>
                                <td>ashdaksh</td>
                                <td></td>
                                <td>date</td>




                                <td>

                                    <a href="Ubah-barang.php?id=----belum---"><button type="button"
                                            class=" btn btn-success">Edit</button></a>
                                    <a href="Ubah-barang.php?id=----belum---"><button type="button"
                                            class=" btn btn-danger">Delete</button></a>


                                </td>

                                <!-- <td><a href="Ubah-barang.php?id=----belum---"><button type="button"
                                        class=" btn btn-success"><img src="centang.png" alt="" width="25"
                                            height="25"></button></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="hapus.php?id=&status=Barang1"><button type="submit"
                                        class=" btn btn-danger" onclick="Hapus()"><img src="silang.png" alt="" width="25"
                                            height="25"></button></a> -->

                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="Todo">
            <div class="\">
                <br>
                <header class="tm-feature-header">
                    <!-- <i class="fas fa-5x fa-anchor tm-feature-icon"></i> -->
                    <!-- <h3 class="tm-feature-h" align="center">Cras pretium diam ut metus</h3> -->
                    <div class="row">
                        <div class="col-sm-12">
                            <center>
                                <h1>To Do</h1>
                            </center>
                        </div>
                    </div>
            </div>

            </header>
            <div class="container-fluid">
                <div class="margin">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark" align="center">
                                <tr>
                                    <th>Kode</th>

                                    <th>Judul</th>



                                    <th>Note</th>
                                    <th>Kategori</th>
                                    <th>Date</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody align="center">


                                <tr>
                                    <td>Kode</td>

                                    <td>Tugas</td>
                                    <td>ashdaksh</td>
                                    <td></td>
                                    <td>date</td>


                                    <td>
                                        <a href="ambiltugasE4.php"><button type="button" class="btn btn-info"
                                                data-toggle="modal" data-target=".modalPalingBesar">Ambil</button></a>



                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="Progres">
            <div class="\">
                <br>
                <header class="tm-feature-header">
                    <!-- <i class="fas fa-5x fa-anchor tm-feature-icon"></i> -->
                    <!-- <h3 class="tm-feature-h" align="center">Cras pretium diam ut metus</h3> -->
                    <div class="row">
                        <div class="col-sm-12">
                            <center>
                                <h1>Progres</h1>
                            </center>
                        </div>
                    </div>
            </div>

            </header>
            <div class="container-fluid">
                <div class="margin">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark" align="center">
                                <tr>
                                    <th>Kode</th>

                                    <th>Judul</th>



                                    <th>Note</th>
                                    <th>Kategori</th>
                                    <th>Date</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody align="center">


                                <tr>
                                    <td>Kode</td>

                                    <td>Tugas</td>
                                    <td>ashdaksh</td>
                                    <td></td>
                                    <td>date</td>
                                    <td><a href="Ubah-barang.php?id=----belum---"><button type="button"
                                                class=" btn btn-success">Selesai</button></a>

                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="Selesai">
            <div class="\">
                <br>
                <header class="tm-feature-header">
                    <!-- <i class="fas fa-5x fa-anchor tm-feature-icon"></i> -->
                    <!-- <h3 class="tm-feature-h" align="center">Cras pretium diam ut metus</h3> -->
                    <div class="row">
                        <div class="col-sm-12">
                            <center>
                                <h1>Selesai</h1>
                            </center>
                        </div>
                    </div>
            </div>

            </header>
            <div class="container">
                <div class="margin">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark" align="center">
                                <tr>
                                    <th>Kode</th>
                                    <th>Judul</th>
                                    <th>Note</th>
                                    <th>Kategori</th>
                                    <th>Date</th>
                                    <th>Upload</th>
                                    <th>Aksi</th>
                                    <!-- <th>Harga Beli</th>
                <th>Ubah</th> -->
                                </tr>
                            </thead>
                            <tbody align="center">


                                <tr>
                                    <td>Kode</td>
                                    <!-- <td>Tugas</td> -->
                                    <!-- <td>To do</td> -->
                                    <td style="width:500px;" >Proyek Pembuatan aplikasi berbasis web untuk mahasiswa universitas dinamika</td>
                                    <td style="width:800px;" >aLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </td>
                                    <td style="width:150px" >staff coding</td>
                                    <td  >2020-02-03</td>

                                    <td width="100px" >
                                    <form action="aksi.php" method="post" enctype="multipart/form-data" >
                                    <input type="file" name="name" style="width:100px;font-size:7pt;"  >

                                        </form>
                                        <br>
                                        <!-- <form action="aksi.php" method="post" enctype="multipart/form-data">
                                            <input type="file" name="file">

                                        </form> -->
                                    </td>


                                    <td><a href="Ubah-barang.php?id=----belum---"><button type="button"
                                                class=" btn btn-success">Submit</button></a>
                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td>Kode</td>
                                    <!-- <td>Tugas</td> -->
                                    <!-- <td>To do</td> -->
                                    <td style="width:200px;" >Proyek Pembuatan aplikasi berbasis web untuk mahasiswa universitas dinamika</td>
                                    <td style="width:300px" >aLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </td>
                                    <td style="width:150px" >staff coding</td>
                                    <td  >2020-02-03</td>

                                    <td width="100px" >
                                    <form action="aksi.php" method="post" enctype="multipart/form-data" >
                                    <input type="file" name="name" style="width:100px;font-size:7pt;"  >

                                        </form>
                                        <br>
                                        <!-- <form action="aksi.php" method="post" enctype="multipart/form-data">
                                            <input type="file" name="file">

                                        </form> -->
                                    </td>


                                    <td><a href="Ubah-barang.php?id=----belum---"><button type="button"
                                                class=" btn btn-success">Submit</button></a>
                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kode</td>
                                    <!-- <td>Tugas</td> -->
                                    <!-- <td>To do</td> -->
                                    <td style="width:200px;" >Proyek Pembuatan aplikasi berbasis web untuk mahasiswa universitas dinamika</td>
                                    <td style="width:300px" >aLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </td>
                                    <td style="width:150px" >staff coding</td>
                                    <td  >2020-02-03</td>

                                    <td width="100px" >
                                    <form action="aksi.php" method="post" enctype="multipart/form-data" >
                                    <input type="file" name="name" style="width:100px;font-size:7pt;"  >

                                        </form>
                                        <br>
                                        <!-- <form action="aksi.php" method="post" enctype="multipart/form-data">
                                            <input type="file" name="file">

                                        </form> -->
                                    </td>


                                    <td><a href="Ubah-barang.php?id=----belum---"><button type="button"
                                                class=" btn btn-success">Submit</button></a>
                                    
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="Revisi">
            <div class="\">
                <br>
                <header class="tm-feature-header">
                    <!-- <i class="fas fa-5x fa-anchor tm-feature-icon"></i> -->
                    <!-- <h3 class="tm-feature-h" align="center">Cras pretium diam ut metus</h3> -->
                    <div class="row">
                        <div class="col-sm-12">
                            <center>
                                <h1>Revisi</h1>
                            </center>
                        </div>
                    </div>
            </div>

            </header>
            <div class="container-fluid">
                <div class="margin">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark" align="center">
                                <tr>
                                    <th>Kode</th>

                                    <th>Judul</th>



                                    <th>Note</th>
                                    <th>Kategori</th>
                                    <th>Date</th>
                                    <th>Aksi</th>
                                    <!-- <th>Harga Beli</th>
                        <th>Ubah</th> -->
                                </tr>
                            </thead>
                            <tbody align="center">


                                <tr>
                                    <td>Kode</td>
                                    <!-- <td>Tugas</td> -->
                                    <!-- <td>To do</td> -->
                                    <td>Tugas</td>
                                    <td>ashdaksh</td>
                                    <td></td>
                                    <td>date</td>
                                    <td><a href=""><button type="button" class=" btn btn-info">Download
                                                File</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href=""><button type="button"
                                                class=" btn btn-danger">Revisi</button></a>&nbsp;&nbsp;&nbsp;&nbsp;

                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>






    







    <section class="container tm-company-section" id="company">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12 tm-company-left">
                <div class="tm-company-about">
                    <div class="tm-company-img-container">
                        <img src="img/img-05.jpg" alt="Image" />
                    </div>
                    <div class="tm-company-about-text">
                        <header>
                            <h2 class="tm-company-about-header">Our Company</h2>
                        </header>
                        <p>
                            Phasellus fringilla convallis libero non aliquam. Morbi justo
                            lorem, varius ultricies pulvinar ac, aliquet quis ipsum.
                        </p>
                        <p class="mb-4">
                            Suspendisse aliquam pulvinar odio sed rhoncus. Cras pretium diam
                            ut metus tristique, a ultricies sapien euismod. Duis dui diam,
                            maximus ac ligula a, accumsan cursus ante.
                        </p>
                        <a href="#" class="btn tm-btn tm-float-right">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-4 col-md-12 tm-company-right  ml-lg-auto mr-lg-0">
                <div class="tm-company-right-inner">
                    <ul class="nav nav-tabs" id="tmCompanyTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link-border-right active" id="vision-tab" data-toggle="tab"
                                href="#vision" role="tab" aria-controls="vision" aria-selected="true">Vision</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-no-border-right" id="mission-tab" data-toggle="tab" href="#mission"
                                role="tab" aria-controls="mission" aria-selected="false">Mission</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="tmTabContent">
                        <div class="tab-pane fade show active" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                            <p>
                                Phasellus suscipit sapien magna, vel dictum lorem fringilla.
                            </p>
                            <p>
                                Class aptent taciti sociosqu ad litora torquent per conubia
                                nostra.
                            </p>
                            <p>
                                Nulla ornare ligula nibh, sit amet tristique magna efficitur
                                eu.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                            <p>
                                Class aptent taciti sociosqu ad litora torquent per conubia
                                nostra.
                            </p>
                            <p>
                                Nulla ornare ligula nibh, sit amet tristique magna efficitur
                                eu.
                            </p>
                            <p>
                                Phasellus suscipit sapien magna, vel dictum lorem fringilla.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section class="container tm-contact-section" id="contact">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-12 tm-contact-left">
                <div class="tm-contact-form-container ml-auto mr-0">
                    <header>
                        <h2 class="tm-contact-header">Contact Us</h2>
                    </header>
                    <form action="index.html" class="tm-contact-form" method="POST">
                        <div class="form-group">
                            <input type="text" id="contact_name" name="contact_name" class="form-control"
                                placeholder="Name" required />
                        </div>
                        <div class="form-group">
                            <input type="email" id="contact_email" name="contact_email" class="form-control"
                                placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <textarea rows="5" id="contact_message" name="contact_message" class="form-control"
                                placeholder="Message" required></textarea>
                        </div>
                        <div class="tm-text-right">
                            <button type="submit" class="btn tm-btn tm-btn-big">
                                Send It
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12 tm-contact-right">
                <div class="tm-contact-figure-block">
                    <figure class="d-inline-block">
                        <img src="img/img-06.jpg" alt="Image" class="img-fluid" />
                        <figcaption class="tm-contact-figcaption">
                            Nulla arcu tortor, mattis in diam eget, hendrerit vulputate
                            ligula. Nam non purus consequat, dictum lectus lobortis, laoreet
                            nibh. Cras vitae facilisis felis. Phasellus tristique.
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <footer class="container tm-footer">
        <div class="row tm-footer-row">
            <p class="col-md-10 col-sm-12 mb-0">
                Copyright &copy; 2018 Company Name - Design:
                <a rel="nofollow" href="https://www.facebook.com/tooplate" class="tm-footer-link">Tooplate</a>
            </p>
            <div class="col-md-2 col-sm-12 scrolltop">
                <div class="scroll icon"><i class="fa fa-4x fa-angle-up"></i></div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-1.9.1.min.js"></script>
    <!-- Single Page Nav plugin works with this version of jQuery -->
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    /**
     * detect IE
     * returns version of IE or false, if browser is not Internet Explorer
     */
    function detectIE() {
        var ua = window.navigator.userAgent;

        var msie = ua.indexOf("MSIE ");
        if (msie > 0) {
            // IE 10 or older => return version number
            return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
        }

        var trident = ua.indexOf("Trident/");
        if (trident > 0) {
            // IE 11 => return version number
            var rv = ua.indexOf("rv:");
            return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
        }

        // var edge = ua.indexOf('Edge/');
        // if (edge > 0) {
        //     // Edge (IE 12+) => return version number
        //     return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
        // }

        // other browser
        return false;
    }

    function setVideoHeight() {
        const videoRatio = 1920 / 1080;
        const minVideoWidth = 400 * videoRatio;
        let secWidth = 0,
            secHeight = 0;

        secWidth = videoSec.width();
        secHeight = videoSec.height();

        secHeight = secWidth / 2.13;

        if (secHeight > 600) {
            secHeight = 600;
        } else if (secHeight < 400) {
            secHeight = 400;
        }

        if (secWidth > minVideoWidth) {
            $("video").width(secWidth);
        } else {
            $("video").width(minVideoWidth);
        }

        videoSec.height(secHeight);
    }

    // Parallax function
    // https://codepen.io/roborich/pen/wpAsm
    var background_image_parallax = function($object, multiplier) {
        multiplier = typeof multiplier !== "undefined" ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({
            "background-attatchment": "fixed"
        });
        $(window).scroll(function() {
            var from_top = $doc.scrollTop(),
                bg_css = "center " + multiplier * from_top + "px";
            $object.css({
                "background-position": bg_css
            });
        });
    };

    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $(".scrolltop:hidden")
                .stop(true, true)
                .fadeIn();
        } else {
            $(".scrolltop")
                .stop(true, true)
                .fadeOut();
        }

        // Make sticky header
        if ($(this).scrollTop() > 158) {
            $(".tm-nav-section").addClass("sticky");
        } else {
            $(".tm-nav-section").removeClass("sticky");
        }
    });

    let videoSec;

    $(function() {
        if (detectIE()) {
            alert(
                "Please use the latest version of Edge, Chrome, or Firefox for best browsing experience."
            );
        }

        const mainNav = $("#tmMainNav");
        mainNav.singlePageNav({
            filter: ":not(.external)",
            offset: $(".tm-nav-section").outerHeight(),
            updateHash: true,
            beforeStart: function() {
                mainNav.removeClass("show");
            }
        });

        videoSec = $("#tmVideoSection");

        // Adjust height of video when window is resized
        $(window).resize(function() {
            setVideoHeight();
        });

        setVideoHeight();

        $(window).on("load scroll resize", function() {
            var scrolled = $(this).scrollTop();
            var vidHeight = $("#hero-vid").height();
            var offset = vidHeight * 0.6;
            var scrollSpeed = 0.25;
            var windowWidth = window.innerWidth;

            if (windowWidth < 768) {
                scrollSpeed = 0.1;
                offset = vidHeight * 0.5;
            }

            $("#hero-vid").css(
                "transform",
                "translate3d(-50%, " + -(offset + scrolled * scrollSpeed) + "px, 0)"
            ); // parallax (25% scroll rate)
        });

        // Parallax image background
        background_image_parallax($(".tm-parallax"), 0.4);

        // Back to top
        $(".scroll").click(function() {
            $("html,body").animate({
                    scrollTop: $("#home").offset().top
                },
                "1000"
            );
            return false;
        });
    });
    </script>
</body>

</html>