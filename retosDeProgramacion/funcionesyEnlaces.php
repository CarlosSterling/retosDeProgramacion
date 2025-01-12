<?php
#Predefinidas

$longitud = strlen("Hola Carlos")."\n";
echo $longitud;

#Definidas por el usuario

function saludame( )
{
    echo "Hola, como estas?\n";
}
saludame();

function saludar($carlos )
{
    echo "Hola".$carlos." como estas?\n";
}
saludar(" Carlos");
