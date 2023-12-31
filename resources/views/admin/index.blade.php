
@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">

       <!-- Page Heading -->
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
       </div>

       <!-- Content Row -->
       <div class="row">


           <!-- Earnings (Monthly) Card Example -->
           <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-success shadow h-100 py-2">
                   <div class="card-body">
                       <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                   Panggil Ambulance</div>
                               <div class="h5 mb-0 font-weight-bold text-gray-800">
                                   <?php
                                    $connection = mysqli_connect("localhost", "root", "", "ctdb");

                                    $query = "SELECT id FROM pambulan ORDER BY id";
                                    $query_run = mysqli_query($connection, $query);

                                    $row = mysqli_num_rows($query_run);

                                    echo "<h1> $row </h1>";
                                    ?>

                               </div>
                           </div>
                           <div class="col-auto">
                               <i class="fas fa fa-ambulance fa-2x text-gray-300"></i>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Earnings (Monthly) Card Example -->
           <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-info shadow h-100 py-2">
                   <div class="card-body">
                       <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                   Panggil Bantuan</div>
                               <div class="row no-gutters align-items-center">
                                   <div class="col-auto">
                                       <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                           <?php
                                            $connection = mysqli_connect("localhost", "root", "", "ctdb");

                                            $query = "SELECT id FROM panakes ORDER BY id";
                                            $query_run = mysqli_query($connection, $query);

                                            $row = mysqli_num_rows($query_run);

                                            echo "<h1> $row </h1>";
                                            ?>
                                       </div>
                                   </div>
                                   <!-- <div class="col">
                                       <div class="progress progress-sm mr-2">
                                           <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
                                   </div> -->
                               </div>
                           </div>
                           <div class="col-auto">
                               <i class="fas fa fa-user-md fa-2x text-gray-300"></i>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Pending Requests Card Example -->
           <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-warning shadow h-100 py-2">
                   <div class="card-body">
                       <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                   Total Pasien</div>
                               <div class="h5 mb-0 font-weight-bold text-gray-800">
                                   <?php
                                    $connection = mysqli_connect("localhost", "root", "", "ctdb");

                                    $query = "SELECT id FROM users where role=0 ORDER BY id";
                                    $query_run = mysqli_query($connection, $query);

                                    $row = mysqli_num_rows($query_run);

                                    echo "<h1> $row </h1>";
                                    ?>
                               </div>
                           </div>
                           <div class="col-auto">
                               <i class="fas fa fa-server fa-2x text-gray-300"></i>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           
       <!-- Earnings (Monthly) Card Example -->
       <div class="col-xl-3 col-md-6 mb-4">
           <div class="card border-left-danger shadow h-100 py-2">
               <div class="card-body">
                   <div class="row no-gutters align-items-center">
                       <div class="col mr-2">
                           <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                               Jumlah Petugas</div>
                           <div class="h5 mb-0 font-weight-bold text-gray-800">
                               <?php
                                $connection = mysqli_connect("localhost", "root", "", "ctdb");

                                $query = "SELECT id FROM users where role=1 ORDER BY id ";
                                $query_run = mysqli_query($connection, $query);

                                $row = mysqli_num_rows($query_run);

                                echo "<h1> $row </h1>";
                                ?>
                           </div>
                       </div>
                       <div class="col-auto">
                           <i class="fas fa-fw fa-tachometer-alt fa-2x text-gray-300"></i>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       </div>
   </div>
   @endsection