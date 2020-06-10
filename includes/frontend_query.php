<?php
    require 'db_connetion.php';

    class frontend extends dbController{
        protected $id;
        protected $name;
        protected $price;
        protected $img;
        protected $desc;

        function indexProducts(){
            $sql = "SELECT product_name, product_price, product_img, product_id FROM products;";
            $query = $this -> runQuery($sql);
            if(!empty($query)){
                foreach ($query as $key => $value){
                    $this ->price = $query[$key]['product_price'];
                    $this ->name = $query[$key]['product_name'];
                    $this ->img = $query[$key]['product_img'];
                    $this ->id = $query[$key]['product_id'];
                    $result = array($this ->price,$this ->name,$this ->img,$this ->id);
                }
            }    
        }
    }

    $object =  new frontend();
    $object->indexProducts();

?>