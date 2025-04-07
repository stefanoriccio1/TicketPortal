<nav class="navbar navbar-expand px-4 bg-white border-bottom border-secondary">
    <button class="toggle-btn" type="button">
        <i class="fa-solid fa-bars"></i>
    </button>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Utenti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="projects.php">Progetti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Task</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Statistiche</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto" style="display: <?php echo $isLoggedIn ? 'flex' : 'none'; ?>">
            <li class="nav-item">
                <a class="btn btn-danger text-white" href="control/logout.ctrl.php">Logout</a>
            </li>
        </ul>

    </div>
</nav>