<?php

namespace App\Repository;

use App\Entity\Figure;
use App\Entity\Message;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Message>
 *
 * @method Message|null find($id, $lockMode = null, $lockVersion = null)
 * @method Message|null findOneBy(array $criteria, array $orderBy = null)
 * @method Message[]    findAll()
 * @method Message[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Message::class);
    }

    public function save(Message $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Message $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Message[] Returns an array of Message objects
//     */
    public function findByFigure(int $value, int $page = 1, int $max = 10): array
    {

        $result = [];

        $query = $this->createQueryBuilder('m')
            ->andWhere('m.figure = :val')
            ->setParameter('val', $value)
            ->orderBy('m.date', 'ASC')
            ->setMaxResults($max)
            ->setFirstResult(($max * $page) - $max);
        
        $paginator = new Paginator($query);
        $data = $paginator  ->getQuery()->getResult();

        $result["data"] = $data;
        $result["countPages"] = ceil($paginator->count() / $max);

        return $result;
    }
}
