<?php

namespace App\src\controller;

class DefaultController
{

    public function home()
    {
        require('../../../templates/index.php');
    }
}
?>