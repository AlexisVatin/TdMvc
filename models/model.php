<?php

require 'connexion.php';

class Model
{
	public function all()
	{
        $csvData = file_get_contents('list.csv');
        $lines = explode(PHP_EOL, $csvData);
        $array = array();
        foreach ($lines as $line) {
            $array[] = str_getcsv($line);
        }
        return $array;
	}

	public function insertinto(){
        //MySQL
        $sql = 'INSERT INTO etudiants (civilité, prenom, nom) VALUES (:M., :Alexis, :Vatin)';
        $insert = connexion::requete();
        $insert->exec($sql);


    }



}