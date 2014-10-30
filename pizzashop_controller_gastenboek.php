<?php

require_once("/entities/Chat.class.php");
require_once("/data/ChatDAO.class.php");
// na eenmalige ingave van de nickname wordt er niet meer gepost, dus enkel
// genereren van sessie[nickname] bij starten chatsessie
if (isset($_POST["nickname"])) {
    setcookie("nickname", $_POST["nickname"], time() + 24 * 3600);
    $_SESSION["nickname"] = $_POST["nickname"];
} elseif (isset($_COOKIE["nickname"])) {
    $_SESSION["nickname"] = $_COOKIE["nickname"];
} else {
    $a = rand(111, 999);
    $_SESSION["nickname"] = "p" . $a;
}
$chatlijst = new ChatDAO();
if (isset($_GET["action"]) && $_GET["action"] == "verwijder") {
    $chatlijst->deleteChat($_GET["id"]);
}

if (isset($_GET["action"]) && $_GET["action"] == "new") {
    $chatlijst->createChat($_SESSION["nickname"], $_POST["boodschap"]); 
}
$tab = $chatlijst->getLijst();
include_once("/presentation/pizzashop_head.php");
include_once("/presentation/pizzashop_header.php");
include_once("/presentation/pizzashop_gastenboek_content.php");

include_once("/presentation/pizzashop_footer.php");
?>

