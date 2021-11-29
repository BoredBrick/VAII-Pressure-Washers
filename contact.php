<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>PowerWashers</title>
  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a href="index.html" class="navbar-brand"
          ><img
            src="img/washingGun.png"
            alt="Washing gun"
            width="90"
            height="84"
          />Power Washers</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navItems"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navItems">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about-us.html" class="nav-link">About us</a>
            </li>
            <li class="nav-item">
              <a href="pricing.html" class="nav-link">Pricing</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-12 col-lg-6 map-column"><div id="map"></div></div>
        <script src="js/script.js"></script>
        <script
          async
          defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC48-Hcs0h5FaXDkrw76EUufFJnMI_om-Y&callback=initMap"
        ></script>

        <div class="col-md-12 col-lg-6 contact-form">
          <h2>Contact us</h2>
          <form class="contact-form" action="contactForm.php" method="post">
          <input type="text" name="name" placeholder="&#xF007;  Name" />
          <input type="text" name="subject" placeholder="&#xF007;  Subject" />
          <input type="email" name="email" placeholder="&#xF0e0; Email" />

          <textarea
            cols="30"
            rows="10"
            placeholder="Enter your message"
            name = "message"
          ></textarea>
          <br />
            <button type="submit" class="btn btn-dark">SEND MAIL</button>
          </form>
        </div>
      </div>
    </div>

    <footer class="p-5 bg-white text-dark">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-3">
            <p>Mr. Clean</p>
            <p>01001 Žilina</p>
            <p>
              <a href="mailto:powerwashing@clean.com" target="_blank"
                >powerwashing@clean.com</a
              >
            </p>
            <p><b>+421 900 800 700</b></p>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <p>IČO: 49683721</p>
            <p>DIČ: 3948173645</p>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <p>
              <a class="terms" href="#">Terms of service</a>
            </p>
            <p><a class="terms" href="#">Data processing agreement</a></p>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
