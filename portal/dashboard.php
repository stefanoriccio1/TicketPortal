<!DOCTYPE html>
<html>

<head>
  <title>Mizuno - Dashboard</title>
  <?php include "includes/head.php"?>
</head>

<body>
  <!-- Wrapper -->
    <div class="wrapper">
        <!-- Sidebar -->
        <?php include "includes/sidebar.php"?>
        <!-- /Sidebar -->
        <div class="main ">
          <!-- Navbar -->
          <?php include "includes/navbar.php"?>
          <!-- /Navbar -->
            <main class="content px-3 py-4 flex-grow-1">
                <div class="container-fluid">
                    <div class="mb-3">
                        <div class="row align-items-center">
                            <div class="col">
                              <h4>Dashboard</h4>
                            </div>
                            <div class="col-auto ms-auto">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Nome pagina</a></li>
                              </ol>
                            </div>
                        </div>
                        <!-- Statistics container -->
                        <div class= "row mt-3">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                              <div class="card text-bg-info mb-3">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                  <div>
                                    <h3 class="card-title">150</h3>
                                    <small class="card-text">Ticket aperti</small>
                                  </div>
                                  <i class="fa-solid fa-bag-shopping" style= "font-size: 50px;"></i>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                  <a class= "text-decoration-none" style="color: inherit" href="#">More Info</a>
                                  <i class="fa-solid fa-circle-arrow-right ms-2 mt-1" style="color: inherit"></i>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                              <div class="card text-bg-success mb-3">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                  <div>
                                    <h3 class="card-title">53%</h3>
                                    <small class="card-text">Ticket chiusi</small>
                                  </div>
                                  <i class="fa-solid fa-chart-simple" style= "font-size: 50px;"></i>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                  <a class= "text-decoration-none" style="color: inherit" href="#">More Info</a>
                                  <i class="fa-solid fa-circle-arrow-right ms-2 mt-1" style="color: inherit"></i>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                              <div class="card text-bg-warning mb-3">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                  <div>
                                    <h3 class="card-title">44</h3>
                                    <small class="card-text">Gestione Utenti</small>
                                  </div>
                                  <i class="fa-solid fa-user-plus" style= "font-size: 50px;"></i>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                  <a class= "text-decoration-none" style="color: inherit" href="#">More Info</a>
                                  <i class="fa-solid fa-circle-arrow-right ms-2 mt-1" style="color: inherit"></i>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                              <div class="card text-bg-danger mb-3">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                  <div>
                                    <h3 class="card-title">65</h3>
                                    <small class="card-text">Statistiche</small>
                                  </div>
                                  <i class="fa-solid fa-chart-pie" style= "font-size: 50px;"></i>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                  <a class= "text-decoration-none" style="color: inherit" href="#">More Info</a>
                                  <i class="fa-solid fa-circle-arrow-right ms-2 mt-1" style="color: inherit"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        <!-- /Statistic container -->
                        <!-- Sections container -->
                        <div class= "row mt-3">
                            <div class="col-lg-7 col-md-12">
                              <section>
                                <div class="card mb-3">
                                  <div class=card-header>
                                    <h5><i class="fa-regular fa-clipboard me-2" style="font-size: 18px;"></i>Task Assegnati</h5>
                                  </div>
                                  <div class="card-body">
                                    <ul id="task-list" class="list-group">
                                      <li class="list-group-item draggable mb-2 rounded-1 border" draggable="true">
                                        <i class="fa-solid fa-grip-vertical me-3"></i><input type="checkbox" aria-label="Checkbox for following text input" class="form-check-input me-3">1 - Creazione Interfaccia
                                        <span class="badge bg-info ms-3"><i class="fa-regular fa-clock me-2"></i>17/08/2024</span>
                                        <div class= "icon float-end">
                                          <a href="#" data-bs-toggle="modal" data-bs-target="#TaskEditorModal"><i class="fa-solid fa-pen-to-square me-1" style ="color: red;"></i></a>
                                          <i class="fa-solid fa-trash" style ="color: red;"></i>
                                        </div>
                                      </li>
                                      <li class="list-group-item draggable mb-2 rounded-1 border" draggable="true">
                                        <i class="fa-solid fa-grip-vertical me-3"></i><input type="checkbox" aria-label="Checkbox for following text input" class="form-check-input me-3">2 - Modifica contenuti dei Task
                                        <span class="badge bg-info ms-3"><i class="fa-regular fa-clock me-2"></i>02/09/2024</span>
                                        <div class= "icon float-end">
                                          <a href="#" data-bs-toggle="modal" data-bs-target="#TaskEditorModal"><i class="fa-solid fa-pen-to-square me-1" style ="color: red;"></i></a>
                                          <i class="fa-solid fa-trash" style ="color: red;"></i>
                                        </div>
                                      </li>
                                      <li class="list-group-item draggable mb-2 rounded-1 border" draggable="true">
                                        <i class="fa-solid fa-grip-vertical me-3"></i><input type="checkbox" aria-label="Checkbox for following text input" class="form-check-input me-3">3 - Endpoint per il salvataggio dati
                                        <span class="badge bg-info ms-3"><i class="fa-regular fa-clock me-2"></i>18/04/2024</span>
                                        <div class= "icon float-end">
                                          <a href="#" data-bs-toggle="modal" data-bs-target="#TaskEditorModal"><i class="fa-solid fa-pen-to-square me-1" style ="color: red;"></i></a>
                                          <i class="fa-solid fa-trash" style ="color: red;"></i>
                                        </div>
                                      </li>
                                      <li class="list-group-item draggable mb-2 rounded-1 border" draggable="true">
                                        <i class="fa-solid fa-grip-vertical me-3"></i><input type="checkbox" aria-label="Checkbox for following text input" class="form-check-input me-3">4 - Ottimizzazione Interfaccia
                                        <span class="badge bg-info ms-3"><i class="fa-regular fa-clock me-2"></i>01/03/2024</span>
                                        <div class= "icon float-end">
                                          <a href="#" data-bs-toggle="modal" data-bs-target="#TaskEditorModal"><i class="fa-solid fa-pen-to-square me-1" style ="color: red;"></i></a>
                                          <i class="fa-solid fa-trash" style ="color: red;"></i>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="card-footer"></div>
                                </div>
                              </section>
                            </div>
                            <div class="col-lg-5 col-md-12">
                              <section>
                              <div class="card mb-3">
                                <div class=card-header>
                                  <h5><i class="fa-regular fa-clipboard me-2" style="font-size: 18px;"></i>Progetto</h5>
                                </div>
                                <div class="card-body">
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                  <h5 class="card-title">Attività #1</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet</p>
                                  <p class="card-text">A Tendere:</p>
                                  <ul>
                                    <li><p class="card-text">Sviluppo di un sistema di login con capabilities (admin/operatore)</p></li>
                                    <li><p class="card-text">Lorem ipsum dolor sit amet</p></li>
                                    <li><p class="card-text">Lorem ipsum dolor sit amet</p></li>
                                    <li><p class="card-text">Lorem ipsum dolor sit amet</p></li>
                                    <li><p class="card-text">Lorem ipsum dolor sit amet</p></li>
                                    <li><p class="card-text">Lorem ipsum dolor sit amet</p></li>
                                    <li><p class="card-text">Lorem ipsum dolor sit amet</p></li>
                                  </ul>
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
            <?php include "includes/footer.php"?>
            <!-- /Footer -->
        </div>
    </div>
  <!-- /Wrapper -->
  <!-- Script -->
  <?php include "includes/script.php"?>
</body>

</html>