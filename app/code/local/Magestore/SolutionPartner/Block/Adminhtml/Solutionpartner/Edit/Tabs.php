<?php
/**
 * Magestore
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the Magestore.com license that is
 * available through the world-wide-web at this URL:
 * http://www.magestore.com/license-agreement.html
 * 
 * DISCLAIMER
 * 
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 * 
 * @category    Magestore
 * @package     Magestore_SolutionPartner
 * @copyright   Copyright (c) 2012 Magestore (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */

/**
 * Solutionpartner Edit Tabs Block
 * 
 * @category    Magestore
 * @package     Magestore_SolutionPartner
 * @author      Magestore Developer
 */
class Magestore_SolutionPartner_Block_Adminhtml_Solutionpartner_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('solutionpartner_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('solutionpartner')->__('Solution Partner Information'));
    }
    
    /**
     * prepare before render block to html
     *
     * @return Magestore_SolutionPartner_Block_Adminhtml_Solutionpartner_Edit_Tabs
     */
    protected function _beforeToHtml()
    {
        $this->addTab('gerenal_section', array(
            'label'     => Mage::helper('solutionpartner')->__('General Information'),
            'title'     => Mage::helper('solutionpartner')->__('General Information'),
            'content'   => $this->_getTabHtml('gerenal'),
        ));
//        $this->addTab('order_section', array(
//            'label'     => Mage::helper('solutionpartner')->__('Order Information'),
//            'title'     => Mage::helper('solutionpartner')->__('Order Information'),
//            'content'   => $this->_getTabHtml('order'),
//        ));
        return parent::_beforeToHtml();
    }

    private function _getTabHtml($tab)
    {
        return $this->getLayout()->createBlock( 'solutionpartner/adminhtml_solutionpartner_edit_tab_' . $tab )->toHtml();
    }
}