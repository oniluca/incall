<?php
        $controller = new HomeController;
        $clientToList = $controller->index();
        // var_dump($clientToList);
      

        $links = array(
           '<a href="clients/show/idClient" class="btn btn-outline-success btn-sm"><i class="bi bi-search"></i></a>'
     
        );
        include_once('components/clientList.php');
?>


<!-- <td><a href="home/edit/7654">ddddddddddddddddd</a></td> -->
