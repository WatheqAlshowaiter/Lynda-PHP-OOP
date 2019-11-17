<?php



class Course
{
    public $name;
    public $organization;
    public $subject;
    public $teacher;
    public $level;
    public $long_in_hours;
    public $language;
    public $rating;
    public $is_complete;
    public $date_complete;
    public $link;
    public $notes;


    public function __construct($args = [])
    {
        $this->name = $args['name'] ?? '';
        $this->organization = $args['organization'] ?? '';
        $this->subject = $args['subject'] ?? '';
        $this->teacher = $args['teacher'] ?? '';
        $this->level = $args['level'] ?? '';
        $this->language = $args['language'] ?? '';
        $this->is_complete = $args['is_complete'] ?? '';
        $this->long_in_hours = $args['long_in_hours'] ?? '';
        $this->rating = $args['rating'] ?? 5;
        $this->date_complete = $args['date_complete'] ?? '';
        $this->link = $args['link'] ?? '';
        $this->notes = $args['notes'] ?? '';
    }


}
