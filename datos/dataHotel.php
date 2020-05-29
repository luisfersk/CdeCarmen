<?php
require_once '../modulo/entity.php';
/**
 *
 */
class DataHotel
{
	public $conn;

	public function __construct(mysqli $conn)
	{
			$this->conn = $conn;
	}

	public function GurdarHotel(Hotel $hotel)
	{
		$sql = "INSERT INTO hotel(nombre,email,celular,lugar,disponibilidad,fecha) VALUES ('$hotel->nombre','$hotel->email','$hotel->celular','$hotel->lugar','$hotel->disponibilidad','$hotel->fecha')";
		return mysqli_query($this->conn, $sql);
	}
}