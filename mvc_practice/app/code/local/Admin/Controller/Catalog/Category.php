<?php

class Admin_Controller_Catalog_Category extends Core_Controller_Admin_Action{
    
    public function setFormCss()
    {
        $layout=$this->getLayout();
        $layout->getChild('head')
               ->addCss('forms.css')
               ->addCss('list.css');
    }

    public function formAction(){
        $this->setFormCss();
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $form = $layout->createBlock('catalog/admin_category_form');
        $child->addChild('form', $form);
        $layout->toHtml(); 
    }

    public function saveAction()
    {
        
        $data=$this->getRequest()->getParams('catalog_category');
        $category=Mage::getModel('catalog/category')
            ->setData($data);
        $categoryData=$category->save();
        if ($data["category_id"]) 
        {
            if($categoryData)
            {
                echo "<script>alert('Data Update Succsessfully!')</script>";
                echo "<script>location.href='".Mage::getBaseUrl().'/admin/catalog_category/list' ."'</script>";
            }
            else
            {
                echo "<script>alert('Data not updated')</script>";
            }
        }
        else
        {
            if($categoryData)
            {
                echo "<script>alert('Data Inserted Successfully')</script>";
                echo "<script>location.href='".Mage::getBaseUrl().'/admin/catalog_category/list' ."'</script>";
            }
            else
            {
                echo "<script>alert('Data not inserted')</script>";
            }
        }
    }    

    public function deleteAction()
    {
        $result=Mage::getModel('catalog/category')->load('category_id')
        ->setId($this->getRequest()->getParams('id'))
        ->delete();
        if($result)
        {
            echo "<script>alert('Data Deleted Succsessfully!')</script>";
            echo "<script>location.href='".Mage::getBaseUrl().'/admin/catalog_category/list' ."'</script>";
        }
        else
        {
            echo "<script>alert('Data not Deleted')</script>";
        }

    }

    public function listAction()
    {
        $this->setFormCss();
        $layout=$this->getLayout();
        $child=$layout->getChild('content');

        $categoryForm=$layout->createBlock('catalog/admin_category_list');
        $child->addChild('list', $categoryForm);

        $layout->toHtml();
    }
}