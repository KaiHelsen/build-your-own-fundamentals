<?php
declare(strict_types=1);

interface IController
{
    public function render(array $GET, array $POST) : void;
}