<?php

namespace App\Repository;

use App\Entity\CArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method CArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method CArticle[]    findAll()
 * @method CArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CArticle::class);
    }

    // /**
    //  * @return CArticle[] Returns an array of CArticle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CArticle
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
