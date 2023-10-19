<?php
require_once "../controladores/formularios.controlador.php";
require_once "../modelos/formularios.modelo.php";

// CLASE DE AJAX
class AjaxFormulario {
    /**
     * Validar email Existente
     */
    public $validarEmail;

    public function ajaxValidarEmail() {
        $item = "email";
        $valor = $this->validarEmail;
        $respuesta = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
        echo json_encode($respuesta);
    }
}

// OBJETOS DE AJAX RECIBEN LA VARIABLE POST
if (isset($_POST["validarEmail"])) {
    $valEmail = new AjaxFormulario();
    $valEmail->validarEmail = $_POST["validarEmail"];
    $valEmail->ajaxValidarEmail();
}
