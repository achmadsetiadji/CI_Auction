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
    <header class="masthead" style="background-image: url(<?= base_url('assets/image/bg1.png'); ?>">
        <div class="overlay"></div>
        <div class="container" style="width: 600px;">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading" style="padding-top: 177px; padding-bottom: 177px;">
                        <form class=" form-signin" method="POST" action="<?= site_url('UserDashboard/signin_action') ?>">
                            <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                            <h2 class="h3 mb-3 font-weight-normal">Sign in</h2>
                            <h5 class="text-left">Username</h5>
                            <label for="inputUsername" class="sr-only">Username</label>
                            <input type="text" name="usernamess" id="inputUsername" class="form-control mb-3" placeholder="Username" required="" autofocus="">
                            <h5 class="text-left">Password</h5>
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" name="passwordss" id="inputPassword" class="form-control mb-2" placeholder="Password" required="">
                            <a class="text-white text-left" style="margin-left: -245px; margin-bottom: 20px;" href="#">Forgot Password?</a>
                            <!-- <div class="checkbox mb-3 text-left mt-2">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div> -->
                            <button class="btn btn-lg btn-primary btn-block mb-2" type="submit">Sign in</button>
                            <a class="text-white" href="<?= site_url('Dashboard/register'); ?>">Create an Account!</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Footer -->
    <?php $this->load->view('user/footer') ?>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url() . 'assets/js/bootstrap.bundle.min.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url() . 'assets/jquery/jquery.min.js'; ?>"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="<?= base_url() . 'assets/js/script.js'; ?>"></script>
</body>

</html>