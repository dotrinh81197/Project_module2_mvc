<?php

require_once("controllers/_base_controller.php");
class HomeController extends BaseController
{
    protected function getFolder()
    {
        return "home";
    }
    public function welcome()
    {
        $this->render("welcome", [], "home_layout");
    }
}
