<!DOCTYPE html>
<html>

<head>
    <title>Mizuno - Users</title>
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
            include 'control/usersDisplay.ctrl.php'
            ?>
            <!-- /Navbar -->
            <main class="content px-3 py-4 flex-grow-1">
                <!-- Error Handler -->
                <?php if (isset($_GET['created']) && $_GET['created'] == 'ok' && isset($_GET['message'])) : ?>
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
                <?php if (isset($_GET['updated']) && $_GET['updated'] == 'ok' && isset($_GET['message'])) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="loginAlert">
                        <strong> <?= base64_decode($_GET['message']); ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <!-- /Error Handler -->
                <div class="container-fluid">
                    <div class="mb-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4>Elenco Utenti</h4>
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
                <!-- User container -->
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
                                            <th>Nome Utente</th>
                                            <th>Email</th>
                                            <th>Stato</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($users)) {
                                            foreach ($users as $user) {
                                                echo '<tr>
                                                        <td>' . $user['id'] . '</td>
                                                        <td>' . $user['name'] . " " . $user['last_name'] . '</td>
                                                        <td>' . $user['email'] . '</td>
                                                        <td>' . $user['u_status'] . '</td>
                                                        <td class= "text-center">';
                                                if ($user['u_status'] == 1) {
                                                    echo '<span class="badge bg-success"> Attivo </span>';
                                                } else {
                                                    echo '<span class="badge bg-danger"> Disabilitato </span>';
                                                }

                                                echo '</td>
                                                        <td class= "text-end">';
                                                if ($user['u_status'] == 0) {
                                                    echo
                                                    '<form method="POST" action="control/userCreateForm.ctrl.php" style="display:inline;">
                                                            <input type="hidden" name="reactivate_user_id" value="' . $user["id"] . '">
                                                            <button type = "submit" class="btn btn-warning">Riattiva</button>
                                                     </form>';
                                                }
                                                echo        '<form method="POST" action="control/userEditForm.ctrl.php" style="display:inline;">
                                                                <input type="hidden" name="display_edit_user_id" value="' . $user["id"] . '">
                                                                <button type = "submit" class="btn btn-primary">Modifica</button>
                                                            </form>
                                                            <form method="POST" action="control/userCreateForm.ctrl.php" style="display:inline;">
                                                                <input type="hidden" name="remove_user_id" value="' . $user["id"] . '">
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
                                        </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer text-end">
                                <a href="userCreate.php" class="btn btn-info">Crea Nuovo Utente</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /User container -->
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