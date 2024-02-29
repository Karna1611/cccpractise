<?php

class Customer_Controller_Account extends Core_Controller_Front_Action
{
    
    protected $_allowedActions=['login','register'];
    
    public function init()
    {
        // $this->getRequest()->getActionName();
        if(!in_array($this->getRequest()->getActionName(), $this->_allowedActions) && 
        !Mage::getSingleton('core/session')->get('customer_id'))
        {
            $this->setRedirect('customer/account/login');
        }
    }
    
    public function setFormCss()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('form.css');
    }
    public function registerAction()
    {
        $this->setFormCss();
        $layout=$this->getLayout();
        $child=$layout->getChild('content');
        $register=$layout->createBlock('customer/register');
        $child->addChild('register',$register);
        $layout->toHtml();
    }
    public function loginAction()
    {
        if (!isset($_POST['submit']))
        {
            $this->setFormCss();
            $layout=$this->getLayout();
            $child=$layout->getChild('content');
            $login=$layout->createBlock('customer/login');
            $child->addChild('login',$login);
            $layout->toHtml();
        }
        else {
            $data = $this->getRequest()->getParams('customer');
           echo '<pre>';
            $email = $data['customer_email'];
            $password = $data['password'];
            $customerCollection = Mage::getModel('customer/register');
            $query=$customerCollection->getCollection()
                ->addFieldToFilter('customer_email', $email)
                ->addFieldToFilter('password', $password);
            print_r($query);
            $count = 0;
            $customerId = 0;
            foreach ($query->getData() as $customer) {
                $count++;
                $customerId = $customer->getCustomerId();
            }

            echo $count;
            if ($count == 1) {
                Mage::getSingleton('core/session')->set('customer_id', $customerId);
                // $dashboard = Mage::getBaseUrl('customer/account/dashboard');
                // header("location:$dashboard");
                $this->setRedirect('customer/account/dashboard');
            } else {
                //echo "Wrong password";
                $this->setRedirect('customer/account/login');
            }
        }
    }

    public function dashboardAction()
    {
        $customerId = Mage::getSingleton('core/session')->get('customer_id');
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('customer/details.css');
        $child = $layout->getChild("content");
        $dashboard = $layout->createBlock("customer/details");
        $child->addChild('dashboard', $dashboard);
        $dashboard->setCustomerId($customerId);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $registerModel=$this->getRequest()->getParams('customer');
        Mage::getModel('customer/Register')
            ->setData($registerModel)
            ->save();

    }
}