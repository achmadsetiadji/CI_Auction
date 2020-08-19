<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template -->
    <link href="<?= base_url('assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <!-- DataTables styles for this page -->
    <link href="<?= base_url('assets/DataTables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view('admin/sidebar') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php $this->load->view('admin/topbar') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-center"><?= $title; ?></h6>
                        </div>
                        <div class="card-body">
                            <form class=" form-signin" action="<?= site_url('AdminDashboard/insert_user') ?>" method="POST">
                                <h5 class="text-left">Name</h5>
                                <label for="inputName" class="sr-only">Name</label>
                                <input type="text" name="names" id="inputName" class="form-control mb-3" placeholder="Insert Item Name" required="" autofocus="">
                                <h5 class="text-left">Date</h5>
                                <label for="inputDate" class="sr-only">Date</label>
                                <input type="date" name="dates" id="inputDate" class="form-control mb-3" placeholder="Insert Date" required="" autofocus="">
                                <h5 class="text-left">Price</h5>
                                <label for="inputPrice" class="sr-only">Price</label>
                                <input type="number" name="prices" id="inputPrice" class="form-control mb-3" placeholder="Insert Price" required="" autofocus="">
                                <h5 class="text-left">Description</h5>
                                <label for="inputDescription" class="sr-only">Description</label>
                                <input type="text" name="descs" id="inputDescription" class="form-control mb-3" placeholder="Insert Description" required="" autofocus="">
                                <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="far fa-save"></i></button>
                            </form>
                        </div>
                    </div>
                    <a href="<?= site_url('AdminDashboard/userstable') ?>" class="btn btn-danger float-right">
                        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
                    </a>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php $this->load->view('admin/footer'); ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php $this->load->view('admin/signoutmodal') ?>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url() . 'assets/jquery/jquery.min.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url() . 'assets/js/bootstrap.bundle.min.js'; ?>"></script>

    <!-- Core plugin JavaScript -->
    <script type="text/javascript" src="<?= base_url() . 'assets/jquery-easing/jquery.easing.min.js'; ?>"></script>

    <!-- Custom scripts for all pages -->
    <script type="text/javascript" src="<?= base_url() . 'assets/js/sb-admin-2.min.js'; ?>"></script>

    <!-- Page level plugins -->
    <script type="text/javascript" src="<?= base_url() . 'assets/chart.js/Chart.min.js'; ?>"></script>

    <!-- DataTables for this page -->
    <script type="text/javascript" src="<?= base_url() . 'assets/DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url() . 'assets/DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js'; ?>"></script>

    <!-- Page level custom scripts -->
    <script type="text/javascript" src="<?= base_url() . 'assets/js/demo/datatables-demo.js'; ?>"></script>

</body>

</html>