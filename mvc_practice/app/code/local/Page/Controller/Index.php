<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        // echo "from index action methond in index class";
        $layout = $this->getLayout();
        $layout->getChild("head")->addJs("js/page.js");
        $layout->getChild("head")->addJs("js/home.js");
        $layout->getChild("head")->addCss("css/page.css");
        $layout->getChild("head")->addCss("css/home.css");
        // echo "<pre>";
        $layout->toHtml();
    }
}

?>