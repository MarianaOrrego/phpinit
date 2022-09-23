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

    // Comparaciones

    $a = true;
    $b = false;

    // Doble igual significa que la compración es igual 

    $one = 1;
    $two = 2;

    $one == $two; //retorna false

    // La exclamación y el igual significa que el valor no es igual 

    $one != $two; //retorna true

    // También se puede emplear simbolos mayor que y menor que combinados con igual

    $one > $two; // retorna false
    $one < $two; // retorna true

    // Si se combina mayor que o menor que con un igual verificará si el valor es mayor, menor o igual que otro valor.
    $one <= $two;
    $one >= $two;

    // Logica booleana
    // Usando ampersands dobles se verifica si ambos valores son true, si es así retorna un true, sino, un false
    $a = true;
    $b = true;
    $c = false;

    $a && $b; // retorna true
    $a && $c; // retorna false

    // Usando doble tubo se comprar si alguno de los dos valores es true, si es así, retorna true
    // si ambos valores son false, retorna false

    $a = true;
    $b = false;
    $c = false;
    $d = true;

    $a || $b; // retorna true
    $b || $c; // retorna false
    $a || $d; // retorna true

    // El uso de un signo de exclamación devuelve el valor opuesto
    $d = true;
    echo !$d; // retorna false

    // Condicionales
    // Condición if
    $animal = 'vaca';

    if ($animal == 'vaca') {
        echo "Moooooo.....\n";
    }

    // Se pueden contener multiples condiciones empleando el if, elseif y else
    $animal = 'pajaro';
    if ($animal == 'perro') {
        echo "Woof! 🐶\n";
    } elseif ($animal == 'gato') {
        echo "Meow!? 🐱\n";
    } elseif ($animal == 'pajaro') {
        echo "Chirp! 🐦\n";
    } else {
        echo "No soy un perro, gato o pajaro\n";
    }

    // Se tiene la alternativa de emplear el Switch en vez del if

    $comida = 'manzanas';
    switch ($comida) {
        case 'manzanas':
            echo "comiendo manzanas\n";
            break;
        case 'naranjas':
            echo "comiendo naranjas\n";
            break;
        case 'duraznos':
            echo "comiendo duraznos\n";
            break;
        default:
            echo "Estoy hambriento\n";
    }

    //Condicionales ternarias
    // La condición va seguida de un signo de interrogación antes del valor que debe devolverse
    // si la condición es verdadera y luego otros dos puntos y un valor para devolver si la condición es falsa
    
    $lenguaje = 'ingles';
    echo $lenguaje == 'espanol' ? "hola\n" : "hello\n";

    // Existe otra forma de condicional ternario que verifica si un valor esta establecido
    // sino se encuentra valor (nulo) devuelve la sentencian después de los signos de interrogación
    echo $NoExisto ?? "Variable no encontrada\n";

    // Se pueden realizar varias verificaciones seguidas
    $SiExisto = "Variable existente\n";
    echo $NoExisto ?? $SiExisto ?? "No se establece ninguna variable\n";


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