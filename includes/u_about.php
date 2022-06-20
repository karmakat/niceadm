<?php include('partials/_stylelinks.php') ?>

<!-- Modal Dialog Scrollable -->
<div class="modal fade" id="modal0" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark"><?= ABOUT . ' ' . $user ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-xl-12">

                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                                <h2 class="text-dark"><?= SHARP . $user ?></h2>
                                <h3>Web Designer</h3>
                                <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio culpa modi, assumenda explicabo repudiandae expedita sit quos corrupti nulla vero deserunt eos quae! Nostrum obcaecati sit impedit aliquam debitis unde.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8">Web Designer</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8">USA</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" name = "u_edit"data-bs-toggle="modal" data-bs-target="#modal1">
                Edit
                </button>
            </div>
        </div>
    </div>
</div><!-- End Modal Dialog Scrollable-->

<?php include('partials/_scriptlinks.php') ?>