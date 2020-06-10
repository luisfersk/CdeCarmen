<?php

class UsuarioService
{
    public $usuarioController;

    public function __construct(mysqli $conn)
    {
        $this->usuarioController = new UsuarioController($conn);
    }

    public function login($correo, $password)
    {
        $query = $this->usuarioController->getUsuarioPassword($correo, $password);

        $rows = mysqli_num_rows($query);

        if ($rows === 0) {
            echo '
            <div class="alert alert-success" role="alert">
                error.
            </div>';
        } else {
            session_start();
            while ($resultados = mysqli_fetch_array($query)) {
                $_SESSION["identificacion"] = $resultados['identificacion'];
                $_SESSION["nombreCompleto"] = $resultados['nombreCompleto'];
                $_SESSION["correo"]= $resultados['correo'];
            }
            header('Location: ../../index.php');
        }
    }

    public function getTipo($identificacion)
    {
        $tipo = $this->usuarioController->getTipo($identificacion);

        return $tipo;
    }
}
