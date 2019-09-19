<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\TextField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\AssetAdmin\Forms\UploadField;

class Competencies extends DataObject
{
    private static $db = [
        'Title' => 'Varchar',
        'URL' => 'Text',
        'SortOrder' => 'Int',
        'Content' => 'HTMLText',
    ];
    private static $has_one = array(

        "Image" => Image::class,

    );

    private static $owns = array(
        'Image'
    );

    private static $default_sort = 'SortOrder';

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->removeByName('SortOrder');

            $fields->addFieldToTab('Root.Main', new TextField('Title'));
            $fields->addFieldToTab('Root.Main', new UploadField('Image', 'Icon'));
            $fields->addFieldToTab('Root.Main', new TextField('URL', 'External URL (https://)'));
            $fields->addFieldToTab('Root.Main', new HTMLEditorField('Content'));

            return $fields;
        }
}
