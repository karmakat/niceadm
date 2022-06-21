<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('includes/header.php')
  ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <main id="main" class="main">


    <section class="section profile container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <div class="column">
            <div class="pagetitle">
              <h1>Profile</h1>
            </div><!-- End Page Title -->



            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                <img src="<?= get_avatar_url($user_info->mail) ?>" alt="Profile" class="rounded-circle">
                <h2><?= SHARP . e($user_info->user) ?></h2>
                <h3><?= e($user_info->job)?></h3>
                <h6><a href="mailto:<?= e($user_info->mail)?>" class="text-dark"><?= e($user_info->mail)?></a></h6>
                <div class="social-links mt-2">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

              </div>

            </div>
          </div>
          <div class="pagetitle">
            <h1>Posts</h1>
          </div><!-- End Page Title -->



          <!-- Card with titles, buttons, and links -->
          <div class="card">
            <img src="assets/img/card.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card with titles, buttons, and links</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-footer p-4 mt-15">
              <div class="row text-center">
                <div class="col-4 border-right sm-grey-br">
                  <a href="#" class="card-link link d-flex align-items-center justify-content-center react-links">
                    <i class="bi bi-heart-fill f-20 mr-5"> 20</i>
                  </a>
                </div>

                <div class="col-4 border-right sm-grey-br">
                  <a href="#" class="card-link link d-flex align-items-center justify-content-center react-links">
                    <i class="bi bi-chat-left-dots f-20 mr-5"> 10</i>
                  </a>
                </div>

                <div class="col-4 border-right">
                  <a href="#" class="card-link link d-flex align-items-center justify-content-center react-links">
                    <i class="bi bi-share-fill f-20 mr-5"> 3</i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Card with titles, buttons, and links -->
        </div>

        <div class="col-sm-6">
          <div class="pagetitle">
            <h1>About</h1>
          </div>
        
          <?php include('includes/profiles_infos.php')?>
        </div>
      </div>
      </div>
      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>