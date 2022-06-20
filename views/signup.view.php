<!DOCTYPE html>
<html lang="en">

<head>
	<?php $title = "Register"; ?>
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
										<h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
										<p class="text-center small">Enter your personal details to create account</p>
									</div>

									<form class="row g-3 needs-validation"method="post" autocomplete="off" novalidate>
										<div class="col-12">
										<?php include('partials/_flash.php'); ?>
										<?php include('partials/_errors.php'); ?>
										<div class="col-12">
										<div class="col-12">
											<label for="yourUsername" class="form-label">Username</label>
											<div class="input-group has-validation">
												<input type="text" name="txtuser" value="<?=get_input_data('txtuser')?>" class="form-control" id="yourUsername" autocomplete="off" required>
												<div class="invalid-feedback">Please choose a username.</div>
											</div>
										</div>

										<div class="col-12">
											<label for="yourEmail" class="form-label">Your Email</label>
											<input type="email" name="txtmail" value="<?=get_input_data('txtmail')?>" class="form-control" id="yourEmail" required>
											<div class="invalid-feedback">Please enter a valid Email adddress!</div>
										</div>



										<div class="col-12">
											<label for="yourPassword" class="form-label">Password</label>
											<input type="password" name="txtpass" class="form-control" id="yourPassword" required>
											<div class="invalid-feedback">Please enter your password!</div>
										</div>

										<div class="col-12">
											<label for="yourPassword" class="form-label">Confirm</label>
											<input type="password" name="txtpassconf" class="form-control" id="yourPassword" required>
											<div class="invalid-feedback">Please confirm your password!</div>
										</div>

										<div class="col-12">
											<div class="form-check">
												<input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
												<label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
												<div class="invalid-feedback">You must agree before submitting.</div>
											</div>
										</div>
										<div class="col-12">
											<button class="btn btn-primary w-100" type="submit" name="register">Create Account</button>
										</div>
										<div class="col-12">
											<p class="small mb-0">Already have an account? <a href="index.php">Log in</a></p>
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