<?php

class CDRack extends Product
{
   // variables
   private $capacity, $model;
   // class construct
   public function __construct($name = "name", $price = 0, $discount = 0, $image = "default.jpg", $capacity = 0, $model = "model")
   {
      parent::__construct($name, $price, $discount, $image);
      $this->capacity = $capacity;
      $this->model = $model;
   }
   // functions
   public function getPrice()
   {
      // harga produk + 15%
      $rakPrice = parent::getPrice() + ($this->price * 0.15);
      return $rakPrice;
   }

   public function getFinalPrice()
   {
      // harga - (harga * diskon / 100);
      $rakFinalPrice = $this->getPrice() - ($this->getPrice() * $this->discount / 100);
      return $rakFinalPrice;
   }

   public function getCapacity()
   {
      return $this->capacity;
   }

   public function setCapacity($capacity)
   {
      $this->capacity = $capacity;
   }

   public function getModel()
   {
      return $this->model;
   }

   public function setModel($model)
   {
      $this->model = $model;
   }
}

// set = mengubah data
// get = mengambil data
