<?php 

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class CatalogController
{

    public function actionIndex()
    {
        $caregories = array();
        $caregories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProduct(12);

        require_once(ROOT . '/views/catalog/index.php');

        return true;
    }

    public function actionCategory($categoryId)
    {
        $caregories = array();
        $categories = Category::getCategoriesList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductListByCategory($categoryId);

        require_once(ROOT . '/veiws/catalog/category.php');

        return true;
    }
}