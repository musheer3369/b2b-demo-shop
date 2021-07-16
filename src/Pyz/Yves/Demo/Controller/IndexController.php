<?php
namespace Pyz\Yves\Demo\Controller;

use Pyz\Yves\Demo\DemoFactory;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Yves\Demo\DemoFactory getFactory()
 */
class IndexController extends  AbstractController
{
    public  function indexAction(Request $request)
    {
        $form = $this->getFactory()->createDemoForm()->handleRequest($request);
        $response['demoForm'] = $form->createView();
        dump($form->createView());
       /* return [
            'helloMessage' => 'data'
        ];*/
      /*  return $this->renderView('@Demo/index/index.twig', [
            'form' => $form->createView(),
        ]);*/
        return $this->view($response,[],'@Demo/index/index.twig');

    }

}

