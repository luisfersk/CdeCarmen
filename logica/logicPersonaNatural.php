<?php
require_once '../datos/dal.php';

class LogicPersonaNatural
{
    public $dataPersonaNatural;

    public function __construct(mysqli $conn)
    {
        $this->dataPersonaNatural = new DataPersonaNatural($conn);
    }

    public function GurdarPersonaNatural(PersonaNatural $personaNatural)
    {
        if ($this->dataPersonaNatural->GurdarPersonaNatural($personaNatural) === true) {
            echo '
            <div class="alert alert-success" role="alert">
                Se ha guardado correctamente.
            </div>';

        } else {
            echo '
            <div class="alert alert-danger" role="alert">'.
            $this->dataPersonaNatural->conn->error.'
            </div>';
        }
    }
}