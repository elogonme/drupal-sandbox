<?php

namespace Drupal\drupalup_route_alter\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Liste to dynamic route events and enable to alter
 */

class DrupaupRouteSubscriber extends RouteSubscriberBase
{

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection)
  {
    $user_login_route = $collection->get('user_login');
    $user_login_route->setPath('hell/login');
    $user_route = $collection->get('user.page');
    $user_route->setPath('/hell');
  }
}
