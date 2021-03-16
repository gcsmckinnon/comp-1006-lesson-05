<?php

  class Example {

    public $message;
    private $secret;

    public function __construct ($message) {
      $this->message = $message;
      $this->secret = "PSST...";
    }

    public function display_message () {
      echo $this->message . "<br/>";
    }

    public function yell_message () {
      echo strtoupper($this->message) . "<br/>";
    }

    public function get_secret () {
      return $this->secret;
    }

    public function set_secret ($value) {
      $this->secret = $value;
    }

  }

  $example = new Example("Hello World");
  $example->display_message();
  $example->yell_message();
  $example->message = "Goodbye.";
  $example->yell_message();
  $example->set_secret("shhhhh");
  echo $example->get_secret();