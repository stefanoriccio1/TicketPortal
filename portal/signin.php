<!DOCTYPE html>
<html>

<head>
    <title>Mizuno - Signin</title>
    <?php include "includes/head.php"?>
</head>

<body class="vh-100 d-flex justify-content-center align-items-center bg-body-secondary">

    <div class="login-box">

        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <div class="login-logo text-center">
                    <a href=""><img src="images/mizuno.png" class="w-100" alt="Mizuno Logo"></a>
                </div>
                <!-- Error Handler -->
                <?php if (isset($_GET['error']) && $_GET['error'] == 1 && isset($_GET['message'])) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="loginAlert">
                        <strong> <?= base64_decode($_GET['message']); ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php endif; ?>
                <?php if (isset($_GET['signin']) && $_GET['signin'] == 1 && isset($_GET['message'])) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="loginAlert">
                        <strong> <?= base64_decode($_GET['message']); ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <!-- /Error Handler -->
                <p class="login-box-msg">Inserisci le tue credenziali</p>
                <form action="control/signin.ctrl.php" method="post">
                    <div class="input-group mb-3">
                        <input type="name" name="name" class="form-control" placeholder="Nome" required />
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="last_name" name="last_name" class="form-control" placeholder="Cognome" required/>
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required/>
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required/>
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    </div>
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Registrati</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!--end::Row-->
                </form>

            </div>
            <!-- /.login-card-body -->
             <div class="card-footer text-center">
                <a href="login.php">Se hai già un account clicca qui per eseguire il Login</a>
             </div>
        </div>
    </div>
    <!-- Script -->
    <?php include "includes/script.php" ?>
</body>

</html>