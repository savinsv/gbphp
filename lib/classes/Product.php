<?php
class Product{
    //Поля(свойства класса)
    protected $id; //Уникальный индентификатор товара
    protected $name; // Наименование товара
    protected $description; //Опиисание товара
    protected $price; // Цена единицы товара
    protected $category_id; //Категория товара
    protected $created; //Дата и время создания товара

    //Получение значений полуй(своиств) экзземпляра класса
    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getCategory_id(){
        return $this->category_id;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getCreated(){
        return $this->created;
    }

    //Изменение значений полей экземпляра класса
    public function setId(int $id){
        $this->id = $id;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function setPrice(float $price){
        $this->price = $price;
    }

    public function setCategory_Id(int $category_id){
        $this->category_id = $category_id;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function setCreated($created){
        $this->created = $created;
    }

    public function __construct(int $id,string $name,float $price,int $category_id,string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->category_id = $category_id;
        $this->price = $price;
        $this->created = date('Y-m-d H:i:s');
    }
    public function getInfo(){
        return "ID: {$this->id} <br> 
        Наименование: {$this->name} <br> 
        Цена: {$this->price} <br> 
        Описание: {$this->description} <br> 
        Создан: {$this->category_id} <br> {$this->created}"; 
    }

}