<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        // echo "from index action methond in index class";
        $layout = $this->getLayout();
        //print_r($layout);
        $layout->getChild("head")->addJs("js/page.js");
        $layout->getChild("head")->addJs("js/home.js");
        $layout->getChild("head")->addCss("css/page.css");
        $layout->getChild("head")->addCss("css/home.css");
        // echo "<pre>";
        $banner=$layout->createBlock("core/template")
                    ->setTemplate("banner/banner.phtml");
                    
        $layout->getChild("content")
                    ->addChild('banner', $banner)
                    ->addChild('banner1', $banner);

        $layout->toHtml();
    }
}

?>