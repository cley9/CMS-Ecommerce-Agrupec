<?php
    include "./conexion.php";
    $email =$_POST['email'];
    $token =$_POST['token'];
    $codigo =$_POST['codigo'];
    $res=$conexion->query("select * from passwords where
        email='$email' and token='$token' and codigo=$codigo")or die($conexion->error);
    $correcto=false;
    if(mysqli_num_rows($res) > 0){
        $fila = mysqli_fetch_row($res);
        $fecha =$fila[4];//al areglo del ultimo campo osea fecha
        $fecha_actual=date("Y-m-d h:m:s");
        $seconds = strtotime($fecha_actual) - strtotime($fecha);
        $minutos=$seconds / 60;
       /* if($minutos > 10 ){
            echo "token vencido";
        }else{
            echo "todo correcto";
        }*/
        $correcto=true;
    }else{
        $correcto=false;
                  

    }
// ---------------------------------------------------------------------nuevo password cambio


// include("includes/header.php");
$FileContents_h = file_get_contents("http://agrupec.com/includes/desing.php");
echo $FileContents_h;

?>

    <div class="container mb-5">
          <div class="row justify-content-md-center d-flex justify-content-center" >

            <?php if($correcto){ ?>
                <form class="col-md-4 col-10 p-5 shadow " action="./verificar.php" method="POST">
                    <h2 class="fw-normal text-center mb-3">Restablecer Password</h2>

                    <div class="mb-3">
                        <label for="c" class="form-label">Nuevo Password</label>
                        <input type="password" class="form-control" id="c" name="p1" required/>

                    </div>
                    <div class="mb-3">
                        <label for="c" class="form-label">Confirmar Password</label>
                        <input type="password" class="form-control" id="c" name="p2" required/>
                        <input type="hidden" class="form-control" id="c" name="email" value="<?php echo $email?>">

                    </div>
                    <div class="text-center">
                      <button type="submit" name="evaluarP" class="btn col-6 btn-primary">Cambiar</button>
                    </div>
                </form>
                <!--<div class="d-flex justify-content-center">-->
                <!--                <div class="col-10 col-md-4 mb-5">-->
                <!--                  <div class="alert alert-success  d-flex align-items-center" >-->
                <!--                  <i class="bi bi-check-circle-fill text-success flex-shrink-0 me-2" style="font-size:24px; color:"></i>-->
                <!--                  <span>  <strong>Usuario</strong>Contrase0Š9a incorrecta <?php //echo $resPassword; ?>-->
                <!--</span>-->
                <!--</div>-->
                <!--</div>-->
                <!--</div>-->
            <?php }else{ ?>

     <div class="d-flex justify-content-center" style="margin-top:12%;">
                                <div class="col-10 col-md-5 mb-5">
                                  <div class="alert alert-danger  d-flex align-items-center text-center" >
                                  <i class="bi bi-exclamation-triangle-fill text-danger flex-shrink-0 me-2" style="font-size:24px; color:"></i>
                                  <span class="text-center"> C&oacute;digo incorrecto o vencido,vuelva a intentarlo </span>
                </div>
                </div>
                </div>

            <?php } ?>

        </div>
    </div>

<?php
// include("includes/footer.php");
// $FileContents_f = file_get_contents("http://agrupec.com/includes/footer.php");
// echo $FileContents_f;
?>
