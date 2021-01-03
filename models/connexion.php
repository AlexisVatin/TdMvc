<?php

class connexion
{
    private $host = "localhost";
    private $db = "etudiants";
    private $S_user = "root";
    private $S_pass = "";

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    /**
     * @return string
     */
    public function getDb(): string
    {
        return $this->db;
    }

    /**
     * @param string $db
     */
    public function setDb(string $db): void
    {
        $this->db = $db;
    }

    /**
     * @return string
     */
    public function getSUser(): string
    {
        return $this->S_user;
    }

    /**
     * @param string $S_user
     */
    public function setSUser(string $S_user): void
    {
        $this->S_user = $S_user;
    }

    /**
     * @return string
     */
    public function getSPass(): string
    {
        return $this->S_pass;
    }

    /**
     * @param string $S_pass
     */
    public function setSPass(string $S_pass): void
    {
        $this->S_pass = $S_pass;
    }


    public function requete()
    {
        return new PDO('mysql:host='.$this->getHost().';dbname='.$this->getDb().','.$this->getSUser().','.$this->getSPass());
    }

//    public function __construct(){
//        return new PDO('mysql:host='.$this->getHost().';dbname='.$this->getDb().','.$this->getSUser().','.$this->getSPass());
//    }
}

