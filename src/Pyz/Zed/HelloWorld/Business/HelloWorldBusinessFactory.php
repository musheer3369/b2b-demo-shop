<?php
namespace Pyz\Zed\HelloWorld\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class HelloWorldBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return MessageGenerator
     */
    public function createMessageGenerator(): MessageGenerator
    {
        return new MessageGenerator();
    }
}
