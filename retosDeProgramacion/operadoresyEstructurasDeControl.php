<?php

// Operadores aritméticos//
$a = 10;
$b = 5;
$c = 3;

// Suma
echo "La suma entre " . $a . " y " . $b . " es: " . ($a + $b) . "\n";

// Resta
echo "La resta entre " . $a . " y " . $b . " es: " . ($a - $b) . "\n";

// Multiplicación
echo "La multiplicación entre " . $b . " y " . $c . " es: " . ($b * $c) . "\n";

// División
echo "La división entre " . $a . " y " . $b . " es: " . ($a / $b) . "\n";

//Módulo
echo "La residuo de la división entre " . $a . " y " . $c . " es: " . ($a % $c) . "\n";

//Operadores de logicos//

$a = 10;
$b = 0;

var_dump(($a and $b)); // Devuelve true si ambas expresiones son verdaderos
var_dump(($a or $b)); // Devuelve true si alguna de las expresión es verdadera
var_dump(($a xor $b)); //Devuelve true si una y solo una de las expresiones es verdadera.
var_dump(!($a && $b)); // Devuelve false si ambas expresiones son verdaderos
var_dump(($a && $b)); //Es igual que AND pero con mayor precedencia.
var_dump(($a || $b)); // Es equivalente a or, pero con mayor precedencia.

//Operadores de comparación //

$a = 5;
$b = 10;

var_dump($a == $b); //igual
var_dump($a === $b); //Identico
var_dump($a != $b); //Diferente
var_dump($a <> $b); //Diferente
var_dump($a !== $b); //No identico
var_dump($a < $b); // Menor que
var_dump($a > $b); // Mayor que
var_dump($a <= $b); //Menor o igual que
var_dump($a >= $b); //Mayor o igual que
var_dump($a <=> $b); //Nave espacial
var_dump($a ?? $b); //Funcion Null

//Operadores de asignación//

$a = 3; # Asignacion
$a += 5; #  suma y asignacion 
$a -= 4; # Resta y asigancion 
$a *= 2; #  Multiplicacion y asignacion
$a /= 1; # Division y asiganacion
$a %= 4; # módulo y asignación
$a **= 2; # exponente y asignacion
$bstr = "Hola";
$b .= " como estas"; #concatenacion y asignacion.

echo $a . "\n";
echo $b;


//Operadores de identidad Evalúan tanto el valor como el tipo de dato.

$a = 6;
$b = "seis";
$c = "hola";
$d = "Hola";
$e = true;
$d = false;

var_dump($a == $b); // Valores Numéricos
var_dump($a !== $b);
var_dump($c === $d); //Cadenas de Texto (string)
var_dump(true === true); //Valores Booleanos
var_dump(null === null); // Valores Nulos (null)
var_dump([1, 2, 3] === [1, 2, 3]);  //Arrays (array)

//Operadores de pertenencia//

$colores = ["verde", "negro", "blanco"]; //Se define el array
$resultado = in_array("verde", $colores); //Se verifica si existe el color verde en el array. Si la verificacion es verdadera, devuelve true
$segundoresultado = in_array("amarillo", $colores); //Se verifica si existe el color amarillo en el array. Si la verificacion es falsa, devuelve false
echo "Resultado 1: " . ($resultado ? 'true' : 'false') . "\n"; //Se utiliza el operador ternario para verificar el resultado
echo "Resultado 2: " . ($segundoresultado ? 'true' : 'false') . "\n";


//Operadores de bits//

$a = 10; #110 en binario
$b = 3; #011 en binario

echo ($a & $b) . "\n"; # AND (&)  si los dos (2) son uno (1) el resutlado es uno (1) de lo cotnrario es cero(0)
echo ($a | $b) . "\n"; #OR (|) si almenos uno de los dos es uno (1), el resltado es uno(1)
echo ($a ^ $b) . "\n"; #XOR (^) si loa dos son difertes el resultado es 1 y si son iguales el resultado es cero
echo (~$a) . "\n"; #NOT (~) intercambia el valor de cada elemento
echo (10 >> 2) . "\n"; #Desplazamiento a la derecha (>>) 
echo (10 << 2) . "\n"; #Desplazamiento a la izquierda (<<) 

//Operadores de incremento y decrmento

//Posincremento
$valor1 = 5;
echo $valor1++ . "\n";
echo $valor1 . "\n";

//Preincremento

$valor1 = 5;
echo ++$valor1 . "\n";
echo $valor1 . "\n";

//Posdecremento
$valor1 = 5;
echo $valor1-- . "\n";
echo $valor1 . "\n";

//Predecrmento
$valor1 = 5;
echo --$valor1 . "\n";
echo $valor1 . "\n";


//Estructuras de control//

#condicionales
$a = 55;
$b = 55;

#if

if ($a < $b) {
    echo "El numero " . $a . " es menor que el numero " . $b . "\n";
}

#else

if ($a < $b) {
    echo "El numero " . $a . " es menor que el numero " . $b . "\n";
} else {
    echo "El numero " . $a . " es mayor que el numero " . $b . "\n";
}

#elseif / else if

if ($a < $b) {
    echo "El numero " . $a . " es menor que el numero " . $b . "\n";
} elseif ($a === $b) {
    echo "El numero " . $a . " es igual que el numero " . $b . "\n";
} else {
    echo "El numero " . $a . " es mayor que el numero " . $b . "\n";
}

#Iteractivas

#for
for ($i = 1; $i < 20; $i++) {
    echo ($i) . "\n";
}

#while
$contador = 1;

#forma 1
while ($contador <= 10) {
    echo $contador++ . "\n";
}

#forma 2
while ($contador <= 10):
    echo $contador . "\n";
    $contador++;
endwhile;

#Do-while
$i = 1;
do {
    echo $i . "\n";
    $i++;
} while ($i <= 40);

#foreach (Iterar en los arrays )

$numeros = [1, 2, 3, 4, 5, 6, 7];
foreach ($numeros as &$numero) { #&es la referencia 
    $numero += 3;
}

print_r($numero);

#foreach con clave del elemento
$numeros = [1, 2, 3, 4, 5, 6];
foreach ($numeros as $numero => $valor) {
}
echo "La clave es: ".$numero . "\n";
echo "El valor es: ".$valor;

//Un ejemplo 
$productos = [
    "Mouse" => 400000,
    "Teclado" => 750000,
    "Torre" => 4600000,
    "Monitores" => 1400000,
];

$productosFiltrados = [];

foreach ($productos as $producto => $precio) {
    if ($precio > 500000) {
        $productosFiltrados[$producto] = $precio;
    }
}

echo "\nLos productos con un precio superior a $500.000 son:\n";
foreach ($productosFiltrados as $producto => $precio) {
    echo "- $producto: $precio\n";
}

#Otro ejemplo foreach


$personas = [
    "Ana" => 10,
    "Luis" => 15,
    "Carlos" => 18,
    "Marta" => 8,
    "Juan" => 13,
    "Sofía" => 25,
    "Tomás" => 12,
    "Laura" => 17
];

$ninosEntre0y12 = [];
$adolecentes13y17 = [];
$adultos = [];

foreach ($personas as $persona => $edad) {
    if ($edad > 0 && $edad <= 12) {
        $ninosEntre0y12[$persona] = $edad;
    } elseif ($edad > 12 && $edad <= 17) {
        $adolecentes13y17[$persona] = $edad;
    } else {
        $adultos[$persona] = $edad;
    }
}
echo "Los nombres se clasifican de la siguiente manera: \n";
echo "\nNiños: \n";

foreach ($ninosEntre0y12 as $persona => $edad) {
    echo "-$persona: $edad" . "\n";
}

echo "\nAdolecentes \n";
foreach ($adolecentes13y17 as $persona => $edad) {
    echo "-$persona: $edad" . "\n";
}
echo "\nAdultos:\n";
foreach ($adultos as $persona => $edad) {
    echo "- $persona: $edad años\n";
}



//ejercicio//
/*Crea un programa que imprima por consola todos los números comprendidos
 entre 10 y 55 (incluidos), pares, y que no son ni el 16 ni múltiplos de 3.*/

$contador = 10;

#while

while ($contador <= 55) {
    if ($contador % 2 === 0 and $contador !== 16 and $contador % 3 !== 0);
    echo $contador . "\n";
    $contador++;
}

#for

for ($i = 10; $i <= 55; $i++) {
    if ($i % 2 === 0 && $i !== 16 && $i % 3 !== 0) {
        echo $i . "\n";
    }
}
