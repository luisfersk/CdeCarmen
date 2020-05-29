<?php
require_once '../datos/dal.php';

class LogicEmpresa
{
    public $dataEmpresa;

    public function __construct(mysqli $conn)
    {
        $this->dataEmpresa = new DataEmpresa($conn);
    }

    public function GurdarEmpresa(Empresa $empresa)
    {
        if ($this->dataEmpresa->GurdarEmpresa($empresa) === true) {
            echo '
            <div class="alert alert-success" role="alert">
                Se ha guardado correctamente.
            </div>';

        } else {
            echo '
            <div class="alert alert-danger" role="alert">'.
            $this->dataEmpresa->conn->error.'
            </div>';
        }
    }
}