<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        // echo "from index action methond in index class";
        $layout = $this->getLayout();
        //$layout->getChild("head")->addJs("js/page.js");
        //$layout->getChild("head")->addJs("js/home.js");
        $layout->getChild("head")->addCss("header.css");
        $layout->getChild("head")->addCss("footer.css");
        // echo "<pre>";
        $banner=$layout->createBlock("core/template")
                    ->setTemplate("banner/banner.phtml");
                    
        $layout->getChild("content")
                    ->addChild('banner', $banner);
                    Mage::getImagePath("banner/banner.jpg");
        //echo "<pre>";
        // print_r($layout);
        $layout->toHtml();
    }

    public function saveAction()
    {
        echo "Save Page";
    }
    public function listAction()
    {
        echo "List Page";
    }
}

?>