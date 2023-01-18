<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="LoanHome.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" />
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <style>
        a {
            text-decoration: none !important;
            color: black !important;
        }

        .scroll {
            width: 1100px !important;
            height: 500px !important;
            overflow-y: scroll !important;

        }

        .scroll::-webkit-scrollbar {
            display: none;
        }

        .login{
    border: 2px solid cornflowerblue;
    font-weight: 500 ;
    border-radius: 7px; 
   text-align: center;
    padding: 5px 10px !important;
   width: 100%;
}
 .login:hover{
    color: cornflowerblue;
}
.navbar{
    height: 100px !important;
    border-bottom: 4px solid rgb(255, 221, 0);
}
    </style>
</head>

<body id="page-top">
<nav class="navbar navbar-expand-lg sticky-top bg-white">
      <div class="container-fluid">
        <a class="navbar-brand ms-5 me-1 w-25 d-flex " href="./index.html"
        ><img src="cibil-logo.png" alt="logo.svg" width="20%" />
        <span class=" h3 ps-2 pt-3 " style='font-weight:bold;'>CIBIL</span>
        <span class=" ps-1 pt-4 h5 text-muted" style='font-weight:bold;'>SCORE</span>
      </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ul">
            <a class="nav-link login" href="../logins/logout.php"
              ><i class="bi bi-person"></i>Logout</a
            >
          </ul>
        </div>
      </div>
    </nav>
    <!-- login page -->
    <div id="wrapper" class="dashboard ">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion  " id="accordionSidebar">
      <hr class="sidebar-divider" />
      <div class="im text-center">
        <!-- Nav Item - Dashboard --><img class="rounded-circle mt-5" width="80px" class="img-fluid"
          src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" />
      </div>
      <li class="nav-item active mt-4 ms-3">
        <a class="nav-link" href="adminprofile.html">
          <i class="fas fa-fw fa-tachometer-alt" style="color:rgb(255, 255, 255);font-size:16px; font-weight:bold;"></i>
          <span style="color:rgb(222, 220, 220);font-size:16px; font-weight:bold;" >Admin Profile</span></a>
      </li>

      <!-- Divider -->

      <!-- Nav Item - Charts -->
      <li class="nav-item ms-3">
        <a class="nav-link " href="./databaseview.php">
          <i class="fas fa-fw fa-chart-area" style="color:rgb(255, 255, 255);font-size:16px;"></i>
          <span style="color:rgb(222, 220, 220);font-size:16px; font-weight:bold;">User Details view</span></a>
      </li>
      <li class="nav-item ms-3">
        <a class="nav-link" href="./userview.php">
          <i class="fas fa-fw fa-chart-area"style="color:rgb(255, 255, 255);font-size:16px; font-weight:bold;"></i>
          <span style="color:rgb(222, 220, 220);font-size:16px; font-weight:bold;">view login</span></a>
      </li>
      <li class="nav-item ms-3">
        <a class="nav-link" href="./bankadmin.php">
          <i class="fas fa-fw fa-chart-area" style="color:rgb(255, 255, 255);font-size:16px; font-weight:bold;"></i>
          <span style="color:rgb(222, 220, 220);font-size:16px; font-weight:bold;">Bank details</span></a>
      </li>
      <li class="nav-item ms-3">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog" style="color:rgb(255, 255, 255);font-size:16px; font-weight:bold;"></i>
          <span style="color:rgb(222, 220, 220);font-size:16px; font-weight:bold;">BANK LOGIN</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bank login Components:</h6>
            <a class="collapse-item" href="bankpro.php">BANK 1</a>
            <a class="collapse-item" href="bankpro2.php">BANK 2</a>
            <a class="collapse-item" href="bankpro3.php">BANK 3</a>

          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item ms-3">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-table"style="color:rgb(255, 255, 255);font-size:16px; font-weight:bold;"></i>
          <span style="color:rgb(222, 220, 220);font-size:16px; font-weight:bold;">Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0 me-2" id="sidebarToggle"></button>
      </div>
    



            <!-- Sidebar Message -->
        </ul>

        <div class="container mt-2 ">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-7 bg-primary" style="color: black !important;">
                    <div class="card p-3 py-4 bg-warning">
                        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                            <div class="text-center">
                                <img src="./IMG_20221115_223523-modified.png" width="150" class="rounded-circle" />
                            </div>

                            <div class="text-center mt-2">
                                <span class="bg-secondary p-1 px-4 rounded text-white">LOAN DETAILS</span><br />
                                <?php
            include 'database.php';

            if (isset($_GET['id']))
                ;
            $id = $_GET['id'];
            $result = mysqli_query($connect, "select * from loanbk2 where id='$id'"); ?>

                                <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            ?>

                                <h2 class="card-title mt1 text-capitalize">

                                    <?php echo $row['username'];
                $_SESSION['id'] = $row['id']; ?>
                                </h2>


                                <h5 class="card-title mt1 text-capitalize">
                                    <?php echo 'pan_no: ' ?>
                                    <?php echo $row['pan_no']; ?>
                                </h5>

                                <h5 class="card-title mt1 text-capitalize">
                                    <?php echo 'mobile_no: ' ?>
                                    <?php echo $row['mobile_no']; ?>
                                </h5>
                                <h5 class="card-title mt1 text-capitalize">
                                    <?php echo 'loan_id: ' ?>
                                    <?php echo $row['loan_id']; ?>
                                </h5>
                                <h5 class="card-title mt1 text-capitalize">
                                    <?php echo 'loan_type: ' ?>
                                    <?php echo $row['loan_type']; ?>
                                </h5>
                                <h5 class="card-title mt1 text-capitalize">
                                    <?php echo 'amount: ' ?>
                                    <?php echo $row['amount']; ?>
                                </h5>
                                <h5 class="card-title mt1 text-capitalize">
                                    <?php echo 'percent: ' ?>
                                    <?php echo $row['	penalty']; ?>
                                </h5>
                                <h5 class="card-title mt1 text-capitalize">
                                    <?php echo 'interest: ' ?>
                                    <?php echo $row['interest']; ?>
                                </h5>
                                <h5 class="card-title mt1 text-capitalize">
                                    <?php echo 'duemonth: ' ?>
                                    <?php echo $row['due_month']; ?>
                                </h5>
                                <h5 class="card-title mt1 text-capitalize">
                                  <?php echo 'monthly due: ' ?>
                                  <?php echo $row['monthly']; ?>
                                </h5>
                                <h5 class="card-title mt1 text-capitalize">
                                    <?php echo 'date_time : ' ?>
                                    <?php echo $row['date_time']; ?>
                                </h5>
                                <form method="post" action="">

                                    <input type="submit" name="approved" value="Approve" class="btn btn-success" />
                                    <input type="submit" name="rejected" value="Reject" class="btn btn-danger" />
                                    <input type="hidden" value=<?php echo $row['id']; ?> name="id" />
                                </form>


                                <?php

            }
            // include "database.php";
            $i = 1;
            $query = "select * from loanbk2";
            $sql = mysqli_query($connect, $query);
            $count = mysqli_num_rows($sql);

            $i++;
            if (isset($_POST['approved'])) {
                $idd = $_POST['id'];
                $sql2 = mysqli_query($connect, "update loanbk2 set status='Approved' where id='$idd'");
                $query22 = "INSERT into approved (id,status) values ('" . $_SESSION['id'] . "','Approved')";
                $sql3 = mysqli_query($connect, $query22);

            }
            if (isset($_POST['rejected'])) {
                $idd = $_POST['id'];

                $sql41 = mysqli_query($connect, "update loanbk2 set status='Rejected' where id='$idd'");
                $query5 = "INSERT into approved (id,status) values ('" . $_SESSION['id'] . "','Rejected')";
                $sql51 = mysqli_query($connect, $query5);

            }

            ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="./bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
        function fun() {
            // alert("You Want to Delete an Data");
            var result = confirm('you want to Delete');
            if (result == false) {
                event.preventDefault();
            }

        }
    </script>
</body>

</html>