<?php
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="<?php echo HOME; ?>resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo HOME; ?>resources/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
  
  </head>
  


  <body>
  	<header>
      <?php include_once('views/navigationMenu.php')?>
  	</header>

	  <section>
	  	<?php 
        
        
        // if(empty($_GET["url"])){
        //   $url[0] = false;
        // }else{
        //   $url = explode('/', $_GET["url"]);
        // }
       
	  		// if ($router->validateGet($url[0])){
	  		// 	$router->loadView($url[0]);
	  		// }


        $router = new Router();
          if(!empty($_GET['url'])){
            $url = $_GET['url'];
          }else{
            $url = '';
          }
           
            $url = rtrim($url,'/');
            $url = explode('/',$url);
          
            // var_dump($url);
            
            // $fileControlller = 'controllers/'.$url[0].'Controller.php';

            // if(file_exists($fileControlller)){
            //     require_once($fileControlller);
            //     $controller = $url[0];
            //     $controller.="Controller";
            //     $controller = new $controller;

            //     if (isset($url[1])) {
            //         $controller->{$url[1]}();
            //     }
            // }else{
            //     // $controller = new Error();
            // }
        if ($router->validateGet(isset($url[0]))){
          if (isset($url[2])){
            $router->setParameter($url[2]);

            // $controller = rtrim($url[0], "s")."Controller";
            // $controller = new $controller;
            // $controller->setParameter($url[2]);
            
          }
          if (isset($url[1])) {
            $router->loadView($url[0],$url[1]);
          }else{
            $router->loadView($url[0]);
          }
	  			
	  		}

        // $controller = $router->getController();
        // $method = $router->getMethod();
        // $param = $router->getParam();

        // // echo "Controlador: {$controller} </br>";
        // // echo "Método: {$method} </br>";
        // // echo "Param: {$param} </br>";

        // $controller .= "Controller";
        // $controller = new $controller();
        // $controller->$method( $param);

	  	 ?>

	    
	  </section>


	  <footer>
      <?php include_once('views/footer.php')?>
	  </footer>

    <!-- <script type="text/javascript" src="<?php echo HOME; ?>resources/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
    <script type="text/javascript" src="<?php echo HOME; ?>resources/js/custom.js"></script>
  </body>
 

</html>