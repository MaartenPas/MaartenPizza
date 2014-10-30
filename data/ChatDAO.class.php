<?php

require_once("data/dbconfig.class.php");
require_once("/entities/Chat.class.php");

class ChatDAO {

    private $dbConn;
    private $dbUsername;
    private $dbPassword;

    public function __construct() {
        $this->dbConn = "mysql:host=localhost;dbname=pizzashop";
        $this->dbUsername = "cursusgebruiker";
        $this->dbPassword = "cursuspwd";
    }

    public function getLijst() {
        $lijst = array();
        $sql = "select id, nickname, boodschap, datum from chatpizzashop order by datum desc limit 20";
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $resultSet = $dbh->query($sql);
        foreach ($resultSet as $rij) {
            $chat = new Chat($rij["id"], $rij["nickname"], $rij["boodschap"], $rij["datum"]);
            array_push($lijst, $chat);
        }
        $dbh = null;
        return $lijst;
    }

    public function getChatById($id) {
        $sql = "select id, nickname, boodschap, datum from chatdb where id = " . $_GET["id"];
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $resultSet = $dbh->query($sql);
        if ($resultSet) {
            $rij = $resultSet->fetch();
            if ($rij) {
                $chat = new Chat($rij["id"], $rij["nickname"], $rij["boodschap"], $rij["datum"]);
                $dbh = null;
                return $chat;
            } else
                return false;
        } else
            return false;
    }

    public function updateChat($chat) {
        $sql = "update chatdb set nickname = '" .
                $chat->getNickname() . "', boodschap = " .
                $chat->getBoodschap() . "', datum = " .
                $chat->getDatum() . " where id = " .
                $chat->getId();
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $dbh->exec($sql);
        $dbh = null;
    }

    public function createChat($nickname, $boodschap) {
        if (!empty($nickname) && !empty($boodschap)) {
            $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
            $datum = date("Y-m-d H:i:s");
            $sql = "insert into chatpizzashop (nickname, boodschap, datum) values ('" . $nickname . "', '" . $boodschap . "', '" . $datum . "')";
            $dbh->exec($sql);
            $dbh = null;
        } else {
            print("Ongeldige invoer, gelieve opnieuw te proberen");
        }
    }

    public function deleteChat($id) {
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $sql = "delete from chatpizzashop where id = " . $id;
        $dbh->exec($sql);
        $dbh = null;
    }

}
