<?php

namespace App;

class Connection
{

	public static function getDb()
	{
		try {

			$conn = new \PDO(
				"mysql:host=localhost;dbname=app_giraganga;charset=utf8",
				"root",
				""
			);

			return $conn;

		} catch (\PDOException $e) {
			//.. tratar de alguma forma ..//
		}
	}
}

?>