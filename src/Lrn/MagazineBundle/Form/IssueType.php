<?php

namespace Lrn\MagazineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IssueType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number')
            ->add('datePublication','date',array('years'=>range(date('Y'),date('Y',strtotime(' -50 years'))),
                'required'=> true,
            ))
            ->add('file')
            ->add('publication','entity',array('required' => TRUE,
                'class'=>'LrnMagazineBundle:Publication'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lrn\MagazineBundle\Entity\Issue'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lrn_magazinebundle_issue';
    }
}
