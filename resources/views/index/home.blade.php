<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lumia Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Lumia/Lumia/assets/img/favicon.png" rel="icon">
  <link href="Lumia/Lumia/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="Lumia/Lumia/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Lumia/Lumia/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Lumia/Lumia/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Lumia/Lumia/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Lumia/Lumia/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Lumia/Lumia/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Lumia/Lumia/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html">PFEManager</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <a class="btn btn-login" href="{{ route('login') }}">Se connecter</a>
        <i class="bi bi-list mobile-nav-toggle"></i>
        <li><a class="nav-link scrollto" href="{{route('dashboard.dash')}}">Admin</a></li>
        <li><a class="nav-link scrollto" href="{{route('student.dashstudent')}}">Student</a></li>
        <li><a class="nav-link scrollto" href="{{route('professor.dashprofessor')}}">professor</a></li>
        <li><a class="nav-link scrollto" href="{{route('group.dashgroup')}}">groupe</a></li>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Découvrez <span>PFEManager</span></h1>
      <h2> votre allié pour une gestion simplifiée et efficace de vos Projets de Fin d'Études</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>Ce que nous faisons</h2>
          <p>Gestion efficace des Projets de Fin d'Études (PFE)<br>
            Nous facilitons la coordination, le suivi et la gestion de vos projets académiques, vous permettant de vous concentrer sur l'essentiel</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Gestion</a></h4>
              <p>Gérez vos PFE de manière efficace grâce à une plateforme intuitive offrant des outils de planification, de suivi et d'organisation pour une gestion transparente de vos projets</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Suivi</a></h4>
              <p>Recevez un suivi détaillé de l'avancement de vos Projets de Fin d'Études, accompagné de conseils personnalisés pour optimiser votre parcours académique</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Affectation</a></h4>
              <p>Facilitez l'affectation des sujets aux groupes d'étudiants en permettant aux professeurs de choisir les sujets en fonction des préférences des étudiants et des besoins du programme</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>À propos de nous</h3>
            <p>
                Nous simplifions la gestion des Projets de Fin d'Études (PFE) pour les étudiants et les enseignants avec une plateforme intuitive et efficace.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Notre objectif est d'offrir une expérience utilisateur exceptionnelle en combinant simplicité et fonctionnalité.</li>
              <li><i class="bx bx-check-double"></i> Nous automatisons les tâches administratives pour permettre aux utilisateurs de se concentrer sur l'essentiel.</li>
              <li><i class="bx bx-check-double"></i>Nous encourageons une collaboration transparente entre les équipes de projet pour favoriser la réussite académique.</li>
            </ul>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Utilisateurs Satisfaits</p>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projets</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Assistance Disponible</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Équipe Engagée</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Services Clés de l'Application de Gestion des projets de Fin d'Études</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Gestion des Utilisateurs</a></h4>
              <p>Gestion des Utilisateurs : Service offrant l'inscription, la connexion et la gestion des profils pour les utilisateurs avec la possibilité de définir des rôles (étudiant, professeur, administrateur) et de mettre à jour les informations personnelles</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Gestion des Projets</a></h4>
              <p>Permettant aux professeurs de proposer des projets de mémoire, cette fonctionnalité autorise les étudiants à choisir parmi ces projets et à soumettre leurs préférences, tandis que les professeurs valident les choix des étudiants</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Suivi des Tâches</a></h4>
              <p>Permettre aux étudiants et aux professeurs de créer des tâches associées à chaque projet, de les attribuer à des étudiants, de définir des échéances et de suivre leur progression.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Gestion des Réunions</a></h4>
              <p> Offrir la possibilité de planifier, organiser et suivre les réunions entre les étudiants et les professeurs pour discuter de l'avancement des projets, des problèmes rencontrés et des prochaines étapes.</p>
            </div>
          </div>

      </div>
    </section><!-- End Services Section -->






    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">
        <div class="section-title">
            <h2>Équipe de Développement</h2>
            <p>Rencontrez les personnes qui travaillent sur notre application</p>
        </div>


        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Asmaa Knidar</h4>
              <span>Étudiante à l'ENSIAS</span>
            <p>Travaille sur la partie backend et frontend de l'application</p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Assia Benchagra</h4>
              <span>Étudiante à l'ENSIAS</span>
            <p>Travaille sur la partie backend et frontend de l'application</p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
            <h2>Nous Contacter</h2>
            <p>N'hésitez pas à nous contacter pour toute question ou demande</p>
        </div>


        <div class="row mt-5 justify-content-center">
            <div class="col-lg-10">

                <div class="info-wrap">
                    <div class="row">
                        <div class="col-lg-4 info">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Adresse:</h4>
                            <p>Rabat, Madinat Al Irfane<br>ENSIAS</p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>asmaaknidar4@gmail.com<br>assiabenchagra5@gmail.com</p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="bi bi-phone"></i>
                            <h4>Appeler:</h4>
                            <p>+212 681228936<br>+212 648415150</p>
                        </div>
                    </div>
                </div>

            </div>






        </div>

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Lumia</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
          Designed by <a href="Lumia/Lumia/https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="Lumia/Lumia/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="Lumia/Lumia/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Lumia/Lumia/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="Lumia/Lumia/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="Lumia/Lumia/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="Lumia/Lumia/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="Lumia/Lumia/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="Lumia/assets/js/main.js"></script>

</body>

</html>
