<?php

namespace App\Repository;

use App\Entity\Competition;
use App\Entity\Searchprix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Competition|null find($id, $lockMode = null, $lockVersion = null)
 * @method Competition|null findOneBy(array $criteria, array $orderBy = null)
 * @method Competition[]    findAll()
 * @method Competition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompetitionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Competition::class);
    }

    public function findByprixParticipation($minValue,$maxValue)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.prixParticipation >= :minVal')
            ->setParameter('minVal', $minValue)
            ->andWhere('c.prixParticipation <= :maxVal')
            ->setParameter('maxVal', $maxValue)


            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ;
    }


    public function finddata(Searchprix $search)
   {
       return $this->createQueryBuilder('c')
           ->andWhere('c.prixParticipation <=  :maxprix')
           ->setParameter($search)
           ->getQuery()
           ->getResult()
           ;







   }
}