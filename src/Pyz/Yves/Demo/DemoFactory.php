<?php
namespace Pyz\Yves\Demo;

use Pyz\Yves\Demo\Form\DemoForm;
use Spryker\Yves\Kernel\AbstractFactory;
use Symfony\Component\Form\FormFactory as SymfonyFormFactory;
use Spryker\Shared\Application\ApplicationConstants;
use Symfony\Component\Form\FormInterface;

class DemoFactory extends AbstractFactory
{
    public  function  createDemoForm():FormInterface
    {
        return $this->getFormFactory()->create(DemoForm::class);
    }

    public function getFormFactory(): SymfonyFormFactory
    {
        return $this->getProvidedDependency(ApplicationConstants::FORM_FACTORY);
    }
}
