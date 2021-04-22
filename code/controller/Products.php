<?php

class Products implements IController
{

    public function render(array $GET, array $POST): void
    {
        $productsContainer = new ProductsContainer();
        $products = $productsContainer->getAll();

        // render header and head
        include "view/includes/Head.php";
        include "view/includes/Header.php";

        // render page contents
        include "view/ProductsView.php";

        //render footer
        include "view/includes/Footer.php";
    }

}