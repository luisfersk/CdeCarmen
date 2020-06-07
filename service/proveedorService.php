<?php

class ProveedorService
{
    public $proveedorController;

    public function __construct(mysqli $conn)
    {
        $this->proveedorController = new ProveedorController($conn);
    }

    public function addProveedor(Proveedor $proveedor)
    {
        if ($this->proveedorController->addProveedor($proveedor) === true) {
            echo '
            <div class="alert alert-success" role="alert">
                Se ha guardado correctamente.
            </div>';
        } else {
            echo '
            <div class="alert alert-danger" role="alert">' .
                $this->proveedorController->conn->error . '
            </div>';
        }
    }
}
