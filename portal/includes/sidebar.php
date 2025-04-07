<?php include 'control/loginVerify.ctrl.php';?>
<aside id="sidebar">
            <div class="d-flex img-logo">
                <img src="images/logo.png" class="img-circle " alt="Logo Image">               
                <div class="sidebar-logo">
                    <a href="#"> Task Manager</a>
                </div>
            </div>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex border-top border-bottom">
                <div class="img-logo">
                  <img src="images/logo.png" class="img-circle" alt="User Image">
                </div> 
                <div class="sidebar-logo">
                    <a href="#"> Stefano Riccio</a>
                </div>               
              </div>
            <ul class="sidebar-nav">               
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="fa-solid fa-user"></i>
                        <span>User</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Action</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Another Action</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Something else here</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="fa-solid fa-diagram-project"></i>
                        <span>Project</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Elenco progetti
                            </a>                            
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#task" aria-expanded="false" aria-controls="task">
                        <i class="fa-solid fa-list-check"></i>
                        <span>Task</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Action</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Another Action</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Something else here</a>
                        </li>
                    </ul>
                </li>  
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>