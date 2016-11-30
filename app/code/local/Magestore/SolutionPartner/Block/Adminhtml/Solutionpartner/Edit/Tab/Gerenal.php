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
 * Solutionpartner Edit Form Content Tab Block
 * 
 * @category    Magestore
 * @package     Magestore_SolutionPartner
 * @author      Magestore Developer
 */
class Magestore_SolutionPartner_Block_Adminhtml_Solutionpartner_Edit_Tab_Gerenal extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * prepare tab form's information
     *
     * @return Magestore_SolutionPartner_Block_Adminhtml_Solutionpartner_Edit_Tab_Gerenal
     */
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        
        if (Mage::getSingleton('adminhtml/session')->getSolutionPartnerData()) {
            $data = Mage::getSingleton('adminhtml/session')->getSolutionPartnerData();
            Mage::getSingleton('adminhtml/session')->setSolutionPartnerData(null);
        } elseif (Mage::registry('solutionpartner_data')) {
            $data = Mage::registry('solutionpartner_data')->getData();
        }
        $fieldset = $form->addFieldset('solutionpartner_form', array(
            'legend'=>Mage::helper('solutionpartner')->__('General information')
        ));

        $fieldset->addField('title', 'text', array(
            'label'        => Mage::helper('solutionpartner')->__('Title'),
            'class'        => 'required-entry',
            'required'    => true,
            'name'        => 'title',
        ));

        $fieldset->addField('filename', 'file', array(
            'label'        => Mage::helper('solutionpartner')->__('File'),
            'required'    => false,
            'name'        => 'filename',
        ));

        $fieldset->addField('status', 'select', array(
            'label'        => Mage::helper('solutionpartner')->__('Status'),
            'name'        => 'status',
            'values'    => Mage::getSingleton('solutionpartner/status')->getOptionHash(),
        ));

        $fieldset->addField('content', 'editor', array(
            'name'        => 'content',
            'label'        => Mage::helper('solutionpartner')->__('Content'),
            'title'        => Mage::helper('solutionpartner')->__('Content'),
            'style'        => 'width:700px; height:500px;',
            'wysiwyg'    => false,
            'required'    => true,
        ));

        $form->setValues($data);
        return parent::_prepareForm();
    }
}