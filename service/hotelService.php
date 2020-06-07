<?php

class HotelService
{
    public $hotelController;

    public function __construct(mysqli $conn)
    {
        $this->hotelController = new HotelController($conn);
    }

    public function addHotel(Hotel $hotel)
    {
        if ($this->hotelController->addHotel($hotel) === true) {
            echo '
            <div class="alert alert-success" role="alert">
                Se ha guardado correctamente.
            </div>';
        } else {
            echo '
            <div class="alert alert-danger" role="alert">' .
                $this->hotelController->conn->error . '
            </div>';
        }
    }
}
