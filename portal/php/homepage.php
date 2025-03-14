<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Task Manager</title>
    <script src="https://kit.fontawesome.com/8facfa452a.js" crossorigin="anonymous"></script>
</head>
<!-- Wrapper -->
<body>
<!-- Navbars Container -->
<div class="container-fluid vh-100 navbars_container">
    <div class="row vh-100">
        <!-- Sidebar -->
        <aside class="col-3 col-lg-2 bg-dark text-white d-flex flex-column p-3 collapse d-none d-md-block" id= "sidebar">
            <div class="d-flex align-items-center mb-3 border-bottom pb-2 border-secondary">
                <img src="../img/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top rounded-circle me-2">
                <h6 class="mb-0">Task Manager</h6>
            </div>
            <div class="d-flex align-items-center mb-3 border-bottom pb-2 border-secondary">
                <img src="../img/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top rounded-circle me-2">
                <p class="mb-0">Stefano</p>
            </div>
            <ul class="nav flex-column">
              <li class="nav-item bg-primary rounded">
                <button class="nav-link text-white d-flex align-items-center justify-content-between w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSidebar" aria-expanded="false" aria-controls="collapseSidebar">
                  <div class="d-flex align-items-center flex-grow-1">
                    <i class="fas fa-tachometer-alt me-2"></i>
                    <span>Dashboard</span>
                  </div>
                  <i class="fas fa-chevron-down"></i>
                </button>
                <div class="collapse bg-dark" id="collapseSidebar">
                  <ul class="list-unstyled">
                    <li><a class="nav-link text-white" href="#">Action</a></li>
                    <li><a class="nav-link text-white" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider bg-white"></li>
                    <li><a class="nav-link text-white" href="#">Something else here</a></li>
                  </ul>
                </div>
              </li>
            </ul>
        </aside>
        <!-- /Sidebar -->
        <!-- Main -->
        <main class="col">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg bg-body-white">
            <button id="sidebarButton" class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-controls="sidebar">
              <span class="fas fa-bars"></span>
            </button>
                <div class="container-fluid">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /Navbar -->
            <!-- Main Menù -->
            <div class="container p-3">
              <!-- Header -->
              <div class="row align-items-center">
                <div class="col">
                  <h4>Dashboard</h4>
                </div>
                <div class="col-auto ms-auto">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  </ol>
                </div>
              </div>
              <!-- /Header -->
               <!-- Cards Container -->
                <div class="container-fluid">
                  <div class= "row">
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
                </div>
               <!-- /Cards Container -->
               <!-- Sections Container -->
                  <div class="container-fluid">
                    <div class= "row">
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
                  </div>
                <!-- /Sections Container -->
                <!-- Footer -->
                <footer>
                  
                </footer>
                <!-- /Footer -->
            </div>
            <!-- /Main menù -->
        </main>
        <!-- /Main -->
    </div>
</div>
 <!-- Navbars Container -->
</body>
<!-- /Wrapper -->

<!-- Modale -->
<div class="modal fade" id="TaskEditorModal" tabindex="-1" aria-labelledby="TaskEditorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TaskEditorModalLabel">Creazione / Modifica Task</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
        <div class="mb-3">
          <label for="TaskTitle" class="form-label fw-bold">Nome Task</label>
          <input type="email" class="form-control" id="TaskTitle" placeholder="Aggiungi Titolo Task">
        </div>
        <div class="mb-3">
          <label for="TaskText" class="form-label fw-bold">Descrizione Task</label>
          <textarea class="form-control" id="TaskText" rows="4"></textarea>
        </div>
        <div class="mb-3">
          <label for="taskDate" class="form-label fw-bold">Data</label>
          <input type="date" class="form-control" id="taskDate">
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
        <button type= "button" class="btn btn-primary">Salva/Modifica</button>
      </div>
    </div>
  </div>
</div>
<!-- /Modale -->
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="../js/script.js"></script>
<!-- /JavaScript -->
</html>