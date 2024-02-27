<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function setFormCss()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('forms.css')
            ->addCss('list.css');
    }
    
    public function formAction()
    {
        $this->setFormCss();
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $form = $layout->createBlock('catalog/admin_product_form');
        $child->addChild('form', $form);
        $layout->toHtml();
    }
    public function saveAction()
    {
        
        $data=$this->getRequest()->getParams('catalog_product');
        $product=Mage::getModel('catalog/product')
            ->setData($data)
            ->save();
    }

    public function deleteAction()
    {
        Mage::getModel('catalog/product')->load('product_id')
            ->setId($this->getRequest()->getParams('id'))
            ->delete();
    }

    public function listAction()
    {
        $this->setFormCss();
        $layout=$this->getLayout();
        $child=$layout->getChild('content');

        $productForm=$layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $productForm);

        $layout->toHtml();
    }
}