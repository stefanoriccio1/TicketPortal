<!DOCTYPE html>
<html>

<head>
    <title>Mizuno - Users Creation</title>
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
                                <h4>Crea un nuovo Utente</h4>
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
                <form action="control/userCreateForm.ctrl.php" method="POST">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Informazioni</h5>
                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <input type="name" name="name" class="form-control" placeholder="Nome" required />
                                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="last_name" name="last_name" class="form-control" placeholder="Cognome" required />
                                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required />
                                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required />
                                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-end mt-5">
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