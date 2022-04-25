<?php
include_once "Product.php";

class Tovar extends Product{
    protected $category_id; //Категория товара
    protected $created; //Дата и время создания товара

    public function getCategory_id(){
        return $this->category_id;
    }

    public function getCreated(){
        return date('Y-m-d H:i:s',$this->created);
    }

    public function setCategory_Id(int $category_id){
        $this->category_id = $category_id;
    }

    public function setCreated($created){
        $this->created = $created;
    }
//int $category_id,
    public function __construct(int $id,string $name,float $price,string $description,int $category_id, $created)
    {
        parent::__construct($id,$name,$price,$description);
        $this->category_id = $category_id;
        $this->created = $created;
    }

    public function getInfo(){
        return parent::getInfo().
        "Группа товара: {$this->category_id} <br>
        Создан: {$this->getCreated()} ";
    }
} 