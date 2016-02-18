[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/PHSDigitalAgency/silverstripe-spectrum-colorpicker/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/PHSDigitalAgency/silverstripe-spectrum-colorpicker/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/PHSDigitalAgency/silverstripe-spectrum-colorpicker/badges/build.png?b=master)](https://scrutinizer-ci.com/g/PHSDigitalAgency/silverstripe-spectrum-colorpicker/build-status/master)

# Silverstripe Spectrum Colorpicker
Yet another custom colorpicker field for Silverstripe based on Spectrum colorpicker (https://github.com/bgrins/spectrum).

## Usage
```
$colorPicker = ColorpickerField::create('ColorPicker', 'ColorPickerTitle', '#ff0');

$colorPicker->setOptions(
  array(
    'allowEmpty' => true,
    'showInitial' => true,
    'showInput' => true,
    'showAlpha' => true,
    'showPalette' => true,
    'preferredFormat' => 'rgb',
    'palette' => array(
      array("#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"),
      array("#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"),
    ),
  ));
```
            
## Polyfill support
`$colorPicker->setColorMode();`

## Options
```
array(
  'color' => false,
  'flat' => false,
  'showInput' => false,
  'allowEmpty' => false,
  'showButtons' => true,
  'clickoutFiresChange' => true,
  'showInitial' => false,
  'showPalette' => false,
  'showPaletteOnly' => false,
  'hideAfterPaletteSelect' => false,
  'togglePaletteOnly' => false,
  'showSelectionPalette' => true,
  'localStorageKey' => false,
  'appendTo' => "body",
  'maxSelectionSize' => 7,
  'cancelText' => "cancel",
  'chooseText' => "choose",
  'togglePaletteMoreText' => "more",
  'togglePaletteLessText' => "less",
  'clearText' => "Clear Color Selection",
  'noColorSelectedText' => "No Color Selected",
  'preferredFormat' => false,
  'containerClassName' => "",
  'replacerClassName' => "",
  'showAlpha' => false,
  'theme' => "sp-light",
  'palette' => array("#ffffff", "#000000", "#ff0000", "#ff8000", "#ffff00", "#008000", "#0000ff", "#4b0082", "#9400d3"),
  'selectionPalette' => [],
  'disabled' => false,
  'offset' => null
)
```
## TODO
Implement Javascript events and more...
