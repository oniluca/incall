
<div class="container d-grid" style="background-color: #fff;">

<div>
  <input class="form-control" type="text" id="search" placeholder="Buscar" >
  <!-- <span class="icon is-small is-right">
    <i class="bi bi-search"></i>  
  </span> -->
</div>

<div>
    <table class="table table-striped table-hover" id="table">
    <thead>
        <tr>
            <th>Apellido y Nombre</th>
            <th>Localidad</th>
            <th>Provincia</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php if($clientToList): while($row = mysqli_fetch_array($clientToList)){?>
            <tr>
                <td><a href="clients/show/<?php echo $row['DNI']?>"><?php echo ucfirst($row['ape_nom'])?></a></td>
                <td><?php echo $row['localidad']?></td>
                <td><?php echo $row['provincia']?></td>
                <td>
                <?php for($i=0;$i<(count($links));$i++){
                    // $link=str_replace("idClient", $row["DNI"], $links[$i]);
                    // $link=str_replace("name", $row["ape_nom"], $links[$i]);
                    $link=str_replace(array("name","idClient"),array($row["ape_nom"],$row["DNI"]) , $links[$i]);
                    echo $link;
                 } ?>
                </td>
            </tr>
        <?php } endif ?>
    </tbody>
    </table>
</div>
</div>