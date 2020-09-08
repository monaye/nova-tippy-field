<?php

namespace Monaye\NovaTippyField;

use Laravel\Nova\Fields\Field;

class Tippy extends Field
{


    /**
     * Whether to always show the content for the field expanded or not.
     *
     * @var bool
     */
    public $shouldShow = false;


    public $position = 'left';

    public $placement = 'top';

    /**
     * Always show the content of textarea fields inside Nova.
     *
     * @return $this
     */
    public function shouldShow()
    {
        $this->shouldShow = true;

        return $this;
    }

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
            'shouldShow' => $this->shouldShow,
            'position' => $this->position,
            'placement' => $this->placement,
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
    public function iconUrl($iconUrl)
    {
        return $this->withMeta(['iconUrl' => $iconUrl]);
    }

    /**
     * Allows the tootip to be added on a text.
     *
     * @param string  $text
     * @return $this
     */
    public function position($position)
    {
        $this->position = $position;

        return $this;
    }

    public function toolContent($toolContent)
    {
        return $this->withMeta(['toolContent' => $toolContent]);
    }

    public function placement($placement)
    {
        $this->placement = $placement;

        return $this;
    }

    public function tippyOptions($tippyOptions)
    {
        return $this->withMeta(['tippyOptions' => $tippyOptions]);
    }
}
