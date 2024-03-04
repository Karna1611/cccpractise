<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Admin_Action
{
    
    protected $_allowedActions=['form'];
   
    public function setFormCss()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('form.css')
            ->addCss('list.css');
    }
    
    
    public function formAction()
    {
        $this->setFormCss();
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $form = $layout->createBlock('catalog/admin_product_form'); //createBlock,getModel,getCollection,getBlock object return,getResource(),getRequest();,getChild('params'):returns an object of Page_Block_{params};
        $child->addChild('form', $form);
        $layout->toHtml();
    }
    public function saveAction()
    {
        
        $data=$this->getRequest()->getParams('catalog_product');
        $product=Mage::getModel('catalog/product')
            ->setData($data)->save();
        if ($data["product_id"]) 
        {
            if($product)
            {
                echo "<script>alert('Data Update Succsessfully!')</script>";
                echo "<script>location.href='".Mage::getBaseUrl().'/admin/catalog_product/list' ."'</script>";
            }
            else
            {
                echo "<script>alert('Data not updated')</script>";
            }
        }
        else
        {
            if($product)
            {
                echo "<script>alert('Data Inserted Successfully')</script>";
                echo "<script>location.href='".Mage::getBaseUrl().'/admin/catalog_product/list' ."'</script>";
            }
            else
            {
                echo "<script>alert('Data not inserted')</script>";
            }
        }
    }

    public function deleteAction()
    {
        $result=Mage::getModel('catalog/product')->load('product_id')
            ->setId($this->getRequest()->getParams('id'))
            ->delete();
            if($result)
            {
                echo "<script>alert('Data Deleted Succsessfully!')</script>";
                echo "<script>location.href='".Mage::getBaseUrl().'/admin/catalog_product/list' ."'</script>";
            }
            else
            {
                echo "<script>alert('Data not Deleted')</script>";
            }
    }

    public function listAction()
    {
        //$this->setFormCss();
        $layout=$this->getLayout();
        $child=$layout->getChild('content'); 
        $productForm=$layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $productForm);
        $layout->toHtml(); //toHtml() 1columnHtml thase;
    }
}