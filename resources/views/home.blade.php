<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="./CSS/style.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.1/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Font Awesome 5 CSS -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
  <div id="preloader">
    <div id="status">
      <div class="load">
      </div>
    </div>
  </div>
  <!--end page Loader -->

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
            <a class="nav-link" href="home">Home</a>
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


  <!--End Navbar-->


  <div class="bannerImage">
    <img src="images/Banner.png" class="img-fluid">
  </div>


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
  <section class="container-fluid ourServices">
    <div class="img-fluid bg-img-none" style="background-image: url('images/ourServicesWallpaper.png'); ">
      <br>
      <br>

      <div class="text-center">

        <h3 class="fw-bold" style="color:rgb(31, 120, 143);">Our Services</h3>
        <p class="p-4">WaterFresh is an Eco-Friendly Organic Dry Cleaning Company that stands out in the industry for
          several compelling reasons that set us apart from traditional dry cleaning businesses and even other
          eco-friendly alternatives.</p>
      </div>
      <div class="row justify-content-center" style="margin-top: 0;">
        <div class="col-sm-4 card custom-card" style="width: 250px; height: 19rem; margin: 25px;">
          <img src="images/Pick.png" class="card-img-top img-fluid" alt="Pick&Drop">

          <p class="card-img-overlay text-center fw-bold"
            style="margin-top: 50%; color: rgb(31, 120, 143); font-size: 20px;">
            Pick & Drop
          </p>
          <p class="card-text" style="font-size: 9px; margin-top: 25px;">We provide pickup and delivery services. It
            ensures that all
            garments are collected, cleaned, and returned in a timely manner.
          </p>
          <div class="text-center">
            <a href="services" class="btn btn-primary stretched-link">Read More</a>
          </div>
        </div>
        <div class="col-sm-4 card custom-card" style="width: 250px; height: 19rem; margin: 25px;">
          <img src="images/Special_event.png" class="card-img-top img-fluid" alt="specialEvents">

          <p class="card-img-overlay text-center fw-bold"
            style="margin-top: 50%; color: rgb(31, 120, 143); font-size: 20px;">
            Special Events
          </p>
          <p class="card-text" style="font-size: 9px; margin-top: 25px;">We specialise in providing dry cleaning
            services for large
            events, such as weddings, conferences, and other gatherings.
          </p>
          <div class="text-center">
            <a href="services" class="btn btn-primary stretched-link">Read More</a>
          </div>
        </div>
        <div class="col-sm-4 card custom-card" style="width: 250px; height: 19rem; margin: 25px;">
          <img src="images/Subscription.png" class="card-img-top img-fluid" alt="Subscription_Model">

          <p class="card-img-overlay text-center fw-bold"
            style="margin-top: 50%; color: rgb(31, 120, 143); font-size: 20px;">
            Subscription Model</p>
          <p class="card-text" style="font-size: 9px; margin-top: 25px;">Customers can directly choose the frequency of
            service, such
            as weekly, bi-weekly, monthly, quarterly, or yearly.
          </p>
          <div class="text-center">
            <a href="services" class="btn btn-primary stretched-link">Read More</a>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-4 card custom-card" style="width: 250px; height: 19rem; margin: 25px;">
          <img src="images/corporate.png" class="card-img-top img-fluid" alt="corporate">

          <p class="card-img-overlay text-center fw-bold"
            style="margin-top: 50%; color: rgb(31, 120, 143); font-size: 20px;">
            Corporate</p>
          <p class="card-text" style="font-size: 9px; margin-top: 25px;">
            WaterFresh laundry services for corporate clients offer a convenient and time-saving solution to one of the
            daily challenges many businesses face.

          </p>
          <div class="text-center">
            <a href="services" class="btn btn-primary stretched-link">Read More</a>
          </div>
        </div>
        <div class="col-sm-4 card custom-card" style="width: 250px; height: 19rem; margin: 25px;">
          <img src="images/retail.png" class="card-img-top img-fluid" alt="Retail">

          <p class="card-img-overlay text-center fw-bold"
            style="margin-top: 50%; color: rgb(31, 120, 143); font-size: 20px;">
            Retail</p>
          <p class="card-text" style="font-size: 9px; margin-top: 25px;">WaterFresh laundry services for households have
            gained immense popularity in recent years, offering a convenient and time-saving solution for busy
            individuals and families.
          </p>
          <div class="text-center">
            <a href="services" class="btn btn-primary stretched-link">Read More</a>
          </div>
        </div>
      </div>
  </section>
  <!--End Our Services-->

  <!--The process we follow-->
  <br>
  <br>
  <section class="process">
    <div class="img-fluid" style="background-image: url('images/processWeFollowbackground.jpg');" class="whyChooseUs">

      <div class="text-center">
        <h3 class="fw-bold" style="color:#35b5b9;">The Process We Follow</h3>
        <p>WaterFresh offers an online efficient process that serves the convenience of customers. Here's an elaborate
          explanation of the steps involved in this process
        </p>
      </div>
         <br>
       
        <div class="container text-center">
          <div class="row">
            <div class="col-md-4">
              <h4 style="color:#098596;">Scheduling</h4>
              <img src="images/icon 1.png" class="img-fluid" alt="" style="height:40%"/>

              <p class="text-muted">Customers will start by booking an appointment for the services through the
                WaterFresh website or mobile application.</p>
            </div>
            <div class="col-md-4">
              <h4 style="color:#098596;">Pick Up</h4>
              <img src="images/icon 2.png" class="img-fluid" alt="" style="height:40%" />

              <p class="text-muted">On the scheduled date and time, a representative arrives at the customer's
                specified location (home or office) to pick up the items</p>
            </div>
            <div class="col-md-4">
              <h4 style="color:#098596;">Receiving
              </h4>
              <img src="images/icon 3.png" class="img-fluid" alt="" style="height:40%"/>

              <p class="text-muted"> Once our professionals receive the garments, we proceed to the next step of
                cleaning.
              </p>
            </div>
            <div class="row">
              <div class="col-md-4">
                <h4 style="color:#098596;">Inspection</h4>
                <img src="images/icon 4.png" class="img-fluid" alt="" style="height:40%"/>

                <p class="text-muted">In this process the collected items are inspected for stains, and any specific
                  care instructions provided by the customer.</p>
              </div>
              <div class="col-md-4">
                <h4 style="color:#098596;">Pre Spotting</h4>
                <img src="images/icon 5.png" class="img-fluid" alt="" style="height:40%"/>

                <p class="text-muted">Pre-spotting is selectively treating certain stains and garments before they
                  undergo the cleaning process.</p>
              </div>
              <div class="col-md-4">
                <h4 style="color:#098596">Cleaning
                </h4>
                <img src="images/icon 6.png" class="img-fluid" alt="" style="height:40%"/>

                <p class="text-muted">After the inspection is done, the garments go through the cleaning process.

                </p>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <h4 style="color:#098596">Drying</h4>
                  <img src="images/icon 4.png" class="img-fluid" alt="" style="height:40%"/>

                  <p class="text-muted">Our trained professionals will handle the dry cleaning process</p>
                </div>
                <div class="col-sm-4">
                  <h4 style="color:#098596;">Finishing</h4>
                  <img src="images/icon 8.png" class="img-fluid" alt="" style="height:40%"/>

                  <p class="text-muted">On the scheduled date and time, a time representative arrives at the customer's
                    specified location (home or office) to pick up the items</p>
                </div>
                <div class="col-sm-4">
                  <h4 style="color:#098596;">Delivery
                  </h4>
                  <img src="images/icon 9.png" class="img-fluid" alt="" style="height:40%"/>

                  <p class="text-muted">In WaterFresh professionals use steam irons and ironing boards to achieve
                    creaseless pressed garments.
                  </p>
                </div>


              </div>

  </section>
  <!--End The process we follow-->

  <br>
  <br>
  <br>
  <!--Mission and vision-->
  <section class="mission">
    <div class="img-fluid" style="background-image: url('images/mission_background.png');">
      <br>
      <br>
      <div class="text-center" style="color: rgb(255, 255, 255);">
        <h4 class="fw-bold">Mission & Vision Of Waterfresh</h4>
        <p>To provide a safe and eco-friendly organic dry-cleaning solution that puts the health and well-being of our
          customers first. We use biodegradable, non-toxic, and natural cleaning solutions to bring out the best in our
          customers’ clothes while also protecting the environment.
          To be recognised as an international brand that is widely appreciated for its commitment to sustainability and
          eco-friendly dry cleaning practices along with very high service standards.

        </p>
      </div>
      <br>
      <br>
      <div class="conainer">
        <div class="row text-center" style="color: white;">
          <div class="col">
            <h4>Eco Friendly</h4>
            <p>Our waste water is within the norms & not hazardous to aquatic life.</p>
          </div>
          <div class="col">
            <h4>Organic</h4>
            <p>Cleansing solutions are biodegradable, non-toxic, and harmless to users and workers.</p>

          </div>
          <div class="col">
            <h4>Dependable</h4>
            <p>On-time delivery wherever, whenever.</p>

          </div>
          <div class="col">
            <h4>Reliable</h4>
            <p>SOP Driven srvices with 100% accuracy.</p>

          </div>
          <div class="col">
            <h4>Value For Money</h4>
            <p>Competent pricing and best in class.</p>

          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="text-center bookNow">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
          style="margin-bottom:10px;">
          Book Now
          
        </button>
        @if (\Session::has('success'))
                <div class="alert alert-success">
                    {!! \Session::get('success') !!}
                </div>
            @endif
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Schedule Home Pick Up & Drops</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="card text-center" style="width: 800px; height: 200px;">

                    <div class="card-body">
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
              </div>

            </div>
          </div>
        </div>
      </div>
  </section>
  <!--End mission and vision-->


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


  <!--Partner With Us-->
  <section class="partnerWithUs">
    <div class="img-fluid" style="background-image: url('images/OurServicesWallpaper.png');">
      <div class="text-center">
        <br>
        <br>
        <br>
        <h3 class="fw-bold" style="color:rgb(31, 120, 143);">Partner With Us</h3>
        <p class="p-4">Some general reasons why you might consider partnering with a laundry service like WaterFresh:
          Time-saving, Efficient, Convenient, Consistent, Reliable and Eco-Friendly Practices.
        </p>
      </div>
      <div class="row justify-content-center" style="margin-top: 0;">
        <div class="col-sm-4 card custom-card" style="width: 250px; height: 16rem; margin: 25px;">
          <img src="images/sponsor.png" class="card-img-top img-fluid" alt="Special_event">

          <p class="card-img-overlay text-center fw-bold"
            style="margin-top: 70%; color: rgb(31, 120, 143); font-size: 20px;">
            Sponsor a Collection Point>
          </p>

        </div>
        <div class="col-sm-4 card custom-card" style="width: 250px; height: 16rem; margin: 25px;">
          <img src="images/franchise.png" class="card-img-top img-fluid" alt="Pick&Drop">

          <p class="card-img-overlay text-center fw-bold"
            style="margin-top: 70%; color: rgb(31, 120, 143); font-size: 20px;">
            Buy a Franchisee>
          </p>

        </div>
        <div class="col-sm-4 card custom-card" style="width: 250px; height: 16rem; margin: 25px;">
          <img src="images/delivery_partner.png" class="card-img-top img-fluid" alt="Subscription_Model">

          <p class="card-img-overlay text-center fw-bold"
            style="margin-top: 70%; color: rgb(31, 120, 143); font-size: 20px;">
            Delivery Partner></p>

        </div>
      </div>
      <div class="text-center">
        <a href="partnerWithUs" class="btn btn-primary">Partner With Us</a>
      </div>
      <br>
      <br>
  </section>
  <!--End partner with us-->

  <!--FAQs-->
  <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
    <div class="text-center">
      <h2 class="fw-bold" style="color:rgb(31, 120, 143);">FAQs</h2>
    </div>
    <div class="container">


      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
            <h3 class="panel-title">
              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                How is "dry" cleaning performed?
              </a>
            </h3>
          </div>
          <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
            <div class="panel-body px-3 mb-4">
              <p>A liquid solvent is used to clean your clothes instead of water and detergent. The solvent contains
                little or no water, hence the term "dry cleaning". Drycleaners use very large and technically advanced
                computer-controlled dry cleaning machines.
              </p>

            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
            <h3 class="panel-title">
              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                Can you remove stains from my new coat/expensive dresses?
              </a>
            </h3>
          </div>
          <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
            <div class="panel-body px-3 mb-4">
              <p>Yes, we can.</p>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
            <h3 class="panel-title">
              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                What happens if I don't dry clean my clothes?
              </a>
            </h3>
          </div>
          <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
            <div class="panel-body px-3 mb-4">
              <p>In dry cleaning, adequate care is taken to wash and dry all kind of garments, even expensive,
                heavily embroidered ones properly in the required manner. This kind of care for all garments is not
                possible at home hence dry cleaning becomes important.
              </p>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
            <h3 class="panel-title">
              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                What is "green" dry cleaning?
              </a>
            </h3>
          </div>
          <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
            <div class="panel-body px-3 mb-4">
              <p>Green dry cleaning uses solvents that are safer for the environment than perc. These alternative
                solvents include hydrocarbons, silicone oils, and carbon dioxide. These are all effective at removing
                dirt and stains from clothes, and they're all safe for the environment.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
          <h3 class="panel-title">
            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
              href="#collapse4" aria-expanded="true" aria-controls="collapse4">
              Can frequent dry cleansing damage my clothes?
            </a>
          </h3>
        </div>
        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
          <div class="panel-body px-3 mb-4">
            <p>Having your clothing dry-cleaned won't ruin them. In contrast to washing, dry cleaning actually helps
              your fabric last longer without compromising its integrity.
            </p>
          </div>
        </div>
      </div>
    </div>

    </div>
  </section>
  <!--end FAQs-->

  <!--Testimonials-->
  <section class="client">
    <br>
    <div class="text-center">
      <h3>Testimonials</h3>
    </div>
    <div class="d-flex align-items-center py-5 mh-100">
      <a class="carousel-control-prev text-decoration-none " href="#mycarousel" role="button" data-bs-slide="prev">
        <div class="d-flex flex-column justify-content-center me-2 ms-auto left"><span class="fas fa-arrow-left"></span>
        </div> <span class="sr-only"></span>
      </a>
      <div class="container">
        <div id="mycarousel" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#mycarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#mycarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#mycarousel" data-bs-slide-to="2"></li>
          </ol>


          <div class="carousel-inner">

            <div class="text-center">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="img-area">
                      <img src="images/testimonials1.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="d-flex flex-column justify-content-center my-5 px-3 img-text">
                      <p class="review">"We have received the best service from this person. We will definitely hire for
                        our next project."</p>
                      <div class="person">
                        <p class="m-0">Jason Walker</p>
                      </div>
                      <p class="designation">Graphics Designer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-lg-4">
                  <div class="img-area">
                    <img src="images/testimonials2.jpg" alt="">
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class=" d-flex flex-column justify-content-center my-5 px-3 img-text">
                    <p class="review">"We have received the best service from this person. We will definitely hire for
                      our
                      next project."</p>
                    <div class="person">
                      <p class="m-0">Mike Jones</p>
                    </div>
                    <p class="designation">Human Resource Manager</p>
                  </div>
                </div>

              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-lg-4">
                  <div class="img-area">
                    <img src="images/testimonias3.jpg" alt="">
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class=" d-flex flex-column justify-content-center my-5 px-3 img-text">
                    <p class="review">"We have received the best service from this person. We will definitely hire for
                      our
                      next project."</p>
                    <div class="person">
                      <p class="m-0">Stephen Jones</p>
                    </div>
                    <p class="designation">Web Developer</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
      <a class="carousel-control-next text-decoration-none " href="#mycarousel" role="button" data-bs-slide="next">
        <div class="d-flex 
          flex-column justify-content-center right ms-2 me-auto" style="color:black;"><span
            class="fas fa-arrow-right"></span> </div> <span class="sr-only"></span>
      </a>
    </div>



  </section>
  <!--End Testimonials-->

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
            <a href="https://www.youtube.com/@waterfresh323" class="btn btn-link">
              <i class="fab fa-youtube"></i>
            </a>

            <!-- Add more social media icons and links as needed -->
          </div>
        </div>
      </div>
    </div>
    <br>
  </footer>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
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