<?php

use App\Controllers\Controller;
use App\Http\Response;
use App\Http\Request;

Class HomeController extends Controller
{
    public function index(): Response
    {
        var_dump($this->dataBase->getAll('Persons'));
        return $this->view('index.php');
    }

    public function contacts(Request $request): Response
    {
        var_dump($request);
        return $this->view('index.php');
    }

}