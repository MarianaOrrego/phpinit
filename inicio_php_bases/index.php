<?php 
    // echo se emplea para imprimir en pantalla, siempre se debe finalizar con ; cada línea

    // Dentro de un echo se emplea la etiqueta <br> para realizar el salto de línea
    echo "PRIMEROS PASOS EN PHP" ."<br>". "Saltos de línea"; 

    // nl2br( "\n" ): es para realizar un salto de línea, si \n se encuentra al comienzo de la línea
    // se genera un salto de línea respecto a la anterior, si se encuentra al final, genera un salto 
    // de línea respecto a la siguiente
    echo nl2br("\nSalto de línea empleando 'nl2br()' al inicio y final\n "); 
    echo nl2br("Fin saltos de línea\n"); 

    // Bloques en PHP
    // variable, se crea empleando el signo de peso ( $ )
    $variable;

    // Agregar datos a variable
    $variable = 'VARIABLES';

    // Imprimir la variable empleando echo
    echo $variable;

    // Hay que tener en cuenta que PHP es sensible a la escritura de la variable, por ejemplo:
    $Variable = 'Es una nueva Variable';
    $_variable = 'Es una nueva _variable';

    // Se encuentran los diferentes tipos de variables:
    $int = 1;
    $float = 100.10;
    $bool = true;
    $string= 'Es un string';

    // En PHP no es necesario incluir el tipo de dato que contendrá la variable, permite poner
    // cualquier tipo de dato en una variable, incluyendo las variables ya utilizadas.
    $number = 1;
    $number = 'one';

    // Operaciones matematicas en PHP
    $a = 1;
    $b = 3;

    // Para sumar:
    echo $a + $b;

    // Para restar:
    echo $a - $b;

    // Para multiplicar:
    echo $a * $b;

    // Para dividir:
    echo $a / $b;

    // Para sacar el modulo:
    $mod = 10 % 5;

    // Se puede calcular el exponente de la siguiente manera:
    echo 5 ** 2;

    // Trabajando con textos
    // En PHP se tienen dos tipos de comillas, las simples '' y las dobles ""

    $primernombre = 'Mariana';
    $apellido = 'Orrego';

    // Cuando se emplea una doble comilla "", significa que se pueden interpretar caracteres especiales,
    // como lo seria el \n, el cual genera un espaciado entre los nombres y luego de ellos:
    echo "Jacob\nJones\n";

    // Con la comilla doble también se pueden incrustar variables en los textos:
    echo "$primernombre Franco\n";

    // Otra caracteristica es la posibilidad de combinarlos juntos. Combinar dos strings
    $nombrecompleto = $primernombre . $apellido;
    echo $nombrecompleto;
/*
    $saludos = 'Hola Marianita, bien o pa que?';
    $saludo2 = 'Que hay para hacer?';
    
    saludar($saludos);
    validar('9');

    function saludar($saludo)
    {
        //echo $saludo;
    }

    function validar($numero)
    {
        if ((int)$numero > 10) {
            echo 'El número es mayor';
        } else {
            echo "El número es menor\n";
        }
    }*/
?>