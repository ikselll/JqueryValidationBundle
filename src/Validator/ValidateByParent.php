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
    /**
     * @var string
     */
    protected $constraint;

    /**
     * @var string
     */
    public function getConstraintName() {
        return $this->constraint;
    }
}
