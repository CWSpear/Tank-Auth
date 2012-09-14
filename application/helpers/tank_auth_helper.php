<?php

if(!function_exists('tank_auth_error'))
{
    function tank_auth_error($key, $before = '<span class="help-inline">', $after = '</span>')
    {
        $ci =& get_instance();
        $errors = $ci->tank_auth->get_error_message();

        $error = form_error($key, '<span>', '</span>'); // force no delimiters on this function
        if(empty($error)) $error = $ci->lang->line(@$errors[$key]);
        
        if(!empty($error)) return $before . $error . $after;
    }    
}

if(!function_exists('has_tank_auth_error'))
{
    function has_tank_auth_error($key, $class = 'error')
    {
        $error = tank_auth_error($key);

        if(!empty($error)) return $class;
    }    
}
