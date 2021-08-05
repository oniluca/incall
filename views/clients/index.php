<?php

    $controller = new ClientController;
    $clientToList = $controller->index();
  
    if(isset($_POST['confirmationDelete'])){
        $result = $controller->destroy($_POST['idDelete']);
        // echo $_POST['idDelete'];
        header('location:'.HOME.'clients');
    }
    $links = array(
        '<a id="btnDeleteClient" data-bs-target="#confirmationModalDelete" data-accion="confirmationModalDelete" data-bs-toggle="modal" data-bs-recordId="idClient" data-bs-recordName="name" class="btn btn-outline-danger btn-sm float-end mx-2"><i class="bi bi-trash"></i></a>',
        '<a href="'.HOME.'clients/edit/idClient" class="btn btn-outline-primary btn-sm float-end mx-2"><i class="bi bi-pen"></i></a>',
        '<a href="'.HOME.'clients/show/idClient" class="btn btn-outline-success btn-sm float-end mx-2"><i class="bi bi-search"></i></a>'
    );
    include_once('views/components/clientList.php');
    include_once('views/components/confirmationModalDelete.php');
?>