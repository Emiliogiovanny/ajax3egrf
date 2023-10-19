<?
    # index
    # en el mostraremos la salida de las vistas al usuaruio y tambien a travez de el le
    # enviaremos los distintas acciones que el usuariop envie al controlador 
    #
    # requiere () establece que el codigo del archivo invocado es requerido
    # es decir, obligatorio para el funcionamiento del programa, para ello si
    # el archivo especifico en la funcion require() no se encuentra 
    # saldra un error "PHO Fatal error" y el programa PHP se detiene.
    #
    # requiere_once, funciona de la misma que su respectivo, salvo que, al 
    # utilizar la version ONCE, se impide la carga de un mismo archivo
    # mas de una vez
    #
    
    require_once("controladores/plantilla.controlador.php");

    $plantilla = new ControladorPlantilla();
    $plantilla ->ctrTraerPlantilla();
?>