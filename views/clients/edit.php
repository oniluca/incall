<?php

    $controller = new ClientController;
    $showClient= $controller->show($this->parameter);
    $edit = true;

    if(isset($_POST['send'])){
        $fullName = $_POST['inputSurname']." ".$_POST['inputName'];
        $result = $controller->update($_POST['inputDni'],$fullName,$_POST['inputAddress'],
        $_POST['selectLocalities'],$_POST['inputSelectProvinces'],$_POST['inputPostalCode'],
        $_POST['inputEmail1'],$_POST['inputEmail2'],$_POST['inputAssets'],
        $_POST['inputSalaryBonus'],$_POST['inputBusiness'],$_POST['inputCompanyAddress'],$_POST['inputCompanyPhone']);
			
        if($result){
            header('location:'.HOME.'clients');
            echo '<div class="notification is-primary is-light">
                  <button class="delete"></button>
                  Cliente modificado correctamente.
            </div>';

        }else{
            echo '<div class="notification is-danger is-light">
                  <button class="delete"></button>
                  El cliente no pudo ser modificado.
            </div>';

        }
        
        // echo $_POST['inputDni'];
        // echo $fullName;
        // echo $_POST['inputAddress'];
        // echo $_POST['selectLocalities'];
        // echo $_POST['inputSelectProvinces'];
        // echo $_POST['inputPostalCode'];
        // echo $_POST['inputEmail1'];
        // echo $_POST['inputEmail2'];
        // echo $_POST['inputAssets'];
        // echo $_POST['inputSalaryBonus'];
        // echo $_POST['inputBusiness'];
        // echo $_POST['inputCompanyAddress'];
        // echo $_POST['inputCompanyPhone'];
    }
    include_once('views/components/formCreateUpdateClient.php');
?>
    