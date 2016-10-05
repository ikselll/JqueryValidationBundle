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
   public function validate($value, Constraint $constraint) {}
}
