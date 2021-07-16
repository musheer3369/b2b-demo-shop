<?php
namespace Pyz\Yves\Demo\Plugin\Provider;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class DemoRouteProviderPlugin extends  AbstractRouteProviderPlugin
{
    protected const DEMO_ROUTE = 'demo';

    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        // TODO: Implement addRoutes() method.
        $route = $this->buildRoute('/demo','Demo','Index','indexAction');
        $routeCollection->add(self::DEMO_ROUTE,$route);
        return $routeCollection;
    }
}
