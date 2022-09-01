<?php

class ShopController extends Controller
{
    public function show() 
    {
        $productModel = new Product();

        $products = $productModel->getProducts();

        $categories = $this->getCategories();

        include '../' . VIEW_DIRECTORY . '/index.php';
    }

    public function showCategory(array $parameters)
    {
        $idCategory = $parameters['id'];
        $productModel = new Product();
        $products = $productModel->getProductsByCategory($idCategory);

        $categories = $this->getCategories();

        include '../' . VIEW_DIRECTORY . '/category.php';
    }
}