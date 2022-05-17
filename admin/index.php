<?php 
    $title = "Dashboard Admin";
    require "includes/header.php"; 
    
    if (!isset($_SESSION)) 
    {
        session_start();
    }

?>

            <div class="container-fluid">

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
</ol>

<div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">26 New Messages!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
  <i class="fas fa-angle-right"></i>
</span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">11 New Tasks!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
  <i class="fas fa-angle-right"></i>
</span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">123 New Orders!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
  <i class="fas fa-angle-right"></i>
</span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 New Tickets!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
  <i class="fas fa-angle-right"></i>
</span>
            </a>
        </div>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i> Data Table Penjualan</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Order</th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $query = mysqli_query($connect, "SELECT * FROM transaksi ");
                        $data = mysqli_fetch_assoc($query);
                        if(mysqli_num_rows($query) > 0)
                        {
                            $no = 1;
                            do
                            {
                                ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td><?=$data['tgl_transaksi'];?></td>
                                        <td><?=$data['nama_buyer'];?></td>
                                        <td><?=$data['alamat_buyer'];?></td>
                                        <td><?=$data['#'];?></td>
                                        <td><?=$data['#'];?></td>
                                    </tr>
                                <?php
                            }while($data = mysqli_fetch_assoc($query));
                        }
                        else
                        {
                            echo "<tr><td colspan='7'><center>Belum ada data!</center></td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

</div>

</div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <a class="btn btn-primary" href="login.php">Logout</a>
</div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?=BASE_URL;?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?=BASE_URL;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=BASE_URL;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?=BASE_URL;?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="<?=BASE_URL;?>assets/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?=BASE_URL;?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="<?=BASE_URL;?>assets/js/sb-admin.min.js"></script>
<script src="<?=BASE_URL;?>assets/js/demo/datatables-demo.js"></script>
<script src="<?=BASE_URL;?>assets/js/demo/chart-area-demo.js"></script>

</body>

</html>