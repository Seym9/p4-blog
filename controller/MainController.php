<?php


namespace App\controller;


class MainController {

    /**
     * @param array $views for the page view reference
     * @param array $variables for the variable reference to display the content on the page
     */
    public function render(array $views, $variables = []) {
        ob_start();

        extract($variables);
        foreach($views as $view) {
        require_once 'view/'. $view . '.php';
        }
        $content = ob_get_clean();
        require_once "view/layout.php";
    }
}