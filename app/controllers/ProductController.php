<?php
// Require SessionHelper and other necessary files

class ProductController {
    private $productModel;
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
        $this->productModel = new ProductModel($this->db);
    }

    public function listProducts() {
        $products = $this->productModel->getProducts();
        include_once 'app/views/list.php';
    }

    public function createProduct() {
        if (!SessionHelper::isAdmin()) {
            header('Location: login.php');
            exit;
        }
        // Xử lý tạo sản phẩm
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $description = $_POST["description"];
            $price = $_POST["price"];
    
            // Validation if necessary
    
            // Call the createProduct method of ProductModel to insert the product
            $success = $this->productModel->createProduct($name, $description, $price);
    
            if ($success) {
                // Redirect to listProducts or show success message
                header('Location: index.php');
                exit;
            } else {
                // Handle error - display error message or redirect to an error page
            }
        }
    
        // Display form to create product
        include_once 'app/views/create.php';
    }

    public function updateProduct($id) {
        if (!SessionHelper::isAdmin()) {
            header('Location: login.php');
            exit;
        }
        // Xử lý cập nhật sản phẩm
    }

    public function deleteProduct($id) {
        if (!SessionHelper::isAdmin()) {
            header('Location: login.php');
            exit;
        }
        // Xử lý xóa sản phẩm
    }
}