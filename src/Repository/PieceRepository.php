<?php

namespace App\Repository;

use App\Entity\Piece;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Piece>
 *
 * @method Piece|null find($id, $lockMode = null, $lockVersion = null)
 * @method Piece|null findOneBy(array $criteria, array $orderBy = null)
 * @method Piece[]    findAll()
 * @method Piece[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PieceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Piece::class);
    }

    public function save(Piece $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Piece $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findFirstThreeFilmPieces()
    {
        return $this->createQueryBuilder('p')
            ->innerJoin('p.idTypePiece', 'tp')
            ->where('tp.name = :filmType')
            ->setParameter('filmType', 'film')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    public function findFirstThreeAlbumPieces()
    {
        return $this->createQueryBuilder('p')
            ->innerJoin('p.idTypePiece', 'tp')
            ->where('tp.name = :filmType')
            ->setParameter('filmType', 'album')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return Piece[] Returns an array of Piece objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Piece
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
