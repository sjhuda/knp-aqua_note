<?php

namespace AppBundle\DataFixtures\ORM;

use Faker\Provider\Base as BaseProvider;

class GenusProvider extends BaseProvider {

  public function genus()
  {
    $genera = [
      'Octopus',
      'Balaena',
      'Orcinus',
      'Hippocampus',
      'Asterias',
      'Amphiprion',
      'Carcharodon',
      'Aurelia',
      'Cucumaria',
      'Balistoides',
      'Paralithodes',
      'Chelonia',
      'Trichechus',
      'Eumetopias'
    ];

    $key = array_rand($genera);
    return $genera[$key];
  }
}