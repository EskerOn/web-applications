

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
    
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"votosDB");

    $mc=0;
    $morena=0;
    $pan=0;
    $prd=0;
    $pri=0;
    $pt=0;
    $pve=0;

  
  if(!$link)
             {
                echo "Error.";
              }
          
  
              else
              {

                //..................................................................MC
                $sql ="SELECT * FROM votos WHERE id_partido=6";
                $result= mysqli_query($link, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result)){
                      $mc++;
                  }
          
                  $id_partido= 6;

                  //SE LLENA LA BARRA DE VOTOS

                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$id_partido\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$id_partido."%'>
                      <span class='sr-only'>MC</span>
                    </div>
                  </div>
                  ";
                }

                //....................................................................... MORENA
                $sql ="SELECT * FROM votos WHERE  id_partido=7";
                $result= mysqli_query($link, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                      $morena++;
                  }


                 $id_partido= 7;

                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$id_partido."%'>
                      <span class='sr-only'>MORENA</span>
                    </div>
                  </div>
                  ";
                }

                // ............................................................................PAN
                $sql ="SELECT * FROM votos WHERE id_partido=1";
                $result= mysqli_query($link, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
               
                      $pan++;
                  }

                  $id_partido= 1;

                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$id_partido."%'>
                      <span class='sr-only'>PAN</span>
                    </div>
                  </div>
                  ";
                }

                // ....................................................................PRD
                $sql ="SELECT * FROM votos WHERE id_partido=3";
                $result= mysqli_query($link, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                      $prd++;
                  }

                  $id_partido= 3;

              
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$id_partido."%'>
                      <span class='sr-only'>PRD</span>
                    </div>
                  </div>
                  ";
                }


                 // ............................................................................PRI
                $sql ="SELECT * FROM votos WHERE id_partido=2";
                $result= mysqli_query($link, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                      $pri++;
                  }

                  $id_partido= 2;

       
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$id_partido."%'>
                      <span class='sr-only'>PRI</span>
                    </div>
                  </div>
                  ";
                }

                // ....................................................................PT
                $sql ="SELECT * FROM votos WHERE id_partido=4";
                $result= mysqli_query($link, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                      $pt++;
                  }

                  $id_partido= 4;

                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$id_partido."%'>
                      <span class='sr-only'>PT</span>
                    </div>
                  </div>
                  ";
                }


                  // ............................................................................PVE
                $sql ="SELECT * FROM votos WHERE id_partido=5";
                $result= mysqli_query($link, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    //if($row['voto_por'])
                      $pve++;
                  }


                  //$partidoid=$_REQUEST['voto'];
                  $id_partido= 5;

                  echo "<strong>Partido Verde</strong><br>";// APARECE NOMBRE DEL PARTIDO
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$id_partido."%'>
                      <span class='sr-only'>PVE</span>
                    </div>
                  </div>
                  ";
                }

                // ..............TERMINAN LOS PARTIDOS .......
                $Total = $prd + $pan + $pri + $morena + $pve + $pt;


               echo "<hr>";// INICIAMOS CONTEO TOTAL DE VOTOS 

                //$total=0;

                // Total
                //$sql ="SELECT * FROM votos";
                //$result= mysqli_query($link, $sql);

                //if(mysqli_num_rows($result)>0)
                //{
                  //while($row= mysqli_fetch_assoc($result))
                  //{
                    //if($row['id_partido'])
                      //$total++;
                  //}


                  //$tptal= $total*10;

                  echo "<strong>Número total de Votos</strong><br>";
                  echo "
                  <div class='text-primary'>
                    <h3 class='normalFont'>Votos : $Total </h3>
                  </div>
                  ";
                //}

              }
            ?>
    

</body>
</html>
