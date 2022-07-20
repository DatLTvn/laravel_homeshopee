<?php
namespace App\Models;

class Cart{
    public $products = null;//tao 3 du lieu
    public $totalPrice = 0;//tong gia
    public $totalQuanty = 0;//tong so luong

    public function __constant($Cart){
        if($Cart){
            $this->products = $Cart->products;
            $this->totalPrice = $Cart->totalPrice;
            $this->totalQuanty = $Cart->totalQuanty;
        }
    }

    public function AddCart($products, $id){
        $newProduct = ['quanty' => 0, 'price'=> $products->price , 'productsInfo' => $products]; 
         if($this->products){
            if(array_key_exists($id, $products)){
                $newProduct =$products[$id]; //kiem tra
            }
            $newProduct['quanty']++; //
            $newProduct['price']= $newProduct['quanty'] * $products->price;
            $this->products[$id]= $newProduct;
            $this->totalPrice += $products->price;
            $this->totalQuanty += $newProduct['quanty'];
            $this->totalQuanty++;
         }
    }
}
