<?php

namespace Monaye\NovaTippyField;

use Laravel\Nova\Fields\Field;

class Tippy extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-tippy-field';

    public function resolve($resource, $attribute = null)
    {
        parent::resolve($resource, $attribute);

        $this->withMeta([
            'id' => $resource->id,
        ]);
    }

    /**
     * Allows the tootip to be added on a text.
     *
     * @param string  $text
     * @return $this
     */
    public function text($text)
    {
        return $this->withMeta(['text' => $text]);
    }

    /**
     * Allows the tootip to be added on a text.
     *
     * @param string  $text
     * @return $this
     */
    public function icon($icon)
    {
        return $this->withMeta(['icon' => file_get_contents($icon)]);
    }

    /**
    * Allows the tootip to be added on a text.
    *
    * @param string  $text
    * @return $this
    */
    public function url($url)
    {
        return $this->withMeta(['url' => $url]);
    }

    /**
     * Allows the tootip to be added on a text.
     *
     * @param string  $text
     * @return $this
     */
    public function position($position = 'left')
    {
        return $this->withMeta(['position' => $position]);
    }

    public function toolContent($toolContent)
    {
        return $this->withMeta(['toolContent' => $toolContent]);
    }

    public function placement($placement = 'top')
    {
        return $this->withMeta(['placement' => $placement]);
    }

    public function tippyOptions($tippyOptions)
    {
        return $this->withMeta(['tippyOptions' => $tippyOptions]);
    }
}
