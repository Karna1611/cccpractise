<?php

class Brand_Controller_Brand extends Core_Controller_Front_Action
{
    public function setFormCss()
    {
        $layout=$this->getLayout();
        $layout->getChild('head')
                ->addCss('form.css')
                ->addCss('list.css');
    }
    public function formAction()
    {
        $this->setFormCss();
        $layout = $this->getLayout();        
        $child = $layout->getChild('content');
        $form = $layout->createBlock('brand/form');
        $child->addChild('form', $form);
        $layout->toHtml(); 
    }

    public function saveAction()
    {
        
        $data=$this->getRequest()->getParams('brand');
        Mage::getModel('brand/brand')
            ->setData($data)
            ->save();
    }    

    public function deleteAction()
    {
        Mage::getModel('brand/brand')->load('brand_id')
        ->setId($this->getRequest()->getParams('id'))
        ->delete();
    }

    public function listAction()
    {
        $this->setFormCss();
        $layout=$this->getLayout();
        $child=$layout->getChild('content');
        $brandForm=$layout->createBlock('brand/list');
        $child->addChild('list', $brandForm);
        $layout->toHtml();
    }

}