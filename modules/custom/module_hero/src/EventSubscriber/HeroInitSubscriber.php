<?php

namespace Drupal\module_hero\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;

class HeroInitSubscriber implements EventSubscriberInterface
{

  public function __construct()
  {
  }

  public function onRequest($event)
  {
    var_dump('Hello from My Event');
  }

  public static function getSubscribedEvents()
  {
    $events[KernelEvents::REQUEST][] = ['onRequest'];
    return $events;
  }
}
