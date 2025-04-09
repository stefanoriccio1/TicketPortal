<!DOCTYPE html>
<html>

<head>
    <title>Mizuno - Projects Creation</title>
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
            <?php include "includes/navbar.php" ?>
            <!-- /Navbar -->
            <main class="content px-3 py-4 flex-grow-1">
                <div class="container-fluid">
                    <div class="mb-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4>Crea un nuovo progetto</h4>
                            </div>
                            <div class="col-auto ms-auto">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Nome pagina</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Creation Form -->
                <form action="control/projectForm.ctrl.php" method="POST">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    Generale
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-2">
                                        <label for="inputProjectLeader" class="mb-1">Project Type</label>
                                        <select id="project_type" class="form-control" name="project_type">
                                            <option selected="">Select one</option>
                                            <option value="Project Managment">Project Managment</option>
                                            <option value="CRM">CRM</option>
                                            <option value="Campagna social">Campagna social</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="project_name" class="mb-1">Nome Progetto</label>
                                        <input type="text" name="project_name" class="form-control">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="project_description" class="mb-1">Descrizione</label>
                                        <textarea name="project_description" rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="project_owner" class="mb-1">Owner</label>
                                        <input type="text" name="project_owner_display" class="form-control" value="<?php echo $_SESSION['user_name'] ?>" disabled>
                                        <input type="hidden" name="project_owner" value="<?php echo $_SESSION['userId']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    Info
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-4">
                                        <label for="date_start">Data Inizio</label>
                                        <input type="date" class="date-start form-control" name="date_start">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="date_end">Data Fine</label>
                                        <input type="date" class="date-end form-control" name="date_end">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="extimated_duration">Durata stimata</label>
                                        <input type="text" class="extimated-duration form-control" name="extimated_duration" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary">Crea</button>
                        </div>
                    </div>
                </form>
                <!-- /Creation Form -->
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