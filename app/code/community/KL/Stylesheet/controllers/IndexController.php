<?php
class KL_Stylesheet_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $content = Mage::getStoreConfig('design/stylesheet/content');
        $this->getResponse()->setHeader('Content-type', 'text/css');
        $this->getResponse()->setBody($content);
    }
}
