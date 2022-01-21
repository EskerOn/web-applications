<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones de matrices</title>
</head>
<body>
    <h3> Operaciones de Matrices </h3>
    <hr>
    <?php
        function suma($matrix1, $matrix2){
            $matrix3 = array();
            for ($i=0; $i < count($matrix1); $i++) { 
                for ($j=0; $j < count($matrix1[$i]); $j++) { 
                    $matrix3[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
                }
            }
            return $matrix3;
        }
        function resta($matrix1, $matrix2){
            $matrix3 = array();
            for ($i=0; $i < count($matrix1); $i++) { 
                for ($j=0; $j < count($matrix1[$i]); $j++) { 
                    $matrix3[$i][$j] = $matrix1[$i][$j] - $matrix2[$i][$j];
                }
            }
            return $matrix3;
        }
        function multiplicacion($matrix1, $matrix2){
            $matrix3 = array();
            for ($i=0; $i < count($matrix1); $i++) { 
                for ($j=0; $j < count($matrix2[0]); $j++) { 
                    $matrix3[$i][$j] = 0;
                    for ($k=0; $k < count($matrix1[0]); $k++) { 
                        $matrix3[$i][$j] = $matrix3[$i][$j] + $matrix1[$i][$k] * $matrix2[$k][$j];
                    }
                }
            }
            return $matrix3;
        }
        function transpuesta($matrix1){
            $matrix2 = array();
            for ($i=0; $i < count($matrix1[0]); $i++) { 
                for ($j=0; $j < count($matrix1); $j++) { 
                    $matrix2[$i][$j] = $matrix1[$j][$i];
                }
            }
            return $matrix2;
        }
        function llenarMatriz(&$Matrix, $filas, $columnas){
            for ($i = 0; $i < $filas; $i++) {
                for ($j = 0; $j < $columnas; $j++) {
                    $Matrix[$i][$j] = rand(0, 20);
                }
            }
        }
        function imprimirMatriz($Matrix){
            echo "<table border='1'>";
            for ($i = 0; $i < count($Matrix); $i++) {
                echo "<tr>";
                for ($j = 0; $j < count($Matrix[$i]); $j++) {
                    echo "<td>".$Matrix[$i][$j]."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }

        function multiplicacionEsPosible($matrix1, $matrix2){
            if (count($matrix1[0]) == count($matrix2)) {
                return true;
            }
            return false;
        }
        
        function sumaRestaEsPosible($matrix1, $matrix2){
            if (count($matrix1[0]) == count($matrix1[0]) && count($matrix1) == count($matrix2)) {
                return true;
            }
        }

        $filas_1 = $_REQUEST['filas1'];
        $columnas_1 = $_REQUEST['columnas1'];
        $filas_2 = $_REQUEST['filas2'];
        $columnas_2 = $_REQUEST['columnas2'];
        echo "Matriz 1: filas: $filas_1 columnas: $columnas_1 <br>";
        echo "Matriz 2: filas: $filas_2 columnas: $columnas_2 <br>";
        #define matrix1 and matrix2 2d arrays
        $matrix1 = array();
        $matrix2 = array();
        llenarMatriz($matrix1, $filas_1, $columnas_1);
        llenarMatriz($matrix2, $filas_2, $columnas_2);

        echo "matrix1: <br>";
        imprimirMatriz($matrix1);

        echo "matrix2: <br>";
        imprimirMatriz($matrix2);
        echo "<br>";
        echo "Operaciones: <br>";
        echo "Suma de matrices: <br>";
        if (sumaRestaEsPosible($matrix1, $matrix2)) {
            $matrix3 = suma($matrix1, $matrix2);
            imprimirMatriz($matrix3);
        }else{
            echo "No se puede realizar la operacion";
        }
        echo "<br>";
        echo "Resta de matrices: <br>";
        if (sumaRestaEsPosible($matrix1, $matrix2)) {
            $matrix3 = resta($matrix1, $matrix2);
            imprimirMatriz($matrix3);
        }else{
            echo "No se puede realizar la operacion";
        }
        echo "<br>";
        echo "Multiplicacion de matrices: <br>";
        if (multiplicacionEsPosible($matrix1, $matrix2)) {
            $matrix3 = multiplicacion($matrix1, $matrix2);
            imprimirMatriz($matrix3);
        }else{
            echo "No se puede realizar la operacion";
        }
        echo "<br>";
        echo "Transpuesta de matrices: <br>";
        echo "Matriz 1: <br>";
        $matrix3 = transpuesta($matrix1);
        imprimirMatriz($matrix3);
        echo "<br>";
        echo "Matriz 2: <br>";
        $matrix3 = transpuesta($matrix2);
        imprimirMatriz($matrix3);
        echo "<br>";



    ?>
</body>
</html>