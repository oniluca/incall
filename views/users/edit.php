<?php
    $controller = new UserController;
    $showUser= $controller->show($this->parameter);

    if(isset($_POST['send'])){
        if(isset($_POST['switchAdmin'])&& $_POST['switchAdmin']=="on" ){ 
            $administrator = 1;
        }else{
            $administrator = 0;
        }
        
        $result = $controller->update($this->parameter,$_POST['inputUser'],$administrator);
        
        if($result){
            header('location:'.HOME.'users');
           // echo '<div id="notification" class="alert alert-success alert-dismissible fade show position-absolute 
           //         top-0 end-0 w-auto notification fade-out" role="alert">
           //         Nuevo cliente creado.
           //       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           //       </div>';

       }else{
           echo '<div id="notification" class="alert alert-danger alert-dismissible fade show position-absolute 
                   top-0 end-0 w-auto notification fade-out" role="alert">
                   Nuevo usuario no pudo ser creado.
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';

       }
    }
?>




<div class="container-sm mb-5" style="width: 30%;">
    <form class="row g-3" id="formLoadUserData"  action="" method="POST" autocomplete="off">
        <div class="col-md-12 mb-1">
            <label for="inputUser" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="inputUser" name="inputUser" value="<?php echo ucfirst($showUser['username']);?>">
        </div> 
        <div class="col-md-12 mb-1 form-check form-switch mx-auto">
            <label class="form-check-label ms-3 mx-auto" for="switchAdmin"> Administrador</label>
            <input class="form-check-input mx-auto" type="checkbox" id="switchAdmin" name="switchAdmin" <?php if($showUser['administrador'] == 1) echo "checked ";?>>  
        </div>
        
            <button  type="submit" class="btn btn-primary col-md-5 mb-1 m-1 mt-4 mx-auto" name="send">Guardar</button>
            <a href="<?php echo HOME ?>users" class="btn btn-danger col-md-5 mb-1 m-1 mt-4 mx-auto">Cancelar</a>

    </form>    
</div>