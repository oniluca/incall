
<div class="container-sm mb-5" style="width: 30%;">
    <form class="row g-3" id="userProfileForm"  action="" method="POST" autocomplete="off">
        <div class="col-md-12 mb-1">
            <label for="inputUser" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="inputUser" name="inputUser" value="<?php echo ucfirst($showProfile['username']);?>">
        </div>
        <div class="form-check ms-2">
            <input class="form-check-input" type="checkbox" value="" id="checkChangePassword">
            <label class="form-check-label" for="checkChangePassword">
                Cambiar Contraseña
            </label>
        </div>
        
        <div class="col-md-12 mb-1 hide" id="CurrentPassword">
            <label for="inputCurrentPassword" class="form-label">Contraseña Actual</label>
            <input type="password" class="form-control" id="inputCurrentPassword" name="inputCurrentPassword">
        </div>
        <div class="col-md-12 mb-1 hide" id="NewPassword">
            <label for="inputNewPassword" class="form-label">Nueva Contraseña</label>
            <input type="password" class="form-control" id="inputNewPassword" name="inputNewPassword">
        </div>
        <div class="col-md-12 mb-1 hide" id="RepeatNewPassword">
            <label for="inputRepeatNewPassword" class="form-label">Repetir Nueva Contraseña</label>
            <input type="password" class="form-control" id="inputRepeatNewPassword" name="inputRepeatNewPassword">

            <input type="checkbox" class="btn-check" id="checkShowPass" checked autocomplete="off">
            <label class="btn btn-link" for="checkShowPass"><i id='iconShowPass' class="bi bi-eye-slash-fill"></i></label>
            <label id="textShowPassword" class="form-check-label text-muted">Mostrar</label>
        </div>

        
            <button  type="submit" class="btn btn-primary col-md-5 mb-1 m-1 mt-4 mx-auto" name="send" id="saveChangeProfile" disabled>Guardar</button>
            <a href="<?php echo HOME ?>" class="btn btn-danger col-md-5 mb-1 m-1 mt-4 mx-auto">Cancelar</a>

    </form>    
</div>
