<?php


class Controller {
    public function view($view, $data = []) {
        // Extract data for use in views
        extract($data);

        // Start output buffering to capture content
        ob_start();
        require_once '../app/Views/' . $view . '.php';
        $content = ob_get_clean();

        // Include header
        require_once '../app/Views/templates/header.php';
        // Output content
        echo $content;
        // Include footer
        require_once '../app/Views/templates/footer.php';
    }

    public function model($model) {
        require_once '../app/Models/' . $model . '.php';
        return new $model;
    }
}
