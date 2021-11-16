<?php
namespace RedChamps\DisableFormKeyValidation\Plugin;

use Magento\Framework\Data\Form\FormKey\Validator;

class FormKeyValidatorPlugin
{
    public function afterValidate(Validator $subject, $result)
    {
        return true;
    }
}
