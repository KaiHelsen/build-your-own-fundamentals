<?php

class Home implements IController
{

    public function render(array $GET, array $POST): void
    {
        // TODO: Implement render() method.
        // render header and head
        require "view/includes/Head.php";
        require "view/includes/Header.php";
        // render page contents

        //render footer
        require "view/includes/Footer.php";

    }
}