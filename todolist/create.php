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
                <form class="form-container" action="proses-form.php" method="POST">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Create New Task</h1>
                        <div class="row">
                        <div class="mb-3">
            <label class="form-label" for="nama_tugas">Nama Tugas: </label>
            <input class="form-control" type="text" name="nama_tugas" placeholder="Nama Tugas" required />
        </div>

        <div class="mb-3">
            <label class="form-label" for="deskripsi_tugas">Deskripsi Tugas: </label>
            <textarea class="form-control" name="deskripsi_tugas" placeholder="Deskripsi Tugas" required ></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label" for="deadline">Deadline: </label>
        <input class="form-control" name="deadline" type="datetime-local" required  />
        </div>  

        <div class="mb-3">
            <input type="Submit" class="btn btn-primary" value="Submit" name="Submit" />
        </div>
        </form>
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
