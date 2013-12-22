<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------------
 * CI MY Session Class Extension
 * ------------------------------------------------------------------------
 *
*/
class MY_Session extends CI_Session {
   /**
    * sess_update()
    * 
    * Do not create session if the user-agent is a robot
    *
    * @access    public
    * @return    void
    */
    public function sess_create() 
    {
        $CI = get_instance();
        $CI->load->library('user_agent');        

        if ( ! $CI->agent->is_robot() ){
            parent::sess_create();
        }
    }
}

/* End of file MY_Session.php */
/* Location: ./application/libraries/MY_Session.php */
?>
