<?php

class Controller
{
	public function all()
    {


        require 'models/model.php';



        $model = new Model();
        $result = $model->all();
        $list = array();

//        $model->insertinto();

        foreach ($result as $eleve) {
            foreach ($eleve as $key) {
                array_push($list, $key);
            }
        }

        for ($i = 0; $i < 3; $i++) {
            array_shift($list);
        }

        $nom = array();
        $prenom = array();

        $i = 0;

        foreach ($list as $key) {
            if ($i % 2) {
                array_push($prenom, $key);
                $i++;
            } else {
                array_push($nom, $key);
                $i++;
            }
        }
        $prenom2=array();
        $osef=['M.','Mme'];
        foreach ($prenom as $key){

            $key2 = str_replace($osef,'',$key);
            array_push($prenom2, $key2);
        }


        function rande(int $min, int $max, int $nbGroupe): array
        {

            $tab2 = array();
            $nbprev = array();
            for ($j= 0; $j < 3; $j++){
                $tab =array();
                for ($i = 0; $i < $nbGroupe; $i++) {
                    $nb = rand($min, $max);

                    while (in_array($nb, $nbprev)) {
                        $nb = rand($min, $max);
                    }
                    array_push($tab, $nb);
                    array_push($nbprev, $nb);
                }
                array_push($tab2,$tab);
            }
            return $tab2;
        }

        $tab3 = rande(0,sizeof($nom)-1,3);

        foreach ($tab3 as $key){


            echo '<td>';
            echo $nom[$key[0]].' '.$prenom2[$key[0]];
            echo '</br>';
            echo $nom[$key[1]].' '.$prenom2[$key[1]];
            echo '</br>';
            echo $nom[$key[2]].' '.$prenom2[$key[2]];
            echo '</td>';

        }

    }
}