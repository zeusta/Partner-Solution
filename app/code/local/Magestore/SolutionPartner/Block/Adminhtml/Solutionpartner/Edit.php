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
 * Solutionpartner Edit Block
 * 
 * @category     Magestore
 * @package     Magestore_SolutionPartner
 * @author      Magestore Developer
 */
class Magestore_SolutionPartner_Block_Adminhtml_Solutionpartner_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
        
        $this->_objectId = 'id';
        $this->_blockGroup = 'solutionpartner';
        $this->_controller = 'adminhtml_solutionpartner';
        
        $this->_updateButton('save', 'label', Mage::helper('solutionpartner')->__('Save Solution Partner'));
        $this->_updateButton('delete', 'label', Mage::helper('solutionpartner')->__('Delete Solution Partner'));
        
        $this->_addButton('saveandcontinue', array(
            'label'        => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'    => 'saveAndContinueEdit()',
            'class'        => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('solutionpartner_content') == null)
                    tinyMCE.execCommand('mceAddControl', false, 'solutionpartner_content');
                else
                    tinyMCE.execCommand('mceRemoveControl', false, 'solutionpartner_content');
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }
    
    /**
     * get text to show in header when edit an item
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('solutionpartner_data')
            && Mage::registry('solutionpartner_data')->getId()
        ) {
            return Mage::helper('solutionpartner')->__("Edit Solution Partner '%s'",
                                                $this->htmlEscape(Mage::registry('solutionpartner_data')->getTitle())
            );
        }
        return Mage::helper('solutionpartner')->__('Add Solution Partner');
    }
}