<?php

class Admin_Controller_Catalog_Category extends Core_Controller_Admin_Action{
    
    // public function setFormCss()
    // {
    //     $layout=$this->getLayout();
    //     $layout->getChild('head')
    //            ->addCss('form.css')
    //            ->addCss('list.css');
    // }

    public function formAction(){
        //$this->setFormCss();
        $layout = $this->getLayout();        
        $child = $layout->getChild('content');
        $form = $layout->createBlock('catalog/admin_category_form');
        $child->addChild('form', $form);
        $layout->toHtml(); 
    }

    public function saveAction()
    {
        
        $data=$this->getRequest()->getParams('catalog_category');
        Mage::getModel('catalog/category')
            ->setData($data)
            ->save();
    }    

    public function deleteAction()
    {
        Mage::getModel('catalog/category')->load('category_id')
        ->setId($this->getRequest()->getParams('id'))
        ->delete();
    }

    public function listAction()
    {
        $layout=$this->getLayout();
        $child=$layout->getChild('content');
        $categoryForm=$layout->createBlock('catalog/admin_category_list');
        $child->addChild('list', $categoryForm);
        $layout->toHtml();
    }

    public function view()
    {

    }
}