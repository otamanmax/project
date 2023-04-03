<?php

namespace App\Controllers;

use  App\Http\Response;

Class MainController
{
    public function view(string $viewPath): Response
    {
        $templates = __DIR__ . '/HomeController/' . $viewPath;

        // Turn on output buffering
        ob_start();

        // Include the templates content
        $rawContent = include_once($templates);

        // Execute the php content
        exec($rawContent);

        // Catch all the content of the buffer
        $output = ob_get_contents();

        // Turn off output buffering
        ob_end_clean();

        // Return now the response
        return new Response($output, 200, "OK", ["Content-Type" => "text/html"]);
    }
}