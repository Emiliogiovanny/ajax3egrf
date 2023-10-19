<?php
    #Funciones sin parametros

    function bannerBienvenida(){
        echo "Hola mundo <br>";
        echo "A la pagina de APP Web<br>";
        echo "Iisis.com<br>";
    }

    function bannerDespedida(){
        echo "Hasta la vista <br>";
        echo "Saludos de APP Web <br>";
        echo "Iisis.com <br>";
    }

    bannerBienvenida();
    bannerBienvenida();
    bannerBienvenida();
    bannerBienvenida();
    bannerDespedida();

    #Funcion con parametros

    $adios = "";
    function despedida($adios){
        echo $adios . "<br> mortal <br>";
    }

    despedida("see you later");
    $a = "valor cadena por una variable <br>";
    despedida($a);
    despedida("$a");
    despedida(" <br> Mi nombre es: Emilio, " . $a);

    #Funcion con retorno

    function retorno($retornar){
        $retornar = "funciones con retorno <br>" .
                    "Que regresan un valor dado <br>";

        return $retornar;
    }

    echo retorno("Tema: funciones con return." . "<br>");



    