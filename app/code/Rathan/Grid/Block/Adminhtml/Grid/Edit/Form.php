<?php

namespace Rathan\Grid\Block\Adminhtml\Grid\Edit;

class Form extends \Magento\Backend\Block\Widget\Form\Generic
{
   
    protected $_systemStore;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig,
        \Rathan\Grid\Model\Status $options,
        array $data = []
    ) 
    {
        $this->_options = $options;
        $this->_wysiwygConfig = $wysiwygConfig;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    protected function _prepareForm()
    {
        $dateFormat = $this->_localeDate->getDateFormat(\IntlDateFormatter::SHORT);
        $model = $this->_coreRegistry->registry('row_data');
        $form = $this->_formFactory->create(
            ['data' => [
                            'id' => 'edit_form', 
                            'enctype' => 'multipart/form-data', 
                            'action' => $this->getData('action'), 
                            'method' => 'post'
                        ]
            ]
        );

        $form->setHtmlIdPrefix('wkgrid_');
        if ($model->getEntityId()) {
            $fieldset = $form->addFieldset(
                'base_fieldset',
                ['legend' => __('Edit Row Data'), 'class' => 'fieldset-wide']
            );
            $fieldset->addField('id', 'hidden', ['name' => 'id']);
        } else {
            $fieldset = $form->addFieldset(
                'base_fieldset',
                ['legend' => __('Add Row Data'), 'class' => 'fieldset-wide']
            );
        }

        $fieldset->addField(
            'firstname',
            'text',
            [
                'name' => 'firstname',
                'label' => __('firstname'),
                'id' => 'firstname',
                'title' => __('firstname'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );
        $fieldset->addField(
            'lastname',
            'text',
            [
                'name' => 'lastname',
                'label' => __('lastname'),
                'id' => 'lastname',
                'title' => __('lastname'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );
        $fieldset->addField(
            'email',
            'text',
            [
                'name' => 'email',
                'label' => __('email'),
                'id' => 'email',
                'title' => __('email'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );
        $fieldset->addField(
            'phone',
            'text',
            [
                'name' => 'phone',
                'label' => __('phone'),
                'id' => 'firstname',
                'title' => __('phone'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );

      
       
        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}