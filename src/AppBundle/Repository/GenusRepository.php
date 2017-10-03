<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Genus;
use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository {

  /**
   * @return Genus[]
   */
  public function findAllPublishedOrderedByRecentlyActive() {
    return $this->createQueryBuilder('genus')
      ->andWhere('genus.isPublished = :isPublished')
      ->setParameter('isPublished', TRUE)
      ->leftJoin('genus.notes', 'genus_note')
      ->orderBy('genus_notes.createdAt', 'DESC')
      ->getQuery()
      ->execute();
  }
}