<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\TextField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\File;

class Engage extends DataObject
{
    private static $db = [
        'Title' => 'Varchar',
        'SortOrder' => 'Int',
        'Content' => 'HTMLText',
    ];
    private static $has_one = array(

        "Video" => File::class,

    );

    private static $owns = array(
        'Video'
    );

    private static $default_sort = 'SortOrder';

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->removeByName('SortOrder');

            $fields->addFieldToTab('Root.Main', new TextField('Title'));
            $fields->addFieldToTab('Root.Main', new UploadField('Video', 'Video'));
            $fields->addFieldToTab('Root.Main', new HTMLEditorField('Content'));

            return $fields;
        }
}
