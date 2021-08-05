<?php
    $controller = new ClientController;
       
    if(isset($_POST['send'])){
        $fullName = $_POST['inputSurname']." ".$_POST['inputName'];
        $result = $controller->create($_POST['inputDni'],$fullName,$_POST['inputAddress'],
        $_POST['selectLocalities'],$_POST['inputSelectProvinces'],$_POST['inputPostalCode'],
        $_POST['inputEmail1'],$_POST['inputEmail2'],$_POST['inputAssets'],
        $_POST['inputSalaryBonus'],$_POST['inputBusiness'],$_POST['inputCompanyAddress'],$_POST['inputCompanyPhone']);
			
        if($result){
             header('location:'.HOME.'clients');
            // echo '<div id="notification" class="alert alert-success alert-dismissible fade show position-absolute 
            //         top-0 end-0 w-auto notification fade-out" role="alert">
            //         Nuevo cliente creado.
            //       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            //       </div>';

        }else{
            echo '<div id="notification" class="alert alert-danger alert-dismissible fade show position-absolute 
                    top-0 end-0 w-auto notification fade-out" role="alert">
                    Nuevo cliente no pudo ser creado.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';

        }
        
    }
    

    include_once('views/components/formCreateUpdateClient.php')
?>