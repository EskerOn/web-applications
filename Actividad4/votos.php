
<?php
        
    $file=fopen('votaciones.txt','a+') or die("error al crear archivo");

    $nombre=$_REQUEST['nombre'];
    $voto=$_REQUEST['voto'];

    $fullname = explode(" ", $nombre);
    $nombre = $fullname[0];

    fwrite($file,$nombre);
    fwrite($file,"\t");
    fwrite($file,$voto);
    fwrite($file,"\n");

    fclose($file);

    $votospri = 0;
    $votospan = 0;
    $votosprd = 0;
    $votosmorena = 0;
    $votosnulos = 0;
    
    #reading file
    $file=fopen('votaciones.txt','r') or die("error al abrir archivo");
    while(!feof($file)){
        $linea=fgets($file);
        str_replace(" ","",$linea);
        $lineaItems=explode("\t",$linea);
        
        #check the length of the line == 2
        if(count($lineaItems)==2){

            if($lineaItems[1]=="pri\n"){
                $votospri++;
            }else if($lineaItems[1]=="pan\n"){
                $votospan++;
            }else if($lineaItems[1]=="prd\n"){
                $votosprd++;
            }else if($lineaItems[1]=="morena\n"){
                $votosmorena++;
            }else if($lineaItems[1]=="nulo\n"){
                $votosnulos++;
            }
        }
    }
    fclose($file);
    echo "Votos PRI: ".$votospri."<br>";
    echo "Votos PAN: ".$votospan."<br>";
    echo "Votos PRD: ".$votosprd."<br>";
    echo "Votos MORENA: ".$votosmorena."<br>";
    echo "Votos NULOS: ".$votosnulos."<br>";       
?>


