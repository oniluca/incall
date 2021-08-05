<?php
     $controller = new UserController;
     $showUser= $controller->show($this->parameter);
?>
    


<div class="container-sm mb-5" style="width: 30%;">
    <form class="row g-3" id="formLoadUserData"  action="" method="POST" autocomplete="off">
        <div class="col-md-12 mb-1">
            <label for="inputUser" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="inputUser" name="inputUser" value="<?php echo ucfirst($showUser['username']);?>" disabled>
        </div> 
        <div class="col-md-12 mb-1 form-check form-switch mx-auto">
            <label class="form-check-label ms-3 mx-auto" for="switchAdmin"> Administrador</label>
            <input class="form-check-input mx-auto" type="checkbox" id="switchAdmin" name="switchAdmin" <?php if($showUser['administrador'] == 1) echo "checked ";?>disabled> 
        </div>
        <div class="col-md-12 mb-1">
            <label for="inputCreatedAt" class="form-label">Creado</label>
            <input type="text" class="form-control" id="inputCreatedAt" name="inputCreatedAt" value="<?php echo $showUser['fec_alta'];?>"disabled>
        </div>
        <div class="col-md-12 mb-1">
            <label for="inputLastModification" class="form-label">Ultima Modificacion</label>
            <input type="text" class="form-control" id="inputLastModification" name="inputLastModification" value="<?php echo $showUser['fec_modi'];?>"disabled>
        </div>
        
        <a href="../" class="btn btn-success">Atras</a>

    </form>    
</div>