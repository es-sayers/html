<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;
use Esayers\Html\Elements\EncodedString;
use ValueError;

trait GlobalAttribute
{
    use Dir;
    use ClassAttribute;
    use CustomData;
    use Accesskey;
    use ForAttribute;
    use Lang;
    use Popover;
    use Draggable;
    use Enterkeyhint;
    use Hidden;
    use Id;
    use Inert;
    use Inputmode;
    use Spellcheck;
    use Style;
    use Tabindex;
    use Title;
    use Translate;

    /**
     * HTML attributes that can have a list of values with specified separator
     * [ 'attributeName' => 'separator' ]
     */
    public const LIST_ATTRIBUTES = [
        'class' => ' ',
        'accept' => ',',
        'accept-charset' => ' ',
        'ping' => ' ',
    ];


    /**
     * @var array Holds attribute data
     */
    protected array $attributes = [];

    /**
     * @param string $name Attribute name
     * @param string|array|bool $value Attribute value
     * @throws ValueError when attribute name is empty
     * @return $this
     */
    final public function setAttribute(string $name, string|array|bool $value): AbstractTag
    {
        if(trim($name) == '') {
            throw new ValueError('Attribute name must not be empty.');
        }

        if(preg_match('/[&"\'\<\/=]/', $name) == 1) {
            throw new ValueError('Attribute name must not contain any SPACE & " \' < / =');
        }

        $this->attributes[$name] = $value;
        return $this;
    }

    /**
     * @return array
     */
    final public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * Renders the attributes into a string
     * @todo implement
     * @return string
     */
    final protected function renderAttributes(): string
    {
        $attributeString = '';
        if(count($this->attributes) > 0) {
            foreach($this->attributes as $name => $value) {
                $attributeString .= $this->renderAttribute($name, $value);
            }
        }

        return $attributeString;
    }

    private function renderAttribute(string $name, array|string|bool $value) : string {

        $value = $this->encodeAttributeValue($value);

        if(is_bool($value)) {
            if($value) {
                return ' ' . $name;
            }else {
                return '';
            }
        }

        if(is_array($value)) {
            if(in_array($name, array_keys(self::LIST_ATTRIBUTES))) {
                return ' ' . $name . '="' . implode(self::LIST_ATTRIBUTES[$name], $value) . '"';
            }

            if($name == 'style') {
                $styles = '';
                foreach($value as $styleName => $styleValue) {
                    $styles .= $styleName . ":" . $styleValue . ';';
                }
                return ' ' . $name . '="' . $styles . '"';
            }
        }

        if($value == '') {
            return ' ' . $name;
        }
        
        return ' ' . $name . '="' . $value . '"';
    }

    /**
     * Encodes attribute value to be render safe
     * @param array|string|bool $value
     * @throws ValueError when $value is not an array, string, or bool
     * @return mixed
     */
    private function encodeAttributeValue(array|string|bool $value) : mixed{
        if(is_bool($value)) {
            return $value;
        }

        if(is_string($value)) {
            return EncodedString::from($value);
        }

        if(is_array($value)) {
            $encoded = [];
            foreach($value as $key => $val) {
                $encoded[$key] = EncodedString::from($val);
            }
            return $encoded;
        }

        throw new ValueError('Attribute value must be of type array|string|bool. ' . gettype($value) . ' given.');
    }
}
