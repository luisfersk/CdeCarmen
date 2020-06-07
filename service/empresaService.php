<?php

class EmpresaService
{
    public $empresaController;

    public function __construct(mysqli $conn)
    {
        $this->empresaController = new EmpresaController($conn);
    }

    public function addEmpresa(Empresa $empresa)
    {
        if ($this->empresaController->addEmpresa($empresa) === true) {
            echo '
            <div class="alert alert-success" role="alert">
                Se ha guardado correctamente.
            </div>';
        } else {
            echo '
            <div class="alert alert-danger" role="alert">' .
                $this->empresaController->conn->error . '
            </div>';
        }
    }
}
