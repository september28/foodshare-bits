<?php
class MY_Controller extends Controller {
    function MY_controller() {
        parent::Controller();
        
        $this->template->set_theme('foodshare_1_1');
        $this->template->set_layout('splash_layout');
    }
}
?>
