<?php
    $controller = new UserController;
    $usersToList = $controller->index();


    if(isset($_POST['confirmationDelete'])){
        $result = $controller->destroy($_POST['idDelete']);
        header('location:'.HOME.'users');
    }

?>

<div class="container d-grid" style="background-color: #fff;">

<div>
  <input class="form-control" type="text" id="search" placeholder="Buscar" >
  <!-- <span class="icon is-small is-right">
    <i class="bi bi-search"></i>  
  </span> -->
</div>

<div>
    <table class="table table-striped table-hover table-responsive" id="table">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Permisos</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php if($usersToList): while($row = mysqli_fetch_array($usersToList)){?>
            <tr>
                <!-- <td><a href="clients/show/<?php echo $row['DNI']?>"><?php echo $row['ape_nom']?></a></td> -->
                <td><?php echo ucfirst($row['username'])?></td>                
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" <?php if($row['administrador'] == 1) echo "checked "?>disabled>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Administrador</label>
                    </div>
                </td>
                <td>
                    <a id="btnDeleteClient" data-bs-target="#confirmationModalDelete" data-accion="confirmationModalDelete" data-bs-toggle="modal" data-bs-recordId="<?php echo $row['id'];?>" data-bs-recordName="<?php echo ucfirst($row['username'])?>" class="btn btn-outline-danger btn-sm float-end mx-2"><i class="bi bi-trash"></i></a>
                    <a href="<?php echo HOME?>users/edit/<?php echo $row['id'];?>" class="btn btn-outline-primary btn-sm float-end mx-2"><i class="bi bi-pen"></i></a>
                    <a href="<?php echo HOME?>users/show/<?php echo $row['id'];?>" class="btn btn-outline-success btn-sm float-end mx-2"><i class="bi bi-search"></i></a>
                </td>
               
            </tr>
        <?php } endif ?>
    </tbody>
    </table>
</div>
</div>




<?php include_once('views/components/confirmationModalDelete.php'); ?>