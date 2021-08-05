<?php
    $show = isset($showClient) ? true : false;
    if($show){
        $explodeName = explode(' ',$showClient['ape_nom']);
        $location = $showClient['localidad']; 
    }
    $provinces = json_decode( file_get_contents('https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre'), true );

    if(isset($onlyShow)){
        // $onlyShow = $onlyShow == true ? "disabled" : "";
        if($onlyShow == true) $onlyShow = "disabled";
    }else $onlyShow = " ";
    if(isset($edit)){
        // $onlyShow = $onlyShow == true ? "disabled" : "";
        if($edit == true) $edit = "readonly";
    }else $edit = " ";
?>


<div class="container-sm mb-5" style="width: 60%;">
    <form class="row g-3 needs-validation" id="formLoadClientData"  action="" method="POST" novalidate>
        <div class="col-md-6 mb-1">
            <label for="inputSurname" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="inputSurname" name="inputSurname" aria-describedby="emailHelp" value="<?php if($show){echo $explodeName[0];} ?>"<?php echo $onlyShow ;?> required>
            <div id="inputSurnameFeedback" class="invalid-feedback">
             Please provide a valid city.
            </div>
        </div>
        <div class="col-md-6 mb-1">
            <label for="inputName" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="inputName" name="inputName" aria-describedby="emailHelp" value="<?php if($show){echo $explodeName[1];} ?>"<?php echo $onlyShow ;?>>
        </div>
        <div class=" col-md-6 mb-1">
            <label for="inputDni" class="form-label">Dni</label>
            <input type="text" class="form-control" id="inputDni" name="inputDni" aria-describedby="emailHelp"value="<?php if($show){echo $showClient['DNI'];} ?>"<?php echo $onlyShow ;?><?php echo $edit ;?>>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class=" col-md-6 mb-1">
            <label for="inputPostalCode" class="form-label">Codigo postal</label>
            <input type="text" class="form-control" id="inputPostalCode" name="inputPostalCode" aria-describedby="emailHelp"value="<?php if($show){echo $showClient['cod_postal'];} ?>"<?php echo $onlyShow ;?>>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="col-md-4 mb-1">
            <label for="selectProvinces" class="form-label">Provincia</label>
            <select class="form-select" aria-label="Default select example" id="selectProvinces" name="selectProvinces" <?php echo $onlyShow ;?>>
            <option></option>
                <?php for($i=0;$i<count($provinces['provincias']);$i++){ ?>
                    <?php if($show){ 
                        if( $showClient['provincia'] == $provinces['provincias'][$i]['nombre']){ ?>
                            <option value="<?php echo $provinces['provincias'][$i]['id']?>" selected="selected"><?php echo $provinces['provincias'][$i]['nombre']?> </option>
                        <?php }else{ ?>
                            <option value="<?php echo $provinces['provincias'][$i]['id']?>"><?php echo $provinces['provincias'][$i]['nombre']?> </option>
                        <?php }
                      }else{ ?>
                    
                    <option value="<?php echo $provinces['provincias'][$i]['id']?>"><?php echo $provinces['provincias'][$i]['nombre']?> </option>
                <?php } 
                } ?>    
            </select>
            <input type="hidden" id="inputSelectProvinces" name="inputSelectProvinces" value="">
        </div>
        <div class="col-md-4 mb-1">
            <label for="selectLocalities" class="form-label">Localidad</label>
            <select class="form-select" aria-label="Default select example" id="selectLocalities" name="selectLocalities" data-location ="<?php echo $location ?>"<?php echo $onlyShow ;?>>
                <?php if($show){ ?>
                    <option value="<?php echo $showClient['localidad'] ?>" selected="selected"><?php echo $showClient['localidad'] ?></option>
                <?php } ?>

                ?>
            </select>
        </div>
        <div class="col-md-4 mb-1">
            <label for="inputAddress" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="inputAddress"  name="inputAddress" aria-describedby="emailHelp" value="<?php if($show){echo $showClient['direccion'];} ?>"<?php echo $onlyShow ;?>>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="col-md-6 mb-1">
            <label for="inputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail1" name="inputEmail1" aria-describedby="emailHelp" value="<?php if($show){echo $showClient['email1'];} ?>"<?php echo $onlyShow ;?>>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="col-md-6 mb-1">
            <label for="inputEmail2" class="form-label">Email alternativo</label>
            <input type="email" class="form-control" id="inputEmail2" name="inputEmail2" aria-describedby="emailHelp" value="<?php if($show){echo $showClient['email2'];} ?>"<?php echo $onlyShow ;?>>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="col-md-6 mb-1">
            <label for="inputAssets" class="form-label">Bienes</label>
            <input type="text" class="form-control" id="inputAssets" name="inputAssets" aria-describedby="emailHelp" value="<?php if($show){echo $showClient['bienes'];} ?>"<?php echo $onlyShow ;?>>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="col-md-6 mb-1">
            <label for="inputSalaryBonus" class="form-label">Bono de sueldo</label>
            <input type="text" class="form-control" id="inputSalaryBonus" name="inputSalaryBonus" aria-describedby="emailHelp" value="<?php if($show){echo $showClient['bono_sueldo'];} ?>"<?php echo $onlyShow ;?>>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-1">
            <label for="inputBusiness" class="form-label">Empresa</label>
            <input type="text" class="form-control" id="inputBusiness" name="inputBusiness" aria-describedby="emailHelp" value="<?php if($show){echo $showClient['emp_bono'];} ?>"<?php echo $onlyShow ;?>>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="col-md-6 mb-1">
            <label for="inputCompanyAddress" class="form-label">Direccion empresa</label>
            <input type="text" class="form-control" id="inputCompanyAddress" name="inputCompanyAddress" aria-describedby="emailHelp" value="<?php if($show){echo $showClient['dire_emp_bono'];} ?>"<?php echo $onlyShow ;?>>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="col-md-6 mb-1">
            <label for="inputCompanyPhone" class="form-label">Telefono empresa</label>
            <input type="text" class="form-control" id="inputCompanyPhone" name="inputCompanyPhone" aria-describedby="emailHelp" value="<?php if($show){echo $showClient['tel_emp_bono'];} ?>"<?php echo $onlyShow ;?>>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <?php if ($onlyShow == "disabled"){?>
            <a href="../" class="btn btn-success">Atras</a>

       <?php }else{ ?>
            <button  type="submit" class="btn btn-primary col-md-5 mb-1 m-1 mt-4 mx-auto" name="send">Guardar</button>
            <a href="../" class="btn btn-danger col-md-5 mb-1 m-1 mt-4 mx-auto">Cancelar</a>
        <?php } ?>

    </form>    
</div>