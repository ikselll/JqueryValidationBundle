<?php

namespace Boekkooi\Bundle\JqueryValidationBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * validateByParent
 *
 * @Annotation
 * @author Arkadiusz Kubaczkowski <arkadiusz.kubaczkowski@pixers.pl>
 */
class ValidateByParent extends Constraint
{
    /**
     * @var string
     */
    protected $constraintName;

    /**
     * @return string
     */
    public function getConstraintName() {
        return $this->constraintName;
    }
}
