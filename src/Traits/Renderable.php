<?php

namespace Esayers\Html\Traits;

use ValueError;

trait Renderable
{
    /**
     * Returns string to be rendered
     *
     * @return string
     */
    abstract protected function renderString(): string;

    /**
     * Creates string to be rendered
     * @return string
     */
    final public function render(): string
    {
        $renderString = $this->renderString();
        $renderString = $this->preRender($renderString);
        $this->validate($renderString);
        return $renderString;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return $this->render();
    }

    /**
     * Performs validation before rendering
     *
     * @throws ValueError when $renderString contains a character in { @see Renderable::illegalRenderChars() }
     * @return true when all validation passed
     */
    private function validate(string $renderString): true
    {
        # Call custom validator
        if (!$this->validator($renderString)) {
            throw new ValueError(
                '"' . $renderString . '" did not pass validation checks'
            );
        }

        if ($this->stringContainsAny($renderString, $this->illegalRenderChars())) {
            throw new ValueError(
                'Illegal characters in render string "' . $renderString . '".' .
                ' Must not contain ' . implode(', ', $this->illegalRenderChars())
            );
        }

        return true;
    }

    /**
     * Checks if $haystack contains any values in $needles
     * @param string $haystack The string to search
     * @param string[] $needles The strings to look for
     * @return bool True if string contains any needles, false otherwise
     */
    protected function stringContainsAny(string $haystack, array $needles): bool
    {
        foreach ($needles as $char) {
            if (str_contains($haystack, $char)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Called before validating or rendering the string
     * @param string $renderString string to be rendered
     * @return string string to be rendered
     */
    protected function preRender(string $renderString): string
    {
        return $renderString;
    }

    /**
     * Called before rendering the string, for custom validation checks.
     *
     * If false is returned, a ValueError will be thrown.
     *
     * @param string $renderString string to be rendered
     * @return true True on pass validation, false on fail
     */
    protected function validator(string $renderString): bool
    {
        return true;
    }

    /**
     * Characters that are not allowed to be in the render string.
     * @return array
     */
    protected function illegalRenderChars(): array
    {
        return [];
    }
}
