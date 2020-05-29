<?php
require_once '../datos/dal.php';

class LogicHotel
{
    public $dataHotel;

    public function __construct(mysqli $conn)
    {
        $this->dataHotel = new DataHotel($conn);
    }

    public function GurdarHotel(Hotel $hotel)
    {
        if ($this->dataHotel->GurdarHotel($hotel) === true) {
            echo '
            <div class="alert alert-success" role="alert">
                Se ha guardado correctamente.
            </div>';

        } else {
            echo '
            <div class="alert alert-danger" role="alert">'.
            $this->dataHotel->conn->error.'
            </div>';
        }
    }
}