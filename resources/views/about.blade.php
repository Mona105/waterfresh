<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="./CSS/aboutUs.css" rel="stylesheet">
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
       <hr/>

      </div>
    </div>
  </div>
  <!--end page Loader -->
  <!-- START NAVBAR -->
  <nav class="navbar navbar-expand-lg fixed-top sticky" style="background-color: #7ee7de;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html"><img src="images/waterfresh_logo.png" alt="" height="50"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
    <div class="img-fluid" style="background-image: url('images/banner_background.png'); height: 520px; width: 1300px;">
      <br>
      <div class="bg-overlay text-center">
        <a href="#"><img src="images/aboutus_banner.png" alt="Blog" class="img-fluid rounded-3" /></a>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="text-center text-white">

              <h2 class="text-white fw-light"><span class="fw-semibold"></span></h2>
              <nav aria-label="breadcrumb" class="mt-3">

              </nav>
            </div>
          </div>
          <!--end col-->
        </div>
        <!--end row-->
      </div>
      <!--end container-->
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
  <br>
  <br>

  <!--Why waterfresh-->
  <section class="sectionWhyWaterfresh">
    <div class="text-center">
      <h3 class="fw-bold" style="color:rgb(31, 120, 143);">
        Why Waterfresh?
      </h3>
    </div>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-4">
          <div class="container mt-5">
            <img src="images/eco_friendly.png">
            <h4 class="fw-bold" style="color:rgb(31, 120, 143);">Eco Friendly</h4>
            <p>Our waste water is within the norms & not hazardous to aquatic life.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container mt-5">
            <img src="images/reliable.png">
            <h4 class="fw-bold" style="color:rgb(31, 120, 143);">Organic</h4>
            <p>Cleaning solutions are biodegradable, non-toxic, and harmless to users and workers.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container mt-5">
            <img src="images/dependable.png">
            <h4 class="fw-bold" style="color:rgb(31, 120, 143);"> Dependable</h4>
            <p>On-time delivery wherever, whenever.
            </p>

          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container text-center" style="margin-top:-50px;">
      <div class="row">
        <div class="col-md-6 reliable">
          <div class="container mt-5">
            <img src="images/reliable.png">
            <h4 class="fw-bold" style="color:rgb(31, 120, 143);"> Reliable</h4>
            <p>SOP Driven services with 100% accuracy.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="container mt-5">
            <img src="images/good_values.png">
            <h4 class="fw-bold" style="color:rgb(31, 120, 143);">Good Values</h4>
            <p>Competent pricing and best in class.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End why waterfresh-->


  <!--CEO-->
  <section class="ceo">

    <div class="client img-fluid" style="background-image: url('images/client_background.png');">
      <br>
      <br>
      <h3 class="text-center fw-bold" style="color:rgb(31, 120, 143);">About Our Founder</h3>
      <div class="how-section1">
        <div class="row">
          <div class="col-md-6 how-img">
            <img src="images/anil_kumar.png" class="img-fluid" alt="" />
          </div>
          <div class="col-md-6">
            <p class="text-muted">
              WaterFresh-Started in 2012 by Anil Kumar, a former Army Officer and MNC Banker, WaterFresh provides
              premium wet cleaning solutions. Anil Kumar, with BTECH (Elect), MBA (Fin), and MBB (Six Sigma), leads the
              way. WaterFresh offers careful cleaning, precise drying, and quality garment delivery using cutting-edge
              technology like the lagoon care system, designed for premium fabrics without harsh chemicals. We
              prioritise individual garment care with personalised attention. Our services are available in NCR with the
              convenience of pick and drop facility. WaterFresh is your trusted partner for premium "Wet Cleaning"
              solutions, redefining garment care with professionalism, ethics, and technology. Explore our website for
              services, pricing, and scheduling. We're eager to exceed your expectations. We have exciting offers in
              place, you can choose and subscribe to and from our range of “Discount Packages” that suits your
              requirement. (5K-5%, 10K-10%, 20K-20%, 30k-30%, 40k-40%, 50k-50%) Plus 18% GST, Validity- One Year, Offer
              Available for Limited Period Only to the Residents of Gurgaon & South Delhi. We are a growing and learning
              organisation, and continuously are in search of people and partners. If you are desirous of partnering or
              working with us please write to us.</p>
          </div>
        </div>
      </div>
  </section>
  <!--End CEO-->


  <!--Mission & vision of waterfresh-->
  

  <section class="mission_vission">
    <div class="img-fluid" style="background-image: url('images/vision_background.png');">

      <div class="how-section1">
        <div class="row">
          <div class="col-sm col-12 order-last order-sm-0 how-img">
            <img src="images/vision.png" class="img-fluid" alt="" />
          </div>
          <div class="col-sm col-12 text-center">
            <br>
            <h4>Vision Of Waterfresh</h4>
            <p class="text-muted">
              To be recognised as an international brand that is widely appreciated for its commitment to sustainability
              and eco-friendly dry cleaning practices along with high service standards.
            </p>
          </div>
        </div>
        <br>
        <br>
        <div class="row my-3">
          <div class="col-sm col-12 text-center">
            <h4>Mission Of Waterfresh</h4>
            <p class="text-muted"> To provide a safe and eco-friendly organic dry-cleaning solution that puts the health
              and well-being of our customers first. We use biodegradable, non-toxic, and natural cleaning solutions to
               bring out the best in our customers’ clothes while also protecting the environment. We are committed to
              providing superior service, and customer satisfaction . We will strive to be the leader in eco-friendly
              dry cleaning and to improve our methods and processes constantly. </p>
          </div>
          <div class="col-md-6 how-img">
            <img src="images/mission.png" class="img-fluid" alt="" />
          </div>
        </div>

      </div>
    </div>
  </section>
  <!---->


  <!--Our Expertise-->
  <section class="text-center" style="background-color: black;">
    <br>
    <h3 style="color:white;">Our Expertise</h3>

    <div class="container ">
      <div class="row">
        <div class="col-md-4">
          <div class="container mt-5">
            <div class="image-container">
              <img src="images/Delicates.png" alt="Image" class="img-fluid">
              <div class="image-overlay">
                <h2 class="fw-bold">Delicates & Formals</h2>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container mt-5">
            <div class="image-container">
              <img src="images/cushions.png" alt="Image" class="img-fluid">
              <div class="image-overlay">
                <h2 class="fw-bold">
                  Cushions & Couches
                </h2>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container mt-5">
            <div class="image-container">
              <img src="images/rugs.png" alt="Image" class="img-fluid">
              <div class="image-overlay">
                <h2 class="fw-bold">
                  Rugs & Carpet
                </h2>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">

          <div class="container mt-4">
            <div class="image-container">
              <img src="images/shoes.png" alt="Image" class="img-fluid">
              <div class="image-overlay">
                <h2 class="fw-bold">
                  Shoes
                </h2>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container mt-4">
            <div class="image-container">
              <img src="images/bags.png" alt="Image" class="img-fluid">
              <div class="image-overlay">
                <h2 class="fw-bold">
                  Bags
                </h2>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">

          <div class="container mt-4">
            <div class="image-container">
              <img src="images/nano_coating.png" alt="Image" class="img-fluid">
              <div class="image-overlay">
                <h2 class="fw-bold">
                  Nano Coating
                </h2>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
  </section>
  <!--End Our Experties-->

  <br>
  <br>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="images/waterfresh_logo.png" alt="" height="50">
          <br>
          <br>
          <p style="font-size: 14px;">WaterFresh laundry service caters to modern lifestyles, providing a hassle-free
            solution for maintaining fresh and well-maintained clothing without the burden of laundry tasks.
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
          <button type="button" class="btn btn-outline-info"><a href="workWithUs" class="text-decoration-none"
              style="color:#35b5b9">Apply now</a></button>
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

            <a href="https://www.instagram.com/waterfresh.in/?igshid=YTQwZjQ0NmI0OA%3D%3D" class="btn btn-link">
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
    </div>
    <br>
  </footer>

  <script src="./JS/script.js"></script>
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