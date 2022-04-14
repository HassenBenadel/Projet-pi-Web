<?php

namespace App\Repository;

use App\Entity\Lignec;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Lignec|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lignec|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lignec[]    findAll()
 * @method Lignec[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LignecRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lignec::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Lignec $entity, bool $flush = true): void
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
    public function remove(Lignec $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
    public function findByid($idc) 
    {
        return $this->createQueryBuilder('c')
        ->select('c')
            ->Where('c.id_panier = :idc')
            ->setParameter('idc', $idc)
            ->orderBy('c.id_panier', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    public function findOneByid($idc) : ?Lignec
    {
        return $this->createQueryBuilder('c')
        ->select('c')
            ->Where('c.id_panier = :idc')
            ->setParameter('idc', $idc)
            ->orderBy('c.id_panier', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    // /**
    //  * @return Lignec[] Returns an array of Lignec objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Lignec
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
