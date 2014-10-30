<?php

require_once("data/MenuDAO.class.php");

class MenuService {

    
    // tonen van alle items (menus)
    
    public function getMenusOverzicht() {
        $menuDAO = new MenuDAO();
        $menulijst = $menuDAO->getAll();
        return $menulijst;
    }

    // toevoegen van een nieuw item (menu)
    
    public function voegNieuwMenuToe($product, $prijs, $categorie, $omschrijving) {
        $menuDAO = new MenuDAO();
        $menuDAO->create($id, $product, $prijs, $categorie, $omschrijving);
    }

    // verwijderen van een item (menu)
    
    public function verwijderMenu($id) {
        $menuDAO = new MenuDAO();
        $menuDAO->delete($id);
    }

    // 2 functies voor het updaten van een item (menu)
    
    public function haalMenuOp($id) {
        $menuDAO = new MenuDAO();
        $menu = $menuDAO->getById($id);
        return $menu;
    }

    public function updateMenu($id, $product, $prijs, $categorie, $omschrijving) {
        $menuDAO = new MenuDAO();
        $menu = $menuDAO->getById($id);
        $menu->setProduct($product);
        $menu->setPrijs($prijs);
        $menu->setCategorie($categorie);
        $menu->setOmschrijving($omschrijving);
        $menuDAO->update($menu);
    }

}
