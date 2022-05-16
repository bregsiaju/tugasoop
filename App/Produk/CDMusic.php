<?php

class CDMusic extends Product
{
   // variables
   private $artist, $genre;
   // class construct
   public function __construct($name = "name", $price = 0, $discount = 0, $image = "default.jpg", $artist = "artist", $genre = "genre")
   {
      parent::__construct($name, $price, $discount, $image);
      $this->artist = $artist;
      $this->genre = $genre;
   }

   // functions
   public function getPrice()
   {
      // harga produk + 10%
      $cdPrice = parent::getPrice() + ($this->price * 0.1);
      return $cdPrice;
   }

   public function getDiscount()
   {
      // tambahan diskon 5%
      return parent::getDiscount() + 5;
   }

   public function getFinalPrice()
   {
      // harga - (harga * diskon / 100);
      $cdFinalPrice = $this->getPrice() - ($this->getPrice() * $this->getDiscount() / 100);
      return $cdFinalPrice;
   }

   public function getArtist()
   {
      return $this->artist;
   }

   public function setArtist($artist)
   {
      $this->artist = $artist;
   }

   public function getGenre()
   {
      return $this->genre;
   }

   public function setGenre($genre)
   {
      $this->genre = $genre;
   }
}

// set = mengubah data
// get = mengambil data