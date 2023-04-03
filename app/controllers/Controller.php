<?php

namespace App\Controllers;

use  App\Controllers\MainController;
use  App\Include\DB\DB;

Class Controller extends MainController
{

    protected $dataBase;

    public function __construct()
    {
        $dataBase = new DB();
        $this->dataBase = $dataBase;
    }

}