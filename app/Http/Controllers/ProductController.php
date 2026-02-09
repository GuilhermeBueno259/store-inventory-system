<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ProductController extends BaseController {
    public function __construct() {
    }

    public function registerProduct() {
        return "registerProduct";
    }

    public function getProducts() {
        return "getProducts";
    }

    public function getProductById() {
        return "getProductById";
    }

    public function updateProduct() {
        return "updateProduct";
    }

    public function deleteProduct() {
        return "deleteProduct";
    }
}
