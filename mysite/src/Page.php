<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;

    class Page extends SiteTree
    {
        private static $db = [];

        private static $has_one = [];

        public function Testimonials(){
            return Testimonial::get();
        }
        public function Competencies(){
            return Competencies::get();
        }
        public function Engages(){
            return Engage::get();
        }
    }
}
