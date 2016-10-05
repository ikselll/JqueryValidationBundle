<?php

namespace Boekkooi\Bundle\JqueryValidationBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * validateByParent
 *
 * @author Arkadiusz Kubaczkowski <arkadiusz.kubaczkowski@pixers.pl>
 */
class ValidateByParent extends Constraint
{
    protected $constraint;

    public function getConstraintName() {
        return $this->constraint;
    }
}
