<?php

require_once("data/ChatDAO.class.php");

class ChatService {

    
    // tonen van alle items (chats)
    
    public function getChatOverzicht() {
        $chatDAO = new ChatDAO();
        $chatlijst = $chatDAO->getLijst();
        return $chatlijst;
    }

    // toevoegen van een nieuw item (chat)
    
    public function voegNieuweChatToe($nickname, $boodschap) {
        $chatDAO = new ChatDAO();
        $chatDAO->createChat($nickname, $boodschap);
    }

    // verwijderen van een item (chat)
    
    public function verwijderChat($id) {
        $chatDAO = new ChatDAO();
        $chatDAO->deleteChat($id);
    }

    // 2 functies voor het updaten van een item (chat)
    
    public function haalChatOp($id) {
        $chatDAO = new ChatDAO();
        $chat = $chatDAO->getChatById($id);
        return $chat;
    }

    public function updateChat($chat) {
        $chatDAO = new MenuDAO();
        $chat = $chatDAO->getChatById($id);
        $chat->setNickname($nickname);
        $chat->setBoodschap($boodschap);
        $chat->setDatum($datum);
        $chatDAO->update($chat);
    }

}
