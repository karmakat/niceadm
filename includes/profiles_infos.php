<div class="card">
    <div class="card-body pt-3">
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
                <button class="nav-link " data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
            </li>

        </ul>
        <div class="tab-content pt-2">

            <div class="tab-pane fade profile-overview" id="profile-overview">
                <h5 class="card-title">About</h5>
                <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?= e($user_info->names)?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8"><?= e($user_info->company)?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8"><?= e($user_info->job)?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">(243) <?= e($user_info->phone)?></div>
                </div>
            </div>

            <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
            <?php include('partials/_errors.php')?>
              <?php include('partials/_flash.php')?>
                <!-- Profile Edit Form -->
                <form method="POST" autocomplete="off">
                    <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                            <img src="assets/img/profile-img.jpg" alt="Profile">
                            <div class="pt-2">
                                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea name="txtabout" class="form-control" id="about" style="height: 100px"  required="required"><?= e($user_info->bio)?></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Names</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="txtnames" type="text" class="form-control" id="company" value="<?= e($user_info->names)?>" required="required">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Username</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="txtuser" type="text" class="form-control" id="company" value="<?= e($user_info->user) ?>" required="required">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="txtcompany" type="text" class="form-control" id="company" value="<?= e($user_info->company)?>" required="required">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="txtjob" type="text" class="form-control" id="Job" value="<?= e($user_info->job)?>" required="required">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="txtphone" type="text" class="form-control" id="Phone" value="<?= e($user_info->phone)?>" required="required">
                            <br>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="txtcheck" value="true" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Available for job</label>
                        </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="update" class="btn btn-primary">Save Changes</button>
                    </div>
                </form><!-- End Profile Edit Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-settings">

                <!-- Settings Form -->
                <form>

                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                        <div class="col-md-8 col-lg-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                <label class="form-check-label" for="changesMade">
                                    Changes made to your account
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                <label class="form-check-label" for="newProducts">
                                    Information on new products and services
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="proOffers">
                                <label class="form-check-label" for="proOffers">
                                    Marketing and promo offers
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                <label class="form-check-label" for="securityNotify">
                                    Security alerts
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form><!-- End settings Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form>

                    <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="password" type="password" class="form-control" id="currentPassword">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form><!-- End Change Password Form -->

            </div>

        </div><!-- End Bordered Tabs -->

    </div>
</div>