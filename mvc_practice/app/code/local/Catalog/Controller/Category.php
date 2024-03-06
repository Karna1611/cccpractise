<?php 
class Catalog_Controller_Category extends Core_Controller_Front_Action {

    // protected   $_addToCart = [];
    
    public function setFormCss()
    {
        $layout=$this->getLayout();
        $layout->getChild('head')
                ->addCss('view.css');
    }
    public function viewAction()
    {
        $this->setFormCss();
        $layout = $this->getLayout();
        $child = $layout->getchild('content'); //core_block_layout
        $productForm = $layout->createBlock('catalog/admin_category_list');
        $child->addChild('list',$productForm);
        $layout->toHtml();
    }

}
?>