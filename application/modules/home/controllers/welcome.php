<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();
	}
	
	function index()
	{
                $this->template->build('welcome_message',array('message'=>'hello dan'));
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */