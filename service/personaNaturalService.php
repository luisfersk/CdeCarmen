<?php

class PersonaNaturalService
{
    public $personaNaturalController;

    public function __construct(mysqli $conn)
    {
        $this->personaNaturalController = new PersonaNaturalController($conn);
    }

    public function addPersonaNatural(PersonaNatural $personaNatural)
    {
        if ($this->personaNaturalController->addPersonaNatural($personaNatural) === true) {
            echo '
            <div class="alert alert-success" role="alert">
                Se ha guardado correctamente.
            </div>';
        } else {
            echo '
            <div class="alert alert-danger" role="alert">' .
                $this->personaNaturalController->conn->error . '
            </div>';
        }
    }
}
