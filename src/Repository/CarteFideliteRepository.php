<?php

namespace App\Repository;

use App\Entity\CarteFidelite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CarteFidelite|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarteFidelite|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarteFidelite[]    findAll()
 * @method CarteFidelite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarteFideliteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarteFidelite::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(CarteFidelite $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(CarteFidelite $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

  
    public function findOneBynum($num) :?CarteFidelite
    {
        return $this->createQueryBuilder('c')
        ->select('c')
            ->Where('c.Num_carte = :num')
            ->setParameter('num', $num)
            ->orderBy('c.Num_carte', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    public function findOneByid($idc) :?CarteFidelite
    {
        return $this->createQueryBuilder('c')
        ->select('c')
            ->Where('c.id_client = :idc')
            ->setParameter('idc', $idc)
            ->orderBy('c.id_client', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    
    

    /*
    public function findOneBySomeField($value): ?CarteFidelite
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
