<?php

    $controller = new UserController;
    $showProfile= $controller->show($_SESSION['id']);
    $edit = false;


    if(isset($_POST['send'])){
       if(!empty($_POST['inputUser'])){
        $result= $controller->updateProfile($_SESSION['id'],$_POST['inputUser']);
       }
       if (!empty($_POST['inputCurrentPassword'] && $_POST['inputNewPassword'] )){
            $currentPassword=hash ( 'sha512' , $_POST['inputCurrentPassword'] ,true );
            $newPassword=hash ( 'sha512' , $_POST['inputNewPassword'] ,true );
            $result= $controller->updatePassword($_SESSION['id'],$currentPassword,$newPassword);
       }
       if($result){
        header('location:'.HOME);
       // echo '<div id="notification" class="alert alert-success alert-dismissible fade show position-absolute 
       //         top-0 end-0 w-auto notification fade-out" role="alert">
       //         Nuevo cliente creado.
       //       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       //       </div>';

   }else{
       echo '<div id="notification" class="alert alert-danger alert-dismissible fade show position-absolute 
               top-0 end-0 w-auto notification fade-out" role="alert">
               Datos de perfil no pudieron ser actualizados.
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';

   }
        
    }




 include_once('views/components/userProfileForm.php')
?>