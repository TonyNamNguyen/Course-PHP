<?php
class ProductModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getProducts() {
        // Truy vấn lấy tất cả sản phẩm
        try {
            $query = "SELECT * FROM products";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $products;
        } catch(PDOException $e) {
            // Handle exceptions appropriately
            return array();
        }
    }

    public function createProduct($name, $description, $price) {
        // Truy vấn tạo sản phẩm mới
        try {
            $query = "INSERT INTO products (name, description, price) VALUES (:name, :description, :price)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            // Handle exceptions appropriately
            return false;
        }
    }

    public function updateProduct($id, $name, $description, $price) {
        // Truy vấn cập nhật sản phẩm
        try {
            $query = "UPDATE products SET name = :name, description = :description, price = :price WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            // Handle exceptions appropriately
            return false;
        }
    }

    public function deleteProduct($id) {
        // Truy vấn xóa sản phẩm
        try {
            $query = "DELETE FROM products WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            // Handle exceptions appropriately
            return false;
        }
    }
    }