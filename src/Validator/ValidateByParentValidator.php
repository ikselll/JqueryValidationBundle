<?php

namespace Boekkooi\Bundle\JqueryValidationBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * ValidateByParentValidator
 *
 * @author Arkadiusz Kubaczkowski <arkadiusz.kubaczkowski@pixers.pl>
 */
class ValidateByParentValidator extends ConstraintValidator
{
    /**
     * @param string $value
     * @param Constraint $constraint
     * @return void
     */
   public function validate($value, Constraint $constraint) {}
}
