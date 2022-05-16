<?php
// koneksi ke class
require_once 'App\init.php';

// daftar produk
$daftarProduk = [
   "cdMusics" => [
      // ($name, $price, $discount, $image, $artist, $genre)
      $cd1 = new CDMusic("ODDINARY", 300000, 5, "oddinary.jpg", "Stray Kids", "Electropop, K-Pop"),
      $cd2 = new CDMusic("Manusia", 60000, 0, "manusia.jpg", "Tulus", "Pop Jazz"),
      $cd3 = new CDMusic("Taman Langit", 85000, 5, "tamanlangit.jpg", "NOAH", "Indonesian Pop"),
      $cd4 = new CDMusic("Eyes Wide Open", 380000, 10, "eyes-wide-open.jpg", "TWICE", "K-Pop"),
      $cd5 = new CDMusic("Justice", 320000, 2, "justice.png", "Justin Bieber", "R&B/Soul, Pop"),
   ],
   "cdRack" => [
      // ($name, $price, $discount, $image, $capacity, $model)
      $rak1 = new CDRack("Rak CD Akrilik", 50000, 2, "rak1.jpg", 26, "Bersusun"),
      $rak2 = new CDRack("Rak CD Tower Import", 500000, 5, "rak2.jpg", 44, "Dapat diputar"),
      $rak3 = new CDRack("Informa - Gallio Cd Rack", 125000, 4, "rak3.jpg", 100, "Bertingkat, multifungsi"),
      $rak4 = new CDRack("Wooden Spiral CD Rack", 750000, 20, "rak4.jpg", 25, "Bahan kayu, bentuk unik")
   ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- style -->
   <link rel="stylesheet" href="stylesheet.css">
   <!-- google font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Macondo&family=Patua+One&family=Signika+Negative&display=swap" rel="stylesheet">

   <title>Inheritance</title>
</head>

<body>
   <!-- navbar -->
   <nav>
      <h2>Alao Album Store</h2>
   </nav>
   <!-- end navbar -->

   <!-- daftar cd music -->
   <section>
      <h3>CD Music Catalog</h3>
      <div class="katalog">
         <!-- tampilkan data pada array -->
         <?php foreach ($daftarProduk["cdMusics"] as $music) : ?>
            <div class="card">
               <!-- tampilkan cover album -->
               <img src="image/<?php echo $music->getImage(); ?>" alt="cd cover">
               <!-- label diskon -->
               <div class="discount">
                  -<?php echo $music->getDiscount(); ?>%
               </div>
               <div class="card-info">
                  <!-- cetak nama artis -->
                  <p><?php echo $music->getArtist(); ?></p>
                  <!-- cetak nama album -->
                  <h4><?php echo $music->getName(); ?></h4>
                  <!-- cetak genre -->
                  <p><?php echo $music->getGenre(); ?></p>
                  <!-- harga setelah diskon -->
                  <p>IDR <?php echo $music->getFinalPrice(); ?>
                     <!-- harga asli + 10% -->
                     <span><?php echo $music->getPrice(); ?></span>
                  </p>
                  <a href="">Buy</a>
               </div>
            </div>
         <?php endforeach; ?>
      </div>
   </section>
   <!-- end daftar cd music -->

   <hr>

   <!-- daftar produk cd rak -->
   <section>
      <h3>CD Rack Catalog</h3>
      <div class="katalog">
         <!-- tampilkan data pada array -->
         <?php foreach ($daftarProduk["cdRack"] as $rak) : ?>
            <div class="card">
               <!-- gambar produk -->
               <img src="image/<?php echo $rak->getImage(); ?>" alt="preview rak">
               <!-- label diskon -->
               <div class="discount">
                  -<?php echo $rak->getDiscount(); ?>%
               </div>
               <div class="card-info">
                  <!-- nama produk -->
                  <h4><?php echo $rak->getName(); ?></h4>
                  <!-- harga setelah diskon -->
                  <p>IDR <?php echo $rak->getFinalPrice(); ?>
                     <!-- harga asli + 15% -->
                     <span><?php echo $rak->getPrice(); ?></span>
                  </p>
                  <hr>
                  <!-- tampilkan kapacity -->
                  <p>Capacity <?php echo $rak->getCapacity(); ?> pcs</p>
                  <!-- tampilkan detail model -->
                  <p>Detail Model :<br>
                     -> <?php echo $rak->getModel(); ?>
                  </p>
                  <a href="">Buy</a>
               </div>
            </div>
         <?php endforeach; ?>
      </div>
   </section>
   <!-- end daftar produk cd rak -->

   <!-- footer -->
   <footer>
      <p>Created by Bregsi Atingsari Julastri / 20081010211</p>
   </footer>
   <!-- footer  -->
</body>

</html>

<?php
// mengubah data dengan setter
// $cd4->setArtist("(GI)-DLE");
// $cd1->setPrice(325000);
// $cd2->setName("Hati-Hati di Jalan");
// $cd3->setGenre("Jazz");
// $cd5->setDiscount(10);

// $rak1->setName("Mobil Mewah");
// $rak2->setPrice(20000);
// $rak3->setDiscount(50);
// $rak4->setCapacity(1000);
// $rak1->setModel("Tidak boleh diinjak");