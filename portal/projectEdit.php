<!DOCTYPE html>
<html>

<head>
    <title>Mizuno - Project Edit</title>
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
            <?php include "control/projectEditForm.ctrl.php" ?>
            <!-- /Navbar -->
            <?php include "includes/navbar.php" ?>
            <main class="content px-3 py-4 flex-grow-1">
                <div class="container-fluid">
                    <div class="mb-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4>Nome Progetto</h4>
                            </div>
                            <div class="col-auto ms-auto">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Nome pagina</a></li>
                                </ol>
                            </div>
                        </div>
                        <!-- Statistics container -->
                        <div class="row mt-3">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card text-bg-success mb-3">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3 class="card-title">2</h3>
                                            <small class="card-text">Task aperti</small>
                                        </div>
                                        <i class="fa-solid fa-folder-open" style="font-size: 50px;"></i>
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
                                            <small class="card-text">Task In Lavorazione</small>
                                        </div>
                                        <i class="fa-solid fa-person-digging" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="card-footer d-flex justify-content-center">
                                        <a class="text-decoration-none" style="color: inherit" href="#">More Info</a>
                                        <i class="fa-solid fa-circle-arrow-right ms-2 mt-1" style="color: inherit"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card text-bg-danger mb-3">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3 class="card-title">2</h3>
                                            <small class="card-text">Task In Overworking</small>
                                        </div>
                                        <i class="fa-solid fa-business-time" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="card-footer d-flex justify-content-center">
                                        <a class="text-decoration-none" style="color: inherit" href="#">More Info</a>
                                        <i class="fa-solid fa-circle-arrow-right ms-2 mt-1" style="color: inherit"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card text-bg-secondary mb-3">
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
                        <!-- /Statistic container -->
                        <!-- Sections container -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <section>
                                    <div class="card mb-3">
                                        <div class=card-header>
                                            <h5><i class="fa-solid fa-diagram-project me-2" style="font-size: 18px;"></i>Informazioni Progetto</h5>
                                        </div>
                                        <div class="card-body">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info-tab-pane" type="button" role="tab" aria-controls="info-tab-pane" aria-selected="true">Info</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="task-tab" data-bs-toggle="tab" data-bs-target="#task-tab-pane" type="button" role="tab" aria-controls="task-tab-pane" aria-selected="false">Task</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="info-tab-pane" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
                                                <?php include 'includes/projectEditForm.php'; ?>
                                                </div>
                                                <div class="tab-pane fade" id="task-tab-pane" role="tabpanel" aria-labelledby="task-tab" tabindex="0">Tutti i Task</div>
                                            </div>
                                        </div>
                                        <div class="card-footer"></div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- /Sections container -->
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