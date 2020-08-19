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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Users Table</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?>
                                <span>
                                    <a href="<?= site_url('AdminDashboard/adduser') ?>" class="btn btn-primary float-right">
                                        <i class="fas fa-plus"><span class="ml-2">Add Users</span></i>
                                    </a>
                                </span>
                            </h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Phone Number</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Phone Number</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        if ($c_user > 0) {
                                            foreach ($user as $datas) {
                                        ?>
                                                <tr>
                                                    <td><?= $datas->nama_lengkap; ?></td>
                                                    <td><?= $datas->username; ?></td>
                                                    <td><?= $datas->password; ?></td>
                                                    <td><?= $datas->telp; ?></td>
                                                    <td>
                                                        <a href="<?= site_url('AdminDashboard/edituser') ?>" class="btn btn-warning">
                                                            <i class="fas fa-edit"><span class="ml-2">Edit</span></i>
                                                        </a>
                                                        <a href="<?= site_url('AdminDashboard/deleteuser') ?>" class="btn btn-danger">
                                                            <i class="fas fa-trash"><span class="ml-2">Delete</span></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="8">
                                                    <center> No Data Entry! </center>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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