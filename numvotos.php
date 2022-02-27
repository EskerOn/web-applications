
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de total de votos por partido</title>
</head>
<body>
<h1>VOTOS POR PARTIDO  </h1><!-- encabezado-->


    <?php  
    
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"voto_por");

    $mc=0;
    $morena=0;
    $pan=0;
    $prd=0;
    $pri=0;
    $pt=0;
    $pve=0;

  
  if(!$conn)
             {
                echo "Error.";
              }
          
  
              else
              {

                //..................................................................MC
                $sql ="SELECT * FROM tbl_users WHERE voto_por='mc'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voto_por'])
                      $mc++;
                  }
                  $partidoid=$_REQUEST['voto'];
                  $id_partido= $mc*10;

                  //SE LLENA LA BARRA DE VOTOS

                  echo "<strong>movimiento ciudadano</strong><br>";// APARECE NOMBRE DEL PARTIDO
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$id_partido\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$id_partido."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }

                //....................................................................... MORENA
                $sql ="SELECT * FROM tbl_users WHERE voto_por='morena'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voto_por'])
                      $morena++;
                  }


                 $partidoid=$_REQUEST['voto'];
                 $id_partido= $mc*10;

                  echo "<strong>Partido MORENA</strong><br>";// APARECE NOMBRE DEL PARTIDO
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$id_partido."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }

                // ............................................................................PAN
                $sql ="SELECT * FROM tbl_users WHERE voto_por='pan'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voto_por'])
                      $pan++;
                  }


                  $partidoid=$_REQUEST['voto'];
                  $id_partido= $mc*10;

                  echo "<strong>Partido PAN</strong><br>";// APARECE NOMBRE DEL PARTIDO
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$id_partido."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }

                // ....................................................................PRD
                $sql ="SELECT * FROM tbl_users WHERE voto_por='PV'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voto_por']) 
                      $prd++;
                  }


                  $partidoid=$_REQUEST['voto'];
                  $id_partido= $prd*10;

                  echo "<strong>Partido PRD</strong><br>";// APARECE NOMBRE DEL PARTIDO
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$id_partido."%'>
                      <span class='sr-only'>TMC</span>
                    </div>
                  </div>
                  ";
                }


                 // ............................................................................PRI
                $sql ="SELECT * FROM tbl_users WHERE voto_por='pan'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voto_por'])
                      $pri++;
                  }


                  $partidoid=$_REQUEST['voto'];
                  $id_partido= $pri*10;

                  echo "<strong>Partido PRI</strong><br>";// APARECE NOMBRE DEL PARTIDO
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$id_partido."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }

                // ....................................................................PT
                $sql ="SELECT * FROM tbl_users WHERE voto_por='PV'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voto_por'])
                      $pt++;
                  }


                  $partidoid=$_REQUEST['voto'];
                  $id_partido= $pt*10;

                  echo "<strong>Partido PT</strong><br>";// APARECE NOMBRE DEL PARTIDO
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$id_partido."%'>
                      <span class='sr-only'>TMC</span>
                    </div>
                  </div>
                  ";
                }


                  // ............................................................................PVE
                $sql ="SELECT * FROM tbl_users WHERE voto_por='pve'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voto_por'])
                      $pve++;
                  }


                  $partidoid=$_REQUEST['voto'];
                  $id_partido= $pve*10;

                  echo "<strong>Partido Verde</strong><br>";// APARECE NOMBRE DEL PARTIDO
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$id_partido."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }

                // ..............TERMINAN LOS PARTIDOS .......



               echo "<hr>";// INICIAMOS CONTEO TOTAL DE VOTOS 

                $total=0;

                // Total
                $sql ="SELECT * FROM tbl_users";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voto_por'])
                      $total++;
                  }


                  $tptal= $total*10;

                  echo "<strong>Número total de Votos</strong><br>";
                  echo "
                  <div class='text-primary'>
                    <h3 class='normalFont'>Votos : $total </h3>
                  </div>
                  ";
                }

              }
            ?>
    

</body>
</html>