<?php
class Advertisement {
    public $id;
    public $userid;
    public $title;

    public function __construct($id, $userid, $title) {
        $this->id = $id;
        $this->userid = $userid;
        $this->title = $title;
    }
}