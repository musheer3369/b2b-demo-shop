<?php
namespace Pyz\Yves\Demo\Form;

use Spryker\Yves\Kernel\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DemoForm extends AbstractType
{
    public function getBlockPrefix()
    {
        return 'demoForm';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('checkTerms',CheckboxType::class, ['mapped'=>false]);
    }

}
