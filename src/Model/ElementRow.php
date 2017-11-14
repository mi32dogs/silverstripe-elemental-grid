<?php

namespace TWM\ElementalGrid\Models;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\TextField;
use TWM\ElementalGrid\Controllers\ElementRowController;

class ElementRow extends BaseElement
{
    private static $icon = 'font-icon-menu';

    private static $table_name = 'ElementRow';

    private static $singular_name = 'row';

    private static $plural_name = 'rows';

    private static $description = 'Row element';

    private static $controller_class = ElementRowController::class;

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName('TitleAndDisplayed');
        $fields->addFieldToTab('Root.Main', TextField::create('Title'));
        return $fields;
    }

    public function getSummary()
    {
        return '';
    }

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'Row');
    }

    public function IsRow(){
        return true;
    }

}
