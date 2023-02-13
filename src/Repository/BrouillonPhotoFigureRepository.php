<?php

namespace App\Repository;

use App\Entity\BrouillonPhotoFigure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BrouillonPhotoFigure>
 *
 * @method BrouillonPhotoFigure|null find($id, $lockMode = null, $lockVersion = null)
 * @method BrouillonPhotoFigure|null findOneBy(array $criteria, array $orderBy = null)
 * @method BrouillonPhotoFigure[]    findAll()
 * @method BrouillonPhotoFigure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrouillonPhotoFigureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BrouillonPhotoFigure::class);
    }

    public function save(BrouillonPhotoFigure $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BrouillonPhotoFigure $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BrouillonPhotoFigure[] Returns an array of BrouillonPhotoFigure objects
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

//    public function findOneBySomeField($value): ?BrouillonPhotoFigure
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
