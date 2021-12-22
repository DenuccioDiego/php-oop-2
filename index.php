<?php

class Product {
     
     public $product;
     public $description;
     public $price;


     public function __construct($product_name, $description, $price) {
         $this->product = $product_name;
         $this->description = $description;
         $this->price = $price;
     }

     
     public function printProduct() {
         return $this->product . '<br>' . $this->description;
     }
};

class Category extends Product {

     public function setCategory($category) {
         $this->category = $category;
     } 
 
     public function getCategory() {
         return $this->category;
     }
 
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     
<section>
          <?php 
               $category = new Category('Powerbank', 'caricabatterie portatile', 50);
               $category->setCategory('elettronica');
                
          ?>

          <h2>Categoria</h2>
            Prodotto: <br>
               <?php echo $category->printProduct(); ?> 
                    <br> Categoria:
               <?php echo $category->getCategory();  ?>
        
        </section>



</body>
</html>