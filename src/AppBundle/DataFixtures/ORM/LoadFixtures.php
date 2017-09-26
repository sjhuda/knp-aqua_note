<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadFixtures extends Fixture
{
  public function load(ObjectManager $manager)
  {
    $fileLoader = $this->container->get('nelmio_alice.file_loader');
    $objectSet = $fileLoader->loadFile(__DIR__.'/fixtures.yml')->getObjects();
    foreach($objectSet as $object) {
      $manager->persist($object);
    }
    $manager->flush();
  }
}