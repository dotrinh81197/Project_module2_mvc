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

        $this->render("_detail", $viewData, "detail_layout");
    }

    // lấy sản phẩm theo thể loại
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
