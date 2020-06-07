<?php

/**
 *
 */
class ProveedorController
{
    public $conn;

    public function __construct(mysqli $conn)
    {
        $this->conn = $conn;
    }

    public function addProveedor(Proveedor $proveedor)
    {
        $sql = "
        INSERT INTO proveedor (
            identificacion,
            nombre,
            tipoIdentificacion,
            telefono,
            lugar_recidencia,
            nota
        )
        VALUES (
            '$proveedor->identificacion',
            '$proveedor->nombre',
            '$proveedor->tipoIdentificacion',
            '$proveedor->telefono',
            '$proveedor->lugarRecidencia',
            '$proveedor->nota'
        )";
        return mysqli_query($this->conn, $sql);
    }
}
