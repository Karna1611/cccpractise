<?php
class Catalog_Block_Admin_Category_Form extends Core_Block_Template{
    public function __construct()
        {
            $this->setTemplate('catalog/admin/category/form.phtml');
        }

        public function getBanner(){
            return Mage::getModel('catalog/banner')->load($this->getRequest()->getParams('id',0));
        }
    }

?>