<!DOCTYPE html>
<html lang="en">

<head>
	<?php $title = "Login" ?>

	<?php include('partials/_stylelinks.php') ?>

</head>

<body>

	<main>
		<div class="container">

			<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

							<div class="d-flex justify-content-center py-4">
								<a href="index.html" class="logo d-flex align-items-center w-auto">
									<img src="assets/img/logo.png" alt="">
									<span class="d-none d-lg-block"><?= WEBSITE_NAME ?></span>
								</a>
							</div><!-- End Logo -->

							<div class="card mb-3">

								<div class="card-body">

									<div class="pt-4 pb-2">
										<h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
										<p class="text-center small">Enter your username or mail & password to login</p>
									</div>

									<form class="row g-3 needs-validation" method="post" autocomplete="off" novalidate>
										<div class="col-12">

											<?php include('partials/_flash.php'); ?>
											<?php include('partials/_errors.php'); ?>
										</div>
										<div class="col-12">
											<label for="yourUsername" class="form-label">Username or mail</label>
											<div class="input-group has-validation">
												<input type="text" name="txtauth" value="<?=get_input_data('txtauth')?>"  class="form-control" id="yourUsername" required>
												<div class="invalid-feedback">Please enter your username or mail.</div>
											</div>
										</div>

										<div class="col-12">
											<label for="yourPassword" class="form-label">Password</label>
											<input type="password" name="txtpass" class="form-control" id="yourPassword" required>
											<div class="invalid-feedback">Please enter your password!</div>
										</div>

										<div class="col-12">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
												<label class="form-check-label" for="rememberMe">Remember me</label>
											</div>
										</div>
										<div class="col-12">
											<button class="btn btn-primary w-100" type="submit" name="login">Login</button>
										</div>
										<div class="col-12">
											<p class="small mb-0">Don't have account? <a href="register.php">Create an account</a></p>
										</div>
									</form>

								</div>
							</div>

						</div>
					</div>
				</div>

			</section>

		</div>
	</main><!-- End #main -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	<?php include('partials/_scriptlinks.php') ?>

</body>

</html>