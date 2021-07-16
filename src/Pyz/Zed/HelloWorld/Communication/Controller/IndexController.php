<?php
namespace Pyz\Zed\HelloWorld\Communication\Controller;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

/**
 * Class IndexController
 * @package Pyz\Zes\HelloWorld\Communication\Controller
 * @method \Pyz\Zed\HelloWorld\Business\HelloWorldFacade getFacade()
 */
class IndexController extends AbstractController
{
    public function indexAction()
    {
        $helloMessage = $this->getFacade()->getSalutationMessage();
        return [
            'helloMessage' => $helloMessage
        ];
    }
}
