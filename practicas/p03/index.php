<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida

        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '</ul>';

        echo "<br>";
        echo "<br>";
        echo "<h2>Ejericio 2</h2>";
        echo " <p>  Proporcionar los valores de $ a, $ b, $ c como sigue:</p> ";
        $a =  "ManejadorSQL";
        $b = 'MySQL';
        $c = &$a;
        $a = "PHP server";
        $b = &$a;

        echo "<h2> Ahora muestra el contenido de cada variable </h2>";
        
        echo ($a = "ManejadorSQL"); echo "<br>";
        echo ($b = "MySQL"); echo "<br>";
        echo ($c);
        echo ($a = "PHP Server"); echo "<br>";
        echo ($b); echo "<br>";

        echo "<h2>Agrega al código actual las siguientes asignaciones: </h2>";
        echo "
        <p>
        $a = “PHP server”; 
        $b = &
        $a;
        </p>";

        echo "<h2>Vuelve a mostrar el contenido de cada uno </h2>";
        echo ($a = "PHP Server"); echo "<br>";
        echo ($b); echo "<br>";
        echo "<p>Se agregaron nuevas asignaciones</p>";
    
        echo "<h2>
         Muestra el contenido de cada variable inmediatamente 
         después de cada asignación, verificar la evolución del tipo de estas variables 
         (imprime todos los componentes de los arreglo)
            </h2>";

            $a = "PHP5";
            echo "\$a = \"$a\"; Tipo: " . gettype($a) . "\n"; echo "<br>";
            $z[] = &$a;
            echo "\$z[] = &\$a; Tipo de \$z: " . gettype($z) . ", Tipo de \$z[0]: " . gettype($z[0]) . "\n"; echo "<br>";
            $b = "5a version de PHP";
            echo "\$b = \"$b\"; Tipo: " . gettype($b) . "\n";  echo "<br>";
          @  $c = $b * 10;
            echo "\$c = \$b * 10; Tipo: " . gettype($c) . "\n";  echo "<br>";
            $a .= $b;
            echo "\$a .= \$b; Tipo: " . gettype($a) . "\n";  echo "<br>";
            $b *= $c;
            echo "\$b *= \$c; Tipo: " . gettype($b) . "\n";  echo "<br>";
            $z[0] = "MySQL";
            echo "\$z[0] = \"MySQL\"; Tipo de \$z[0]: " . gettype($z[0]) . "\n";  echo "<br>";












    ?>


</body>
</html>