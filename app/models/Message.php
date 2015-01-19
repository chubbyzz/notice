<?php

class Message
{
    public $internal = ["direction", "params", "internal"];
    public $text, $type, $params;
    public $layout = "topRight";
    public $direction = [ "v" => "top", "h" => "right"];
    public $timeout = 5000;
    public $closeWith = ['click'];
    public $animation = [
                    "open"  => ["height" => "toggle"],
                    "close" => ["height" => "toggle"]
                ];

    public function __construct($text = null, $type = null)
    {
        $this->text = $text;
        $this->type = $type;
    }

    public function __get($attribute)
    {
        if ($attribute == "text") {
            if(is_null($this->params))
                return Lang::get($this->$attribute);
            else
                return Lang::get($this->$attribute, $this->params);
        }
        else
            return $this->$attribute;

    }

    public function toJson(){
        $this->layout = $this->direction["v"].ucfirst($this->direction["h"]);
        foreach ($this->internal as $field) {
            unset($this->{$field});
        }
        return json_encode($this);
    }

}
