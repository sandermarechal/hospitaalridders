<?php

namespace Jejik\AppBundle\Admin;

use Jejik\AppBundle\Document\Page;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\DoctrinePHPCRAdminBundle\Admin\Admin;

class PageAdmin extends Admin
{
    /**
     * Set a parent on a new Page instance
     *
     * @return void
     */
    public function getNewInstance()
    {
        /** @var $new StaticContent */
        $new = parent::getNewInstance();
        if ($this->hasRequest()) {
            $parentId = $this->getRequest()->query->get('parent');
            if (null !== $parentId) {
                $new->setParent($this->getModelManager()->find(null, $parentId));
            }
        }

        return $new;
    }

    /**
     * Remove all export formats
     *
     * @return array
     */
    public function getExportFormats()
    {
        return array();
    }

    /**
     * Configure list fields
     *
     * @param ListMapper $listMapper
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('publishable')
            ->add('title')
        ;
    }

    /**
     * Configure form fields
     *
     * @param FormMapper $formMapper
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('form.group_general')
                ->add('parent', 'doctrine_phpcr_odm_tree', array('root_node' => $this->getRootPath(), 'choice_list' => array(), 'select_root_node' => true))
                ->add('name', 'text')
                ->add('title', 'text')
                ->add('body', 'textarea', array('required' => false))
                ->add('publishable', 'checkbox', array('required' => false))
            ->end()
        ;
    }

    /**
     * Configure filters
     *
     * @param DatagridMapper $datagridMapper
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title', 'doctrine_phpcr_string')
            ->add('name', 'doctrine_phpcr_nodename')
        ;
    }
}
