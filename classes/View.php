<?php

class View
{
    protected $data = [];

    public function assign($name, $value)
    {
        return $this->data[$name] = $value;
    }

    public function display($template)
    {
        extract($this->data, EXTR_SKIP);
        require_once realpath(__DIR__ . '/../templates/' . $template);
    }

    public function render($template)
    {
        ob_start();
        extract($this->data, EXTR_SKIP);
        require_once realpath(__DIR__ . '/../templates/' . $template);
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}