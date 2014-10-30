<?php
session_start();
class Chat {

    private $id;
    private $nickname;
    private $boodschap;
    private $datum;

    public function __construct($id, $nickname, $boodschap, $datum) {
        $this->id = $id;
        $this->nickname = $nickname;
        $this->boodschap = $boodschap;
        $this->datum = $datum;
    }

    public function getId() {
        return $this->id;
    }

    public function getNickname() {
        return $this->nickname;
    }

    public function getBoodschap() {
        return $this->boodschap;
    }
    
    public function getDatum() {
        return $this->datum;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function setNickname($nickname) {
        $this->nickname = $nickname;
    }

    public function setBoodschap($boodschap) {
        $this->boodschap = $boodschap;
    }
    
    public function setDatum($datum) {
        $this->datum = $datum;
    }

}
