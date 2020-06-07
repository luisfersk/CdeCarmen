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
        $sql = "INSERT INTO proveedor(identificacion,nombre, segundoNombre, primerApellido, segundoApellido, tipoIdentificacion, disponibilidad, cantidad) VALUES ('$proveedor->identificacion','$proveedor->primerNombre','$proveedor->segundoNombre','$proveedor->primerApellido','$proveedor->segundoApellido','$proveedor->tipoIdentificacion','$proveedor->disponibilidad','$proveedor->cantidad')";
        return mysqli_query($this->conn, $sql);
    }
}
