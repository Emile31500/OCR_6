<?php

namespace App\Repository;

use App\Entity\Figure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Figure>
 *
 * @method Figure|null find($id, $lockMode = null, $lockVersion = null)
 * @method Figure|null findOneBy(array $criteria, array $orderBy = null)
 * @method Figure[]    findAll()
 * @method Figure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FigureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Figure::class);
    }

    public function save(Figure $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Figure $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Figure[] Returns an array of Figure objects
//     */
    public function findPublished(mixed $max_result): array
    {
        
        $queryBuilder = $this->createQueryBuilder('f')
            ->andWhere('f.statu = :val')
            ->setParameter('val', 'published')
            ->orderBy('f.editedDate', 'ASC');

        if ($max_result > 1) {
            
            $queryBuilder->setMaxResults($max_result);
        
        }

        return $queryBuilder->getQuery()
                    ->getResult();

    }

    public function findBySlug(string $value): ?Figure
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.slug = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}
