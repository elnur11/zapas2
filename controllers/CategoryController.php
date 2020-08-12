<?php


namespace app\controllers;


use app\models\Product;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionView($id){
        $products = Product::find()->where(['category_id'=>$id])->all();

        return $this->render('view', [
            'products'=>$products
        ]);
    }
    public function actionTest(){
        $product = Product::find()->all();
        debug($product);die;
    }
}