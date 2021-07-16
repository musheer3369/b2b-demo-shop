<?php
namespace Pyz\Zed\HelloWorld\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * Class HelloWorldFacade
 * @package Pyz\Zed\HelloWorld\Business
 * @method HelloWorldBusinessFactory getFactory()
 */
class HelloWorldFacade extends AbstractFacade implements HelloWorldFacadeInterface
{
    public function getSalutationMessage()
    {
        return $this->getFactory()->createMessageGenerator()->generateHelloMessage();
    }
}
