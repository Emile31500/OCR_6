<?php

namespace App\Repository;

use App\Entity\BrouillonVideoFigure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BrouillonVideoFigure>
 *
 * @method BrouillonVideoFigure|null find($id, $lockMode = null, $lockVersion = null)
 * @method BrouillonVideoFigure|null findOneBy(array $criteria, array $orderBy = null)
 * @method BrouillonVideoFigure[]    findAll()
 * @method BrouillonVideoFigure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrouillonVideoFigureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BrouillonVideoFigure::class);
    }

    public function save(BrouillonVideoFigure $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BrouillonVideoFigure $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BrouillonVideoFigure[] Returns an array of BrouillonVideoFigure objects
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

//    public function findOneBySomeField($value): ?BrouillonVideoFigure
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
