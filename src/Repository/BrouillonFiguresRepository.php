<?php

namespace App\Repository;

use App\Entity\BrouillonFigures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BrouillonFigures>
 *
 * @method BrouillonFigures|null find($id, $lockMode = null, $lockVersion = null)
 * @method BrouillonFigures|null findOneBy(array $criteria, array $orderBy = null)
 * @method BrouillonFigures[]    findAll()
 * @method BrouillonFigures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrouillonFiguresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BrouillonFigures::class);
    }

    public function save(BrouillonFigures $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BrouillonFigures $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BrouillonFigures[] Returns an array of BrouillonFigures objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BrouillonFigures
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
