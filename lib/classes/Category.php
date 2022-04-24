<?php
class Category{
    protected $id;
    protected $name;
    protected $description;

    //Получение значений полей класса
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->decription;
    }

    //Установка значений полей класса
    public function setId(int $id){
        $this->id = $id;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    //Конструктор класса
    public function __construct(int $id,string $name,string $description){
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }
}