<?php

class ColorpickerField extends TextField
{
    /**
     * Spectrum Colorpicker Options
     *
     * 'color' => false,
     * 'flat' => false,
     * 'showInput' => false,
     * 'allowEmpty' => false,
     * 'showButtons' => true,
     * 'clickoutFiresChange' => true,
     * 'showInitial' => false,
     * 'showPalette' => false,
     * 'showPaletteOnly' => false,
     * 'hideAfterPaletteSelect' => false,
     * 'togglePaletteOnly' => false,
     * 'showSelectionPalette' => true,
     * 'localStorageKey' => false,
     * 'appendTo' => "body",
     * 'maxSelectionSize' => 7,
     * 'cancelText' => "cancel",
     * 'chooseText' => "choose",
     * 'togglePaletteMoreText' => "more",
     * 'togglePaletteLessText' => "less",
     * 'clearText' => "Clear Color Selection",
     * 'noColorSelectedText' => "No Color Selected",
     * 'preferredFormat' => false,
     * 'containerClassName' => "",
     * 'replacerClassName' => "",
     * 'showAlpha' => false,
     * 'theme' => "sp-light",
     * 'palette' => array("#ffffff", "#000000", "#ff0000", "#ff8000", "#ffff00", "#008000", "#0000ff", "#4b0082", "#9400d3"),
     * 'selectionPalette' => [],
     * 'disabled' => false,
     * 'offset' => null
     **/
 
  public function __construct($name, $title = null, $value = '', $form = null)
  {
      parent::__construct($name, $title, $value);
  }

    public function Field($properties = array())
    {
        $this->addExtraClass('spectrum-colorpickerfield');

        Requirements::css(SPECTRUM_COLORPICKER_DIR . '/bower_components/spectrum/spectrum.css');
        Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery/jquery.js');
        Requirements::javascript(SPECTRUM_COLORPICKER_DIR . '/bower_components/spectrum/spectrum.js');
        Requirements::javascript(SPECTRUM_COLORPICKER_DIR . '/javascript/colorpicker.js');

        return parent::Field($properties);
    }

    public function setOptions($options = array())
    {
        $this->setAttribute('data-spectrum-options', json_encode($options));
    }

    public function setColorMode()
    {
        $this->attributes['type'] = 'color';
    }
}
