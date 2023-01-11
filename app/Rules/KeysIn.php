<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class KeysIn implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(protected array $values)
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        // Swap keys with their values in our field list, so we
        // get ['foo' => 0, 'bar' => 1] instead of ['foo', 'bar']
        $allowedKeys = array_flip($this->values);

        // Compare the value's array *keys* with the flipped fields
        $unknownKeys = array_diff_key($value, $allowedKeys);

        // The validation only passes if there are no unknown keys
        return count($unknownKeys) === 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return ':attribute contains invalid keys';
    }
}
