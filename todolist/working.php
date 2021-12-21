<?php

include('login.php');
include('koneksi.php');
include('config.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="indexadmin.php">
                <img src="img/logo.png" alt="cv.banjar indah" width="160px" height="48px">
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <li class="nav-item">
                            <div class="ms-auto ms-md-0 me-3 me-lg-4">
                                <h5 style="color:white; " class="mb-0 p-2">To-do-list</h5>
                            </div>
                        </li>
            <!-- Navbar-->
            <ul class="navbar-nav d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="indexadmin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="create.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-plus"></i></div>
                                Create
                            </a>
                            <a class="nav-link" href="working.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-tasks"></i></div>
                                Task
                            </a>
                            <a class="nav-link" href="done.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-check"></i></div>
                                Done
                            </a>
                            <a class="nav-link" href="overdue.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-exclamation-triangle"></i></div>
                                Overdue
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        admin2
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Task</h1>
                        <div class="row">
                        <div class="container">
    <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Nama Tugas</th>
            <th>Deskripsi Tugas</th>
            <th>Deadline</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

<!-- page -->
    <?php
    $batas   = 10;
    $halaman = @$_GET['id'];
        if(empty($halaman)){
            $posisi  = 0;
            $halaman = 1;
        }
        else{
            $posisi  = ($halaman-1) * $batas;
        }

    $no = $posisi+1;

    $sql = "SELECT * FROM task order by id asc limit $posisi,$batas";
    $query = mysqli_query($db, $sql);

    $no_urut = 0;
    // isi tabel
    while($task = mysqli_fetch_array($query)){
        $no_urut++;
        echo "<tr>";

        echo "<td>".$task['nama_tugas']."</td>";
        echo "<td>".$task['deskripsi_tugas']."</td>";
        echo "<td>".$task['deadline']."</td>";

        echo "<td>";
        echo "<a href='pindah-done.php?id=".$task['id']."'></i>Selesai</a> | ";
        echo "<a href='pindah-overdue.php?id=".$task['id']."'>Overdue</a>";
        echo "</td>";

        echo "<td>";
        echo "<a href='hapus.php?id=".$task['id']."'>Hapus</a>";
        echo "</td>";

        echo "</tr>";
    }
    ?>
</tbody>
<?php
        $no++;
    
    ?>
</table>

<p>Total: <?php echo mysqli_num_rows($query) ?></p>
<?php

$query2     = mysqli_query($db, "SELECT * FROM task");
$jmldata    = mysqli_num_rows($query2);
$jmlhalaman = ceil($jmldata/$batas);
?>

<ul class="pagination">
        <?php
        for($i=1;$i<=$jmlhalaman;$i++) {
            if ($i != $halaman) {
                echo "<li class='page-item'><a class='page-link' href='working.php?halaman=$i'>$i</a></li>";
            } else {
                echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
            }
        }
        ?>
    </ul>
    </table>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
