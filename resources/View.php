<?php

class View
{
    public function view($template, $variables = array())
    {
        $config = Config::singleton();

        // define path
        $path = $config->get('views') . $template;

        // if not found the file
        if (file_exists($path) == false) {
            trigger_error('Template ' . $path . ' does not exist', E_USER_NOTICE);
            return false;
        }

        // finally, include the template
        include($path);
    }
}
