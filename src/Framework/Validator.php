<?php

declare(strict_types=1);

namespace Framework;

use Framework\Contracts\RuleInterface;
use Framework\Exceptions\ValidationException;

class Validator
{
    private array $rules;

    public function add(string $alias, RuleInterface $rule): void
    {
        $this->rules[$alias] = $rule;
    }

    public function validate(array $formData, array $fields): void
    {
        $errors = [];
        foreach ($fields as $fieldName => $rules) {
            foreach ($rules as $rule) {
                $ruleValidator = $this->rules[$rule];

                if (!$ruleValidator->validate($formData, $fieldName, [])) {
                    $errors[$fieldName][] = $ruleValidator->getMessage($formData, $fieldName, []);
                }
            }
        }

        if (!empty($errors)) {
            throw new ValidationException();
        }
    }
}
