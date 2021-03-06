<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

    <!-- Font Awesome -->
    <link href="<?= base_url('assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Navigation -->
    <?php $this->load->view('user/navbaruser') ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url(<?= base_url('assets/image/bg1.png'); ?>)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading" style="padding-top: 282px; padding-bottom: 282px;">
                        <h1>BID NOW!</h1>
                        <span class="subheading">Car Auction List</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <h5 class="txt text-justify">DESIGNED, DEVELOPED, TESTED.</h5>
        <h5 class="txt-2 text-justify">FOR AUCTION</h5>
        <!-- Page Features -->
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/image/honda-accord.png'); ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Honda Accord</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus
                            neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Bid Now!</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/image/honda-city.png'); ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Honda City</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni
                            sapiente,
                            tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Bid Now!</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/image/toyota-camry.png'); ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Toyota Camry</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus
                            neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Bid Now!</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/image/toyota-corolla.png'); ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Toyota Corolla</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni
                            sapiente,
                            tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Bid Now!</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/image/mitsubishi-pajero.png'); ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Mitsubishi Pajero</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus
                            neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Bid Now!</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/image/honda-brv.png'); ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Honda Brv</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni
                            sapiente,
                            tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Bid Now!</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/image/toyota-fortuner.png'); ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Toyota Fortuner</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus
                            neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Bid Now!</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/image/toyota-dc.png'); ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Toyota DC</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni
                            sapiente,
                            tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Bid Now!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->

    <hr>

    <!-- Footer -->
    <?php $this->load->view('user/footer') ?>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url() . 'assets/js/bootstrap.bundle.min.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url() . 'assets/jquery/jquery.min.js'; ?>"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="<?= base_url() . 'assets/js/script.js'; ?>"></script>
</body>

</html>