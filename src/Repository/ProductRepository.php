<?php
// src/Entity/ProductRepository.php
namespace App\Repository;
use Doctrine\ORM\EntityRepository;
class ProductRepository extends EntityRepository {
    public function findAllOrderedByName() {
        return $this->getEntityManager()
        ->createQuery('SELECT p FROM App\Entity\Product p ORDER BY p.name ASC')
        ->getResult();
    }
}