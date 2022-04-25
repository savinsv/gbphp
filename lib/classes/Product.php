<?php
class Product{
    //Поля(свойства класса)
    protected $id; //Уникальный индентификатор продукта
    protected $name; // Наименование продукта
    protected $description; //Опиисание продукта
    protected $price; // Цена единицы продукта

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

    public function getDescription(){
        return $this->description;
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

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function __construct(int $id,string $name,float $price,string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
    public function getInfo(){
        return "ID: {$this->id} <br> 
        Наименование: {$this->name} <br> 
        Цена: {$this->price} <br> 
        Описание: {$this->description} <br> ";
    }

}