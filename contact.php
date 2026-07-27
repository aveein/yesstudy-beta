<?php
$pageTitle = "Yes Study USA - Contact Us";
$metaKeywords = "Contact education consultancy, office locations, study abroad support";
$metaDescription = "Contact Yes Study USA - Reach our offices in Nepal, Australia, and USA for study abroad guidance";
$activePage = "contact";
include 'includes/header.php';
?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Contact Us</h1>
                <a href="index.php">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-secondary px-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Contact For Any Queries</h1>
                <h4 class="lh-base mb-4">Speak to a real counselor. We reply within 4 business hours.</h4>
                <form>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-1" placeholder="John Doe">
                                <label for="form-floating-1">Full Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="form-floating-2" placeholder="name@example.com">
                                <label for="form-floating-2">Email Address</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="form-floating-phone" placeholder="+1 256 277 3638">
                                <label for="form-floating-phone">Phone Number</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-control" id="form-floating-office">
                                    <option value="">Select Office</option>
                                    <option value="Kathmandu">Kathmandu</option>
                                    <option value="Pokhara">Pokhara</option>
                                    <option value="Butwal">Butwal</option>
                                    <option value="Itahari">Itahari</option>
                                    <option value="Sydney">Sydney</option>
                                    <option value="Dallas">Dallas</option>
                                </select>
                                <label for="form-floating-office">Preferred Office</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-3" placeholder="Subject">
                                <label for="form-floating-3">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Message" id="form-floating-4" style="height: 150px"></textarea>
                                <label for="form-floating-4">Message</label>
                              </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-light p-5">
                    <h5 class="mb-3">Nepal Head Office</h5>
                    <p class="mb-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>New Baneshwor Chowk, Opposite Global IME Bank</p>
                    <p class="mb-3"><small>Kathmandu Metropolitan City, Ward No. 10, Nepal</small></p>
                    <p class="mb-3">
                        <a href="tel:+97714560285" class="text-decoration-none text-dark"><i class="fa fa-phone text-primary me-2"></i>977 1 4560285</a><br>
                        <a href="mailto:admin@yesstudyusa.com" class="text-decoration-none text-dark"><i class="fa fa-envelope text-primary me-2"></i>admin@yesstudyusa.com</a>
                    </p>
                    <hr>
                    <h5 class="mb-3">Sydney, Australia</h5>
                    <p class="mb-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Suite 1305, Level 13, 87-89 Liverpool Street, Sydney NSW 2000</p>
                    <hr>
                    <h5 class="mb-3">Dallas, USA</h5>
                    <p class="mb-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>539 W. Commerce St #153, Dallas, TX 75208</p>
                    <p>
                        <a href="tel:+12562773638" class="text-decoration-none text-dark"><i class="fa fa-phone text-primary me-2"></i>+1 (256) 277-3638</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php include 'includes/footer.php'; ?>
