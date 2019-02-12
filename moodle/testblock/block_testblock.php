<?php
class block_testblock extends block_base {
    public function init() {
        $this->title = get_string('testblock', 'block_testblock');
    }

public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }
 
    $this->content         =  new stdClass;
    $this->content->text   = 'Содержимое нашего тестового блока!';
    $this->content->footer = 'Некоторый контент в подвале блока';
 
    return $this->content;
}

}

