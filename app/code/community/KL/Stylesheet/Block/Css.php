<?php
class KL_Stylesheet_Block_Css extends Mage_Core_Block_Template
{
    /**
     * Render block HTML
     *
     * @return string
     */
    protected function _toHtml()
    {
        if(Mage::getStoreConfigFlag('design/stylesheet/inline')) {
            return '<style>' .
            Mage::getStoreConfig('design/stylesheet/content')
            . '</style>';
        }
    }
}
