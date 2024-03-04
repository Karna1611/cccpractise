<?php

class Core_Controller_Front_Action
{
    protected $_layout=null;
    
    public function __construct()
    {
        $this->init();
        $layout = $this->getLayout();
        $layout->getChild('head')
                ->addCss('header.css');
        $layout->getChild('head')        
                ->addCss('footer.css');
    }
    public function init()
    {
        return $this;
    }
    
    public function getLayout()
    {
        if(is_null($this->_layout))
        {
            $this->_layout = Mage::getBlock("core/layout");
        }
        return $this->_layout;
    }
    public function getRequest()
    {
        return Mage::getModel("core/request");
    }

    // public function setFormCss($file)
    // {
    // $layout = $this->getLayout();
    // $layout->getChild('head')
    //     ->addCss($file.'.css');
    // }
    public function setRedirect($url)
    {
        $url=Mage::getBaseUrl($url);
        // echo $url;
        header("Location: {$url}");
        exit();
        // echo "<script>location.href='".$url ."'</script>";
    }
}


?>