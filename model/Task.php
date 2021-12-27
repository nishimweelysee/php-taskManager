<?php
    class Task {
        private $title;
        private $date;
        private $username;
        private $status;
        private $note;

        public function __construct($title,$date,$username,$status,$note)
        {
            $this->title = $title;
            $this->date = $date;
            $this->username = $username;
            $this->status = $status;
            $this->note = $note;
        }
        public function get_title(){
            return $this->title;
        }
        public function set_title($title){
            $this->title = $title;
        }
        public function get_date(){
            return $this->date;
        }
        public function set_date($date){
            $this->date = $date;
        }
        public function get_username(){
            return $this->username;
        }
        public function set_username($username){
            $this->username = $username;
        }
        public function get_status(){
            return $this->status;
        }
        public function set_status($status){
            $this->status = $status;
        }
        public function get_note(){
            return $this->note;
        }
        public function set_note($note){
            $this->note = $note;
        }
    }
?>