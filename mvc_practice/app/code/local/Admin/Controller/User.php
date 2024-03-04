<?php

class Admin_Controller_User extends Core_Controller_Admin_Action
{
    protected $_allowedActions = ['login'];

    protected $_userName = 'a@gmail.com';

    protected $_password = 'a';

    public function loginAction()
    {
       
        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getParams("login");
            print_r($data);
            if ($data["admin_email"] == $this->_userName && $data["password"] == $this->_password) {
                echo 123;
                Mage::getSingleton("core/session")->set("logged_in_admin_user_id", 1);
                $this->setRedirect("admin/user/dashboard");
                echo 456;

            } else {
                echo "Nahi Huaa";
                $this->setRedirect("admin/user/login");
            }

        } else {

            $layout = $this->getLayout();
            $child = $layout->getChild('content');
            $layout->getChild('head')->addCss('header.css')
                ->addCss('form.css');
            $login = $layout->createBlock('admin/login')->setTemplate('admin/login.phtml');
            $child->addChild('login', $login);
            $layout->toHtml();
        }
    }

    public function dashboardAction()
    {
        $sessionId = Mage::getSingleton("core/session")->get("logged_in_admin_user_id");
        if ($sessionId) {
            $layout = $this->getLayout();
            //     $this->setFormCss();
            $child = $layout->getChild('content');
            $login = $layout->createBlock('admin/dashboard');
            $child->addChild('login', $login);
            $layout->toHtml();
        }
    }

}