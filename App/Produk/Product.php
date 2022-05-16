<?php

class Product
{
   protected $name, $price, $discount, $image;

   public function __construct($name = "name", $price = 0, $discount = 0, $image = "default.jpg")
   {
      $this->name = $name;
      $this->price = $price;
      $this->discount = $discount;
      $this->image = $image;
   }

   public function getName()
   {
      return $this->name;
   }

   public function setName($name)
   {
      $this->name = $name;
   }

   public function getPrice()
   {
      return $this->price;
   }

   public function setPrice($price)
   {
      $this->price = $price;
   }

   public function getDiscount()
   {
      return $this->discount;
   }

   public function setDiscount($discount)
   {
      $this->discount = $discount;
   }

   public function getImage()
   {
      return $this->image;
   }
}
