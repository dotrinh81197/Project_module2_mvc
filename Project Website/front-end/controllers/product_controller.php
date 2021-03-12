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

    public function index()
    {
        $data = Products::all();

        $viewData = array(
            "products" => $data,
        );


        $this->render("index", $viewData);
    }
    // tạo mới sản phẩm
    public function create()
    {

        $data = Categories::all();
        $viewData = array(
            "categories" => $data,
        );


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->storeProduct();
            $this->showCreatePage();
        } else {
            $this->showCreatePage();
        }
    }

    public function edit()
    {
        $id = $_GET['id'];

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {


            $this->showEditProduct($id);
        } else {

            $this->EditProduct($id);

            $products = Products::all();
            $categories = Categories::all();
            $viewData = [
                "products" => $products,
                "categories" => $categories
            ];
            $this->render("index", $viewData);
        }
    }

    public function delete()
    {
        $id = $_GET['id'];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $product = Products::getProduct($id);
            if (isset($product)) {
                $product->drop();

                header("Location:?controller=product&action=index");
            }
        }
    }


    protected function storeProduct()
    {
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $weight = $_POST['weight'];
        $cost_price = $_POST['cost_price'];
        $sell_price = $_POST['sell_price'];
        $description = $_POST['description'];
        $ageRange = $_POST['ageRange'];
        $origin = $_POST['origin'];
        $image_url = $_POST['image_url'];
        $category_id = $_POST['category_id'];


        $product = new Products();
        $product->name = $name;
        $product->brand = $brand;
        $product->weight = $weight;
        $product->cost_price = $cost_price;
        $product->sell_price = $sell_price;
        $product->description = $description;
        $product->ageRange = $ageRange;
        $product->origin = $origin;
        $product->image_url = $image_url;
        $product->category_id = $category_id;

        $saveSussess = $product->save();

        if ($saveSussess) {
            $_SESSION['message'] = "Đã thêm sản phẩm mới.";
        }
    }

    protected function showCreatePage()
    {
        $products = Products::all();
        $categories = Categories::all();

        $viewData = array(
            "products" => $products,
            "categories" => $categories
        );
        $this->render("create", $viewData);
    }

    protected function showEditProduct($id)
    {

        $product = Products::getProduct($id);
        $categories = Categories::all();
        $viewData = [
            "product" => $product,
            "categories" => $categories
        ];

        $this->render("edit", $viewData);
    }

    protected function EditProduct($id)
    {
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $weight = $_POST['weight'];
        $cost_price = $_POST['cost_price'];
        $sell_price = $_POST['sell_price'];
        $description = $_POST['description'];
        $ageRange = $_POST['ageRange'];
        $origin = $_POST['origin'];
        $intended_for = $_POST['intended_for'];
        $image_url = $_POST['image_url'];
        $category_id = $_POST['category_id'];


        $product = new Products();
        $product->name = $name;
        $product->brand = $brand;
        $product->weight = $weight;
        $product->cost_price = $cost_price;
        $product->sell_price = $sell_price;
        $product->description = $description;
        $product->ageRange = $ageRange;
        $product->origin = $origin;
        $product->intended_for = $intended_for;
        $product->image_url = $image_url;
        $product->category_id = $category_id;

        $editSuccess = $product->update($id);
        if ($editSuccess) {
            $_SESSION['message'] = "Sản phẩm đã được chỉnh sửa";
        }
    }


    protected function showPage()
    {
        $data = Products::all();
        $viewData = ["products" => $data];
        $this->render("edit", $viewData);
    }
}
// class ProductController
// {
//     public $ProductDb;



//     public function index()
//     {

//         $products = $this->ProductDb->getAll();


//         include_once 'view/list.php';
//     }

//     public function add()
//     {
//         // Kiểm tra, nếu request method là GET thì trả về giao diện trang Add.php
//         // Nếu không (tức là POST), thì lấy dữ liệu từ form, sau đó thêm vào cơ sở dữ liệu
//         if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//             include 'view/add.php';
//         } else {
//             $name = $_POST['name'];
//             $brand = $_POST['brand'];
//             $weight = $_POST['weight'];
//             $description = $_POST['description'];
//             $ageRange = $_POST['ageRange'];
//             $product = new Product($name, $brand, $weight, $price, $description, $ageRange);
//             $this->ProductDb->create($product);
//             $msg['msg'] = 'Product created';
//             include 'view/add.php';
//         }
//     }


//     public function drop()
//     {
//         if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//             $id = $_GET['id'];
//             $product = $this->ProductDb->getById($id);
//             include 'view/delete.php';
//         } else {
//             $id = $_POST['id'];
//             $this->ProductDb->delete($id);
//             header('Location: index.php');
//         }
//     }


//     public function edit()
//     {
//         // Kiểm tra, nếu request method là GET thì trả về giao diện trang Edit.php
//         // Nếu không (tức là POST), thì lấy dữ liệu từ form, sau đó cập nhật vào cơ sở dữ liệu
//         if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//             // Lấy dữ liệu từ product từ model
//             // Lấy id của record muốn sửa
//             $id = isset($_GET['id']) ? $_GET['id'] : NULL;

//             // Lấy đối tượng product từ model
//             $product = $this->ProductDb->getById($id);


//             include 'view/edit.php';
//         } else {
//             $name = $_POST['name'];
//             $price = $_POST['price'];
//             $description = $_POST['description'];
//             $producer = $_POST['producer'];
//             $id = $_GET['id'];

//             $product = new Product($name, $brand, $weight, $price, $description, $ageRange);
//             $this->ProductDb->update($id, $product);
//             $message = 'Product Updated';
//             $this->index();
//         }
//     }

//     public function showDetail()
//     {

//         if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//             $id = $_GET['id'];
//             $product = $this->ProductDb->getById($id);
//             include 'view/detail.php';
//         } else {
//             $id = $_POST['id'];
//             $this->ProductDb->getDetail($id);
//             header('Location: index.php');
//         }
//     }

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

// $controller = new ProductController();
// $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : NULL;

// switch ($action) {
//     case 'index':

//         $controller->index();
//         break;
//     case 'add':
//         $controller->add();
//         break;

//     default:
//         # code...
//         break;
// }
