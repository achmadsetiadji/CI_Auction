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
    <?php $this->load->view('user/navbarhome') ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url(<?= base_url('assets/image/bg1.png'); ?>)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading" style="padding-top: 282px; padding-bottom: 282px;">
                        <h1>BID NOW!</h1>
                        <span class="subheading">Vehicles Auction</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" src="<?= base_url('assets/image/01.jpg'); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">For those about to rock...</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" src="<?= base_url('assets/image/02.jpg'); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">We salute you!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" src="<?= base_url('assets/image/03.jpg'); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Let there be rock!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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