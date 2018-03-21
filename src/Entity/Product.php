<?php
// src/Entity/Product.php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
class Product {
    protected $id;
    public function getId() { return $this->id; }    
    protected $name;
    public function getName() { return $this->name; }
    public function setName($name): void { $this->name = $name; }   
    protected $price;
    public function getPrice() { return $this->price; }
    public function setPrice($price): void { $this->price = $price; }
    protected $description;    
    public function getDescription() { return $this->description; }
    public function setDescription($description): void { $this->description = $description; }
}