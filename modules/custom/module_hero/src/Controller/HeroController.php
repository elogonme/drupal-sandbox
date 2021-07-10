<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\module_hero\HeroArticleService;
use Drupal\Core\Config\ConfigFactory;

// This is our hero controller
class HeroController extends ControllerBase
{
  private $articleHeroService;
  protected $configFactory;

  public static function create(ContainerInterface $container)
  {
    return new static(
      $container->get('module_hero.hero_articles'),
      $container->get('config.factory')
    );
  }

  public function __construct(HeroArticleService $articleHeroService, ConfigFactory $configFactory)
  {
    $this->articleHeroService = $articleHeroService;
    $this->configFactory = $configFactory;
  }

  public function heroList()
  {
    $heroes = [
      ['name' => 'Green Lantern'],
      ['name' =>  'Captain America'],
      ['name' => 'Wonder Woman'],
      ['name' => 'Iron Man'],
      ['name' => 'Wolverine'],
      ['name' => 'Superman'],
      ['name' =>  'Spider-Man'],
      ['name' =>  'Batman']
    ];

    return [
      '#theme' => 'hero_list',
      '#items' => $heroes,
      '#title' => $this->t($this->configFactory->get('module_hero.settings')->get('hero_list_title')),
    ];
  }
}
