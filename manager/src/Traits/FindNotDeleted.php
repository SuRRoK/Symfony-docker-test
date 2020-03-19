<?php

namespace App\Traits;


trait  FindNotDeleted {
    public function findNotDeleted($value, $maxResults = 10000)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.isDeleted = :isDeleted')
            ->setParameter('isDeleted', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults($maxResults)
            ->getQuery()
            ->getResult()
            ;
    }
}