<?php

namespace App\Repository;

use App\Entity\RecuperationMdp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RecuperationMdp>
 *
 * @method RecuperationMdp|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecuperationMdp|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecuperationMdp[]    findAll()
 * @method RecuperationMdp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecuperationMdpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RecuperationMdp::class);
    }

    public function save(RecuperationMdp $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RecuperationMdp $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return RecuperationMdp[] Returns an array of RecuperationMdp objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RecuperationMdp
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
