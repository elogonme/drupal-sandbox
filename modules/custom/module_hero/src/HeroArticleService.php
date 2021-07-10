<?php

namespace Drupal\module_hero;

use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\Core\Entity\EntityManager;

/**
 * Our hero article service
 */
class HeroArticleService
{
  private $entityQuery;
  private $entituManager;

  public function __construct(QueryFactory $entityQuery, EntityManager $entityManager)
  {
    $this->entityQuery = $entityQuery;
    $this->entityManager = $entityManager;
  }
  /**
   * Method for getting Articles, regarding heroes
   */
  public function getHeroArticles()
  {
    $articleNids = $this->entityQuery->get('node')->condition('type', 'article')->execute();
    $articles = $this->entityManager->getStorage('node')->loadMultiple($articleNids);

    return $articles;
  }
}
