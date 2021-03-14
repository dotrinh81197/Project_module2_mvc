<?php

require_once("controllers/_base_controller.php");
require_once("models/product.php");
require_once("models/categories.php");
class ProductController extends BaseController
{
    protected function getFolder()
    {
        return "products";
    }



    public function detail()
    {
        $id = $_GET['id'];

        $data = new Products();
        $product = $data::getProduct($id);

        $viewData = ["product" => $product];

        $this->render("_detail", $viewData, "products_layout");
    }

    public function showByCategory()
    {
        $category_id = $_GET['id'];
        $data = new Products();
        $products = $data::getbycategory($category_id, 4);
        $viewData = ["products" => $products];

        $this->render("productByCategory", $viewData, "products_layout");
    }
}

//     public function search()
//     {

//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//             $search =  $_POST['search'];

//             $products = $this->ProductDb->search($search);
//             include 'view/list.php';
//         } else {
//         }
//     }
// }
