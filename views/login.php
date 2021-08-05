<?php
     require_once('../config.php');
     require_once('../config/db.config.php'); 
     require_once('../controllers/AuthenticationController.php');
       
    
    $user = new AuthenticationController();
    // $user->create();
    if(isset($_POST['login'])){
        if($_POST['inputUser']!= null && $_POST['inputPassword']!=null){
            $userName=$_POST['inputUser'];
            $password=hash ( 'sha512' , $_POST['inputPassword'] ,true );
            $result = $user->Login($userName,$password);
        }
        if(isset($result)){	
            if($result==true){
                // echo ("mmm");
                header("location: ../");
                // echo $_SESSION['login'];
            }else{
                echo '<div id="notification" class="alert alert-danger alert-dismissible fade show position-absolute 
                    top-0 end-0 w-auto loginNotification fade-out" role="alert">
                    error al iniciar sesion, usuario y/o contraseña erronea, por favor vuelva a intentarlo.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            }	
        }else{
                echo '<div id="notification" class="alert alert-danger alert-dismissible fade show position-absolute 
                    top-0 end-0 w-auto loginNotification fade-out" role="alert">
                    Error al iniciar sesion, debe completar todos los campos, por favor vuelva a intentarlo.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';

        }
    }else{
        $user->logout();
                
    }

?>

        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo HOME; ?>resources/css/custom.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
</head>
<body>
        <!-- <form action="" method="POST">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="card border-info mb-3" >
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" type="submit">Iniciar sesion</button>
                        </div>
                    </div>
                </div>
            </div>
        </form> -->

<div class="container position-absolute top-50 start-50 translate-middle">
        <form action="" method="post" autocomplete="off">
            <div class="card text-center">
                <div class="card-header">
                    Nombre del Sistema
                </div>
                <div class="card-body m-5">
                    <h5 class="card-title">Iniciar sesion</h5>
                    <div class="col-md-6 m-2 mx-auto">
                        <input type="text" class="form-control" name="inputUser" placeholder="Usuario">
                        
                    </div>
                    <div class="col-md-6 m-2 mx-auto">
                        <input type="password" class="form-control" name="inputPassword" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary col-md-3 m-3" name="login" id="sendLogin">Ingresar</button>
                <div class="card-footer text-muted mt-5">
                    
                </div>
            </div>
        </form>
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo HOME; ?>resources/js/custom.js"></script>
</body>
</html>







