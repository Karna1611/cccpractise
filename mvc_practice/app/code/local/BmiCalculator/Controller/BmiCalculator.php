<?php

class BmiCalculator_Controller_BmiCalculator extends Core_Controller_Front_Action
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
        $form = $layout->createBlock('bmicalculator/form');
        $child->addChild('form', $form);
        $layout->toHtml(); 
    }

    public function saveAction()
    {
        
        $data=$this->getRequest()->getParams('bmi');
        Mage::getModel('bmicalculator/bmicalculator')
            ->setData($data)
            ->save();
    }    

    public function deleteAction()
    {
        Mage::getModel('bmicalculator/bmicalculator')->load('id')
        ->setId($this->getRequest()->getParams('id'))
        ->delete();
    }

    public function listAction()
    {
        $this->setFormCss();
        $layout=$this->getLayout();
        $child=$layout->getChild('content');
        $bmiForm=$layout->createBlock('bmicalculator/list');
        $child->addChild('list', $bmiForm);
        $layout->toHtml();
    }
}