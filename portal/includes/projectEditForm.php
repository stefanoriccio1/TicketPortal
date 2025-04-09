<!-- Creation Form -->
<?php $project = getProject($_GET['project']); ?>
<form action="control/projectEditForm.ctrl.php" method="POST">
    <div class="form-group mb-2">
        <input type="hidden" name="final_edit_project_id" class="form-control" value="<?php echo $_GET['project']; ?>">
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Generale
                </div>
                <div class="card-body">
                    <div class="form-group mb-2">
                        <label for="inputProjectLeader" class="mb-1">Project Type</label>
                        <select id="project_type" class="form-control" name="project_type" required>
                            <option value="" <?php echo ($project["project_type"] == '') ? 'selected' : ''; ?>>Select one</option>
                            <option value="Project Managment" <?php echo ($project["project_type"] == 'Project Managment') ? 'selected' : ''; ?>>Project Managment</option>
                            <option value="CRM" <?php echo ($project["project_type"] == 'CRM') ? 'selected' : ''; ?>>CRM</option>
                            <option value="Campagna social" <?php echo ($project["project_type"] == 'Campagna social') ? 'selected' : ''; ?>>Campagna social</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="project_name" class="mb-1">Nome Progetto</label>
                        <input type="text" name="project_name" class="form-control" value="<?php echo $project['name']; ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="project_description" class="mb-1">Descrizione</label>
                        <textarea name="project_description" rows="4" class="form-control" required><?php echo $project['description']; ?></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="project_status" class="mb-1">Stato</label>
                        <select id="project_status" class="form-control" name="project_status" required>
                            <option value="1" <?php echo ($project['p_status'] == 1) ? 'selected' : ''; ?>>Aperto</option>
                            <option value="0" <?php echo ($project['p_status'] == 0) ? 'selected' : ''; ?>>Chiuso</option>
                        </select>
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
                        <input type="date" class="date-start form-control" name="date_start" value="<?php echo $project['date_start']; ?>" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="date_end">Data Fine</label>
                        <input type="date" class="date-end form-control" name="date_end" value="<?php echo $project['date_end']; ?>" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="extimated_duration">Durata stimata</label>
                        <input type="text" class="extimated-duration form-control" name="extimated_duration" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 text-end">
            <button type="submit" class="btn btn-primary">Modifica</button>
        </div>
    </div>
</form>
<!-- /Creation Form -->