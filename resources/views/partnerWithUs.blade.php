<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Document</title>
    <link href="./CSS/partnerwithus_style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Font Awesome 5 CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>

    <div id="preloader">
        <div id="status">
            <div class="load">
                <hr />
                <hr />




            </div>
        </div>
    </div>
    <!--end page Loader -->

    <nav class="navbar navbar-expand-lg fixed-top sticky" style="background-color: #7ee7de;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="images/waterfresh_logo.png" alt="" height="50"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-navList">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="partnerWithUs">Partner With US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="workWithUs">Work With US</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="tel:7420140066" class="btn btn-outline-success rounded-pill text-center" type="ntn btn-primary"
            style="background-color: rgb(20, 184, 212); color: white; height: 40px;">
            <!-- Bootstrap phone icon -->
            <span style="font-family: Arial, Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><i
                class="bi bi-telephone"></i>+917420140066</span>
            </a>
                </form>
            </div>
        </div>
    </nav> <!--end container-->

    <!-- END NAVBAR -->

    <!-- START HERO -->
    <section class="bg-blog">
        <div class="row">
            <div class="col-md-12">
                <div class="position-relative">
                    <img src="images/partnerWithUs.png" alt="Image" class="img-fluid">
                    <div class="overlay">
                        <!-- Overlay content -->
                        <p style="font-size: 35px;"> </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO -->


    <!--Scheduled home pick up & drop-->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card text-center" style="width: 800px; height: 200px;">

                    <div class="card-body">
                    @if (\Session::has('success'))
                <div class="alert alert-success">
                    {!! \Session::get('success') !!}
                </div>
            @endif
            <h5 class="card-title">Schedule Home Pick Up & Drop</h5>
            <p class="card-text">
            <form action="user-details-save" method="POST">
                @csrf
              <div class="row">
                <div class="col mb-3">
                  <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="col mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="col mb-3">
                  <input type="number" name="contact" class="form-control" placeholder="Contact no.">
                </div>
              </div>
              </p>

              <input type="submit" class="btn btn-primary">
            </form>
                    </div>
                </div>
            </div>
    </section>
    <!--END-->

    <!--Our Services-->
    <section class="partnerWithUs">
        <div>

            <div class="img-fluid" style="background-image: url('images/partner_background.png');">
                <br>
                <br>
                <div class="text-center">
                    <h1 style="color:rgb(31, 120, 143);" class="fw-bold" style="font-size: 30px;">Partners With Us</h1>
                    <br>
                    <p> Some general reasons why you might consider partnering with a laundry service like WaterFresh:
                        Time-saving, Efficient, Convenient, Consistent, Reliable and Eco-Friendly Practices.
                    </p>
                </div>
                <br>
                <br>
                <div class="how-section1">
                    <div class="row">
                        <div class="col-sm col-12 order-last order-sm-0 text-center">
                            <h4>Sponsor a Collection Point</h4>
                            <p class="text-muted"> You can connect with us for the dry cleaning service provider to
                                express
                                your interest in sponsoring a collection point for our services. You can write to us or
                                connect with us over the phone.
                            </p>
                        </div>

                        <div class="col-sm col-12 how-img">
                            <img src="images/sponsorCollection.png" class="img-fluid" alt="" />
                        </div>

                    </div>
                    <br>
                    <div class="row my-3">
                        <div class="col-sm col-12 how-img">
                            <img src="images/franchiseee.png" class="img-fluid" alt="" />
                        </div>
                        <div class="col-sm col-12 text-center">
                            <h4>Buy a Franchisee</h4>
                            <p class="text-muted">
                                Franchisees benefit from the recognition and trust associated with the established
                                WaterFresh brand, making it effortless to attract and retain customers.

                                <br>Support and Training: We provide comprehensive training in laundry processes,
                                customer
                                service, and business management. Also, ongoing support is available to address
                                challenges
                                and promote success.

                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm col-12 order-last order-sm-0 text-center">
                            <h4>Become a Workshop Partner</h4>
                            <p class="text-muted"> When it comes to running an online laundry service, choosing the
                                right
                                delivery partner is essential for ensuring the smooth and efficient operation of your
                                business. Our delivery partner plays a crucial role in providing a seamless experience
                                for
                                our customers. They are responsible for picking up and delivering laundry orders on
                                time,
                                handling the clothing and textiles with care, and ensuring that the entire process is
                                convenient and reliable. Selecting a reliable and trustworthy delivery partner is key to
                                building customer trust and loyalty.
                            </p>
                        </div>
                        <div class="col-sm col-12 how-img">
                            <img src="images/delivery.png" class="img-fluid" alt="" />
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </section>
    <!--End Our Services-->
    <br>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="images/waterfresh_logo.png" alt="" height="50">
                    <br>
                    <br>
                    <p style="font-size: 14px;">WaterFresh laundry service caters to modern lifestyles, providing a
                        hassle-free solution for maintaining fresh and well-maintained clothing without the burden of
                        laundry tasks.
                    </p>
                </div>
                <div class="col">
                    <h5>About Us</h5>
                    <ul>
                        <li style="font-size: 14px;">Our Journey</li>
                        <li style="font-size: 14px;">Our Mission</li>
                        <li style="font-size: 14px;">Our Values</li>
                    </ul>
                </div>
                <div class="col">
                    <h5>Services</h5>
                    <ul>
                        <li style="font-size: 14px;">Special Events
                            <ul>
                                <li style="font-size: 12px;">Destination Wedding</li>
                                <li style="font-size: 12px;">Events</li>
                            </ul>
                        </li>
                        <li style="font-size: 14px;">Pick & Drop
                            <ul>
                                <li style="font-size: 12px;">Home Cleansing</li>
                                <li style="font-size: 12px;">Curtains & Furnishings</li>
                                <li style="font-size: 12px;">Rugs & Carpets</li>
                                <li style="font-size: 12px;">Bags & Shoes</li>
                                <li style="font-size: 12px;">Delicates & Formals</li>
                            </ul>
                        </li>
                        <li style="font-size: 14px;">Subscriptions Model</li>
                        <li style="font-size: 14px;">Corporate</li>
                        <li style="font-size: 14px;">Retail</li>
                    </ul>
                </div>
                <div class="col">
                    <h5>Partner With Us</h5>
                    <ul>
                        <li style="font-size: 14px;">Sponsor Collection Point</li>
                        <li style="font-size: 14px;">Buy a Franchisee</li>
                        <li style="font-size: 14px;">Delivery Partner</li>
                    </ul>
                </div>
                <div class="col">
                    <h5>Locate Us</h5>
                    <ul>
                        <li style="font-size: 14px;">Gurugram</li>
                        <li style="font-size: 14px;">Manesar</li>
                        <li style="font-size: 14px;">Dwarka Expressway</li>
                        <li style="font-size: 14px;">South Delhi</li>
                        <li style="font-size: 14px;">Faridabad</li>
                    </ul>
                </div>
                <div class="col">
                    <h5>Work With Us</h5>
                    <button type="button" class="btn btn-outline-info"><a href="workWithUs"
                            class="text-decoration-none" style="color:#35b5b9">Apply now</a></button>
                </div>
            </div>
        </div>
    </footer>
    <footer style="background-color: #7ee7de;">
        <br>
        <div class="container">
            <div class="row">
                <div class="col fw-bold">
                    +917420140066
                </div>
                <div class="col fw-bold">+917428814455</div>
                <div class="col fw-bold">waterfresh323@gmail.com</div>

                <div class="col">
                    <div class="container">
                        <!-- Create social media icons using Font Awesome -->
                        <a href="https://www.facebook.com/WaterFresh.in" class="btn btn-link">
                            <i class="fab fa-facebook"></i>
                        </a>

                        <a href="https://www.instagram.com/waterfresh.in/?igshid=YTQwZjQ0NmI0OA%3D%3D"
                            class="btn btn-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send/?phone=917428140066&text&type=phone_number&app_absent=0"
                            class="btn btn-link">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://www.youtube.com/@waterfresh323"
                            class="btn btn-link">
                            <i class="fab fa-youtube"></i>
                        </a>

                        <!-- Add more social media icons and links as needed -->
                    </div>
                </div>
            </div>
            <br>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <!-- Bootstrap 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>