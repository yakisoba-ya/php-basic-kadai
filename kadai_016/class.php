<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
    <p>
      <?php
        class Food{
          public $name;
          public $price;

          public function set_price(int $price){
            $this->price =$price;
          }
          public function show_price(){
            echo $this->price. '<br>';
          }
          public function __construct(string $name,int $price){
            $this->name = $name;
            $this->price = $price;
          }
          
        }
        
        $food = new Food('potato',250);
        print_r($food) . '<br>';
        
        
         
        
        
        class Animal{
          public $name;
          public $height;
          public $weight;
        
          public function set_height(int $height){
            $this->height =$height;
          }
          public function show_height(){
            echo $this->height.'<br>';
          }
          public function __construct(string $name,int $height,int $weight){
            $this->name = $name;
            $this->height =$height;
            $this->weight =$weight;
          }
        }
    
        $dog = new Animal('dog',60,5000);
        print_r($dog);
        echo $food->price . '<br>';
        echo $dog->height . '<br>';
        
        
       ?>
    </p>
</body>
</html>