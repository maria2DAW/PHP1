<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es" >
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //Esta función nos muestra la configuración del servidor
            //de aplicaciones
            //phpinfo();
            
            //Imprimir en pantalla
            echo 'Hola <br />Mundo <h1>cruel</h1>';
            
            //Variables
            $nombre = 'María';
            $Nombre = 'Rengel';
            
            //Concatenación de cadenas y variables
            echo $nombre.'&nbsp;'.$Nombre;
            echo '<br />';
            
            $num1 = 5;
            $num2 = 78;
            
            $suma = $num1 + $num2;
            
            echo $suma;
            
            echo "<br />La variable \$suma tiene el valor de $suma";
            echo "<br />";
            
            $modulo = $num1 % 2;
            //$modulo = $num2 % 2;
            
            if($modulo == 0)
            {
                echo "El número es par";
            }
            
            else
            {
                echo "El número es impar";
            }
            
            for($i = 0; $i <= 10; $i++)
            {
                echo $i."<br />";
            }
        ?>
    </body>
</html>
