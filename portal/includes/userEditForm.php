<!-- Creation Form -->
<form action="control/userEditForm.ctrl.php" method="POST">
    <div class="form-group mb-2">
        <input type="hidden" name="edit_user_id" class="form-control" value="<?php echo $_GET['user']; ?>">
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Informazioni</h5>
                </div>
                <div class="card-body">
                <div class="form-group mb-2">
                        <label for="name" class="mb-1">Nome</label>
                        <input type="text" name="name" class="form-control" value= "<?php echo $user['name']; ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="last_name" class="mb-1">Cognome</label>
                        <input type="text" name="last_name" class="form-control" value="<?php echo $user['last_name']; ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="email" class="mb-1">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="password" class="mb-1">Password</label>
                        <input type="password" name="password" class="form-control" value="">
                    </div>
                    <div class="form-group mb-2">
                        <label for="user_status" class="mb-1">Stato</label>
                        <select id="user_status" class="form-control" name="user_status" required>
                            <option value="1" <?php echo ($user['u_status'] == 1) ? 'selected' : ''; ?>>Attivo</option>
                            <option value="0" <?php echo ($user['u_status'] == 0) ? 'selected' : ''; ?>>Disabilitato</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 text-end mt-3">
            <button type="submit" class="btn btn-primary">Modifica</button>
        </div>
    </div>
</form>
<!-- /Creation Form -->