<?php

namespace Drupal\module_hero\Controller;

// This is our hero controller
class HeroController
{
  public function heroList()
  {

    $heros = [
      ['name' => 'Green Lantern'],
      ['name' =>  'Captain America'],
      ['name' => 'Wonder Woman'],
      ['name' => 'Iron Man'],
      ['name' => 'Wolverine'],
      ['name' => 'Superman'],
      ['name' =>  'Spider-Man'],
      ['name' =>  'Batman']
    ];
    $ourHeros = '';
    foreach ($heros as $hero) {
      $ourHeros .= '<li>' . $hero['name'] . '</li>';
    }

    return [
      '#type' => 'markup',
      '#markup' => '<ol>' . $ourHeros . '</ol>',
    ];
  }
}
