<?php

namespace App\Repository;

use App\Entity\Style;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Style>
 *
 * @method Style|null find($id, $lockMode = null, $lockVersion = null)
 * @method Style|null findOneBy(array $criteria, array $orderBy = null)
 * @method Style[]    findAll()
 * @method Style[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StyleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Style::class);
    }

    public function listeStyleCompleteAdmin(): ?Query
   {
       return $this->createQueryBuilder('s')
           ->select('s', 'a')
           ->leftJoin('s.albums', 'a')
           ->orderBy('s.nom', 'ASC')
           ->getQuery()
       ;
   }

   public function listeStyleSimple(): QueryBuilder {
    return $this->createQueryBuilder('s')
        ->orderBy('s.nom', 'ASC');
    }
}
