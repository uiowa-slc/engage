<?php

namespace {
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
use SilverStripe\Forms\GridField\GridField;

    class HomePage extends Page
    {
        private static $db = [
            'EngageTitle' => 'Varchar',
            'EngageContent' => 'HTMLText',
            'CompetenciesTitle' => 'Varchar',
            'CompetenciesContent' => 'HTMLText',
            'SocialContent' => 'HTMLText',
        ];

        private static $has_one = [];

        private static $icon_class = 'font-icon-p-home';

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();

            $fields->addFieldToTab('Root.WaysToEngage', new TextField('EngageTitle'));
            $fields->addFieldToTab('Root.WaysToEngage', new HTMLEditorField('EngageContent'));

            $fields->addFieldToTab('Root.Competencies', new TextField('CompetenciesTitle'));
            $fields->addFieldToTab('Root.Competencies', new HTMLEditorField('CompetenciesContent'));

            $fields->addFieldToTab('Root.Social', new HTMLEditorField('SocialContent'));

            $conf = GridFieldConfig_RecordEditor::create(10);
            $conf->addComponent(new GridFieldSortableRows('SortOrder'));
            $fields->addFieldToTab('Root.Testimonials', new GridField('Testimonials', 'Testimonials', Testimonial::get(), $conf));

            $conf = GridFieldConfig_RecordEditor::create(11);
            $conf->addComponent(new GridFieldSortableRows('SortOrder'));
            $fields->addFieldToTab('Root.Competencies', new GridField('Competencies', 'Competencies', Competencies::get(), $conf));

            $conf = GridFieldConfig_RecordEditor::create(10);
            $conf->addComponent(new GridFieldSortableRows('SortOrder'));
            $fields->addFieldToTab('Root.WaysToEngage', new GridField('Engages', 'Ways To Engage', Engage::get(), $conf));

            return $fields;
        }
    }
}
