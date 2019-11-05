<?php

namespace App\Repository;

use App\Entity\Mens;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Mens|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mens|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mens[]    findAll()
 * @method Mens[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MensRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mens::class);
    }

    // /**
    //  * @return Mens[] Returns an array of Mens objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mens
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
