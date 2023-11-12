<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/uts.css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Poppins:ital,wght@0,400;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet" />

    <title>UTS - Muhammad Irfan Almizan</title>
</head>

<body>
    <!-- NAVBAR -->
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">ORNAV.CO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active" href="#dijual">Shop <span
                                class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#gallery">Gallery</a>
                        <a class="nav-item nav-link" href="#karya">Collection</a>
                        <a class="nav-item nav-link" href="#about-us">About us</a>
                        <a class="nav-item nav-link" href="#contactForm">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <!-- NAVBAR END -->

    <!-- JUMBOTRON -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row depan">
                <div class="col tulisan">
                    <h2 class="display-4">Welcome to<br />ORNAV</h2>
                    <p class="lead">
                        Pastikan Anda menjalani hari<br />dengan percaya diri karena<br /><span
                            class="font-italic">World is Unexpected</span>
                    </p>
                    <a class="btn tombol">Shop Now</a>
                </div>
                <div class="col sampul">
                    <img src="../gambar/halaman_depan.jpg" />
                </div>
            </div>
        </div>
    </div>
    <!-- JUMBOTRON END -->

    <!-- Shop -->
    <div id="dijual">
        <div class="container shop">
            <div class="text-left">
                <h3>Shop</h3>
            </div>
            <div class="row text-capitalize">
                <div class="col-md-4 text-left">
                    <div class="btn">
                        <img src="../gambar/Slide_B2.jpeg" alt="" />
                        <div class="text-left nama-harga">
                            <p>jaket sony</p>
                            <h4 class="">rp199.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="btn">
                        <img src="../gambar/Slide_C1.jpeg" alt="" />
                        <div class="text-left nama-harga">
                            <p>kaos kaki dji</p>
                            <h4>rp249.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <div class="btn">
                        <img src="../gambar/Slide_C.jpg" alt="" />
                        <div class="text-left nama-harga">
                            <p>sabuk saramonic</p>
                            <h4 class="">rp119.000</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop -->

    <!-- Gallery -->
    <div id="gallery">
        <div class="container-fluid justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="text-capitalize">we are<br />always<br />innovate</h2>
                    </div>
                    <div class="col text-center">
                        <i class="fa-solid fa-earth-americas fa-6x"> </i>
                        <h5 class="">1000</h5>
                        <p class="text-capitalize">gerai</p>
                    </div>
                    <div class="col text-center">
                        <i class="fa-solid fa-tag fa-6x"></i>
                        <h5 class="">200</h5>
                        <p class="text-capitalize">product</p>
                    </div>
                    <div class="col text-center">
                        <i class="fa-solid fa-users fa-6x"></i>
                        <h5 class="">1000+</h5>
                        <p class="text-capitalize">employee</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="gallery-slide" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#gallery-slide" data-slide-to="0" class="active"></li>
                <li data-target="#gallery-slide" data-slide-to="1"></li>
                <li data-target="#gallery-slide" data-slide-to="2"></li>
            </ul>
            <div class="container text-center galerry">
                <h3 class="text-capitalize text-center" style="padding-top: 43px">
                    gallery
                </h3>
                <div class="carousel-inner" style="margin-top: 42px">
                    <div class="carousel-item active">
                        <div class="card">
                            <img src="../gambar/Slide_A2.jpeg" alt="" />
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <img src="../gambar/Slide_A1.jpeg" alt="" />
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <img src="../gambar/Slide_A.jpeg" alt="" />
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <img src="../gambar/Slide_B.jpeg" alt="" />
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <img src="../gambar/Slide_B1.jpeg" alt="" />
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <img src="../gambar/Slide_B2.jpeg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#gallery-slide" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#gallery-slide" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- End Gallery -->

    <!-- Collection -->
    <div id="karya">
        <div class="page-section mb-0 collection" id="collection">
            <div class="container justify-content-center collection">
                <h3 class="page-section-heading text-center text-capitalize">
                    collection
                </h3>
                <div class="row text-center">
                    <div class="card-deck">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="../gambar/Gallery_1.jpg" alt="Shirts" />
                                    <div class="caption">
                                        <h4 class="text-capitalize">shirts</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Aliquam ullam dolores atque, mollitia
                                        </p>
                                    </div>
                                    <div class="btn tombol-3 text-capitalize">see more</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="../gambar/Gallery_2.jpg" alt="Blazers" />
                                    <div class="caption">
                                        <h4 class="text-capitalize">blazers</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Aliquam ullam dolores atque, mollitia
                                        </p>
                                    </div>
                                    <div class="btn tombol-3 text-capitalize">see more</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="../gambar/Gallery_3.jpg" alt="Jackets" />
                                    <div class="caption">
                                        <h4 class="text-capitalize">jackets</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Aliquam ullam dolores atque, mollitia
                                        </p>
                                    </div>
                                    <div class="btn tombol-3 text-capitalize">see more</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="../gambar/Gallery_4.jpg" alt="Parfumes" />
                                    <div class="caption">
                                        <h4 class="text-capitalize">parfumes</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Aliquam ullam dolores atque, mollitia
                                        </p>
                                    </div>
                                    <div class="btn tombol-3 text-capitalize">see more</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Collection -->

    <!-- About Us -->
    <div id="about-us">
        <div class="container about-ornav">
            <div class="row about-us">
                <div class="col">
                    <h1>OR<br />NAV</h1>
                </div>
                <div class="col">
                    <h3>About Us</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                        nec eros tempus massa convallis ullamcorper. Ut at porta neque.
                        Donec malesuada nunc mi. Morbi eget facilisis neque. Sed
                        pellentesque, odio at bibendum fringilla, turpis velit placerat
                        lorem, sed vestibulum ante magna eget nisi. Ut interdum aliquam
                        est eget interdum. Nulla consectetur tristique velit eget congue.
                        Quisque et pellentesque tellus.
                    </p>
                    <a href="" class="btn tombol-2">View More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Us -->

    <!-- Contact -->
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="row align-items-stretch mb-5 contact">
            <div class="col-md-6">
                <img src="../gambar/Gambar_Contact.jpg" alt="" />
            </div>
            <div class="col-md-6">
                <h3 class="text-center">Contact</h3>
                <div class="form-group">
                    <!-- Name input-->
                    <label for="text">Full name</label>
                    <input class="form-control" id="name" type="text" placeholder="Your Name *"
                        data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="name:required">
                        A name is required.
                    </div>
                </div>
                <div class="form-group">
                    <!-- Email address input-->
                    <label for="email">Email</label>
                    <input class="form-control" id="email" type="email" placeholder="Your Email *"
                        data-sb-validations="required,email" />
                    <div class="invalid-feedback" data-sb-feedback="email:required">
                        An email is required.
                    </div>
                    <div class="invalid-feedback" data-sb-feedback="email:email">
                        Email is not valid.
                    </div>
                </div>
                <div class="form-group mb-md-0">
                    <!-- Phone number input-->
                    <label for="tel">Phone number</label>
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                        data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="phone:required">
                        A phone number is required.
                    </div>
                    <div class="form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">
                            A message is required.
                        </div>
                    </div>
                </div>
                <!-- Submit Button-->
                <div class="text-center">
                    <div class="btn tombol" class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton"
                        type="submit">
                        Submit
                    </div>
                </div>
                <div class="text-center">
                    <p class="text-center">
                        Copyright 2023, Ornav.co. All Right Reserved
                    </p>
                </div>
            </div>
        </div>
        <!-- Submit success message-->
        <!---->
        <!-- This is what your users will see when the form-->
        <!-- has successfully submitted-->
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center text-white mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                To activate this form, sign up at
                <br />
                <a href="https://instagram.com/irfan.almizan">Irfan Almizan</a>
            </div>
        </div>
        <!-- Submit error message-->
        <!---->
        <!-- This is what your users will see when there is-->
        <!-- an error submitting the form-->
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
    </form>
    <!-- End Contact -->
</body>

<!-- Swiper JS -->
<!-- test-->
<script src="js/swiper-bundle.min.js"></script>
<!-- JavaScript -->
<script src="../js/uts.js"></script>

<div class="container text-center">
    <h1>Link halaman lain</h1>
    <nav class="tugas">
        <a href="{{ url('/testing1') }}">| Tugas 1a </a>
        <a href="{{ url('/media') }}">| Tugas 1b </a>
        <a href="{{ url('/jenis-teks') }}">| Tugas 1c </a>
        <a href="{{ url('/linktree') }}">| Tugas 2 </a>
        <a href="{{ url('/company-name') }}">| Tugas 3 </a>
        <a href="{{ url('/bootstrap') }}">| Tugas 4 </a>
        <a href="{{ url('/peringatan') }}">| Tugas 5 </a>
        <a href="{{ url('/kalkulator') }}">| Tugas 6 |</a>
        <a href="{{ url('/contact-form') }}">| Tugas 7 </a>
    </nav>
</div>

</html>
