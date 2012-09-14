<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CAM_Loader extends CI_Loader
{
    /**
     * Load View
     *
     * This function is used to load a "view" file.  It has three parameters:
     *
     * 1. The name of the "view" file to be included.
     * 2. An associative array of data to be extracted for use in the view.
     * 3. TRUE/FALSE - whether to return the data or load it.  In
     * some cases it's advantageous to be able to return data so that
     * a developer can process it in some way.
     *
     * @param   string
     * @param   array
     * @param   bool
     * @return  void
     */
    public function template_view($view, $vars = array(), $return = FALSE)
    {
        $header = $this->view('admin/elements/header.php', $vars, $return);
        $body   = $this->view($view, $vars, $return);
        $footer = $this->view('admin/elements/header.php', $vars, $return);

        return $header . $body . $footer;
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */