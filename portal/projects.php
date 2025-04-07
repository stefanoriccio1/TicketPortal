<!DOCTYPE html>
<html>

<head>
    <title>Mizuno - Projects</title>
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
            <?php
            include 'control/projectsDisplay.ctrl.php'
            ?>
            <!-- /Navbar -->
            <main class="content px-3 py-4 flex-grow-1">
                <!-- Error Handler -->
                <?php if (isset($_GET['inserted']) && $_GET['inserted'] == 'ok' && isset($_GET['message'])) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="loginAlert">
                        <strong> <?= base64_decode($_GET['message']); ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php if (isset($_GET['removed']) && $_GET['removed'] == 'ok' && isset($_GET['message'])) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="loginAlert">
                        <strong> <?= base64_decode($_GET['message']); ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <!-- /Error Handler -->
                <div class="container-fluid">
                    <div class="mb-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4>Progetti</h4>
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
                <!-- Project container -->
                <section>
                    <div class="row">
                        <div class="card">
                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome Progetto</th>
                                            <th>Numero Task Aperti</th>
                                            <th>Data Inizio</th>
                                            <th>Data Fine</th>
                                            <th>Stato</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($projects)) {
                                            foreach ($projects as $project) {
                                                echo '<tr>
                                                        <td>' . $project['id'] . '</td>
                                                        <td>' . $project['name'] . '</td>
                                                        <td></td>
                                                        <td>' . $project['date_start'] . '</td>
                                                        <td>' . $project['date_end'] . '</td>
                                                        <td>
                                                            <span class="badge bg-success">Aperto</span>
                                                        </td>
                                                        <td class= "text-end">
                                                            <a href="#" class="btn btn-primary">Modifica</a>
                                                            <form method="POST" action="control/projectForm.ctrl.php" style="display:inline;">
                                                            <input type="hidden" name="remove_project_id" value="' . $project["id"] . '">
                                                            <button type = "submit" class="btn btn-danger">Cancella</button>
                                                            </form>
                                                        </td>
                                                    </tr>';
                                            }
                                        } else {
                                            echo '<tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </section>
                <!-- /Project container -->
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