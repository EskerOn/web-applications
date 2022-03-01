
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

                $Total=0;

                // Total
                $sql ="SELECT * FROM votos";
                $result= mysqli_query($link, $sql);

                if(mysqli_num_rows($result)>0){
                  while($row= mysqli_fetch_assoc($result)){
                    if($row['id_partido'])
                      $Total++;
                  }
                }

                //..................................................................MC
                $sql ="SELECT * FROM votos WHERE id_partido=6";
                $result= mysqli_query($link, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result)){
                      $mc++;
                  }

                  echo "Votos Moviento ciudadano: ".$mc."<br>";

                  //SE LLENA LA BARRA DE VOTOS

                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$mc* 100/$Total."%'>
                      <span class='sr-only'>MC</span>
                    </div>
                  </div>
                  ";
                }

                //....................................................................... MORENA
                $sql ="SELECT * FROM votos WHERE id_partido=7";
                $result= mysqli_query($link, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                      $morena++;
                  }

                 echo "Votos Morena: ".$morena."<br>";
                

                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ". ceil($morena*100/$Total) ."%'>
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

                   echo "Votos PAN: ".$pan."<br>";

                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".ceil ($pan*100/$Total)."%'>
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

               echo "Votos PRD: ".$prd."<br>";

              
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".ceil($prd*100/$Total)."%'>
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
                  echo "Votos PRI: ".$pri."<br>";

       
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".ceil(100/$Total*$pri)."%'>
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

               echo "Votos PRD: ".$pt."<br>";

                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".ceil(100/$Total*$pt)."%'>
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
                    
                      $pve++;
                  }


                  echo "Votos Partido verde ".$pve."<br>";

                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".ceil(100/$Total*$pve)."%'>
                      <span class='sr-only'>PVE</span>
                    </div>
                  </div>
                  ";
                }

                // ..............TERMINAN LOS PARTIDOS .......
                //$Total = $mc+ $prd + $pan + $pri + $morena + $pve + $pt;


               

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
