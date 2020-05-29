<?php
require_once '../datos/dal.php';

class LogicProveedor
{
    public $dataProveedor;

    public function __construct(mysqli $conn)
    {
        $this->dataProveedor = new DataProveedor($conn);
    }

    public function GurdarProveedor(Proveedor $proveedor)
    {
        if ($this->dataProveedor->GurdarProveedor($proveedor) === true) {
            echo '
            <div class="alert alert-success" role="alert">
                Se ha guardado correctamente.
            </div>';

        } else {
            echo '
            <div class="alert alert-danger" role="alert">'.
            $this->dataProveedor->conn->error.'
            </div>';
        }
    }
}
