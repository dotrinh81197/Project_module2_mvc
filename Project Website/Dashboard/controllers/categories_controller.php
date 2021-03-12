<?php
require_once("controllers/_base_controller.php");
require_once("models/categories.php");
class CategoriesController extends BaseController
{
    protected function getFolder()
    {
        return "categories";
    }

    public function index()
    {

        $data = Categories::all();
        $viewData = array(
            "categories" => $data,
        );

        $this->render("index", $viewData);
    }
    public function create()
    {
        $data = Categories::all();
        $viewData = array(
            "categories" => $data,
        );

        $this->render("create", $viewData);
    }

    public function edit()
    {
        
        $this->render("categories", "add");
    }
}
