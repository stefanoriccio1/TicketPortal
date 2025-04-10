<!DOCTYPE html>
<html>

<head>
    <title>Mizuno - User Edit</title>
    <?php include "includes/head.php" ?>
</head>

<body>
    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Sidebar -->
        <?php include "includes/sidebar.php" ?>
        <!-- /Sidebar -->
        <div class="main ">
            <!-- Navbar -->
            <?php include "control/userEditForm.ctrl.php" ?>
            <!-- /Navbar -->
            <?php include "includes/navbar.php" ?>
            <!-- calling the getUse function in userEditForm.ctrl.php to get user name -->
            <?php $user = getUser($_GET['user']); ?>
            <main class="content px-3 py-4 flex-grow-1">
                <div class="container-fluid">
                    <div class="mb-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4> <?php echo $user['name'] . " " . $user['last_name'] ?></h4>
                            </div>
                            <div class="col-auto ms-auto">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Nome pagina</a></li>
                                </ol>
                            </div>
                        </div>
                        <!-- Project Statistics container -->
                        <div class="row mt-3">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card text-bg-info mb-3">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3 class="card-title">2</h3>
                                            <small class="card-text">Progetti</small>
                                        </div>
                                        <i class="fa-solid fa-bars-progress" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="card-footer d-flex justify-content-center">
                                        <a class="text-decoration-none" style="color: inherit" href="#">More Info</a>
                                        <i class="fa-solid fa-circle-arrow-right ms-2 mt-1" style="color: inherit"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card text-bg-warning mb-3">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3 class="card-title">3</h3>
                                            <small class="card-text">Task Assegnati</small>
                                        </div>
                                        <i class="fa-solid fa-paperclip" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="card-footer d-flex justify-content-center">
                                        <a class="text-decoration-none" style="color: inherit" href="#">More Info</a>
                                        <i class="fa-solid fa-circle-arrow-right ms-2 mt-1" style="color: inherit"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card text-bg-primary mb-3">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3 class="card-title">Germany</h3>
                                            <small class="card-text">Company</small>
                                        </div>
                                        <i class="fa-solid fa-flag" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="card-footer d-flex justify-content-center">
                                        <a class="text-decoration-none" style="color: inherit" href="#">More Info</a>
                                        <i class="fa-solid fa-circle-arrow-right ms-2 mt-1" style="color: inherit"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card text-bg-dark mb-3">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3 class="card-title">5</h3>
                                            <small class="card-text">Task chiusi</small>
                                        </div>
                                        <i class="fa-solid fa-lock" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="card-footer d-flex justify-content-center">
                                        <a class="text-decoration-none" style="color: inherit" href="#">More Info</a>
                                        <i class="fa-solid fa-circle-arrow-right ms-2 mt-1" style="color: inherit"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Project Statistic container -->
                        <!-- Navs container -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <section>
                                    <div class="card mb-3">
                                        <div class=card-header>
                                            <h5><i class="fa-solid fa-diagram-project me-2" style="font-size: 18px;"></i>Informazioni Utente</h5>
                                        </div>
                                        <div class="card-body">
                                            <ul class="nav nav-tabs" id="userTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="user-info-tab" data-bs-toggle="tab" data-bs-target="#user-info-tab-pane" type="button" role="tab" aria-controls="info-tab-pane" aria-selected="true">Generali</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="user-task-tab" data-bs-toggle="tab" data-bs-target="#user-task-tab-pane" type="button" role="tab" aria-controls="task-tab-pane" aria-selected="false">Task</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="userTabContent">
                                                <!-- Project Edit Form -->
                                                <div class="tab-pane fade show active" id="user-info-tab-pane" role="tabpanel" aria-labelledby="user-info-tab" tabindex="0">
                                                    <?php include 'includes/userEditForm.php'; ?>
                                                </div>
                                                <!-- /Project Edit Form -->
                                                <!-- Project Tasks -->
                                                <div class="tab-pane fade" id="user-task-tab-pane" role="tabpanel" aria-labelledby="user-task-tab" tabindex="0">
                                                    <?php include 'includes/userTask.php'; ?>
                                                </div>
                                                <!-- /Project Tasks -->
                                            </div>
                                        </div>
                                        <div class="card-footer"></div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- /Navs container -->
                    </div>
                </div>
            </main>
            <!-- Footer -->
            <?php include "includes/footer.php" ?>
            <!-- /Footer -->
        </div>
    </div>
    <!-- /Wrapper -->
    <!-- Script -->
    <?php include "includes/script.php" ?>
</body>

</html>