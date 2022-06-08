<?php
class block_currikisso extends block_base {
    public function init() {
        $this->title = get_string('currikisso', 'block_currikisso');
    }
    
    public function get_content() {
    	global $USER, $CFG;

    	//if (!has_capability('block/currikisso:view', CONTEXT_BLOCK)) {
        //	return null;
        //}

	    if ($this->content !== null) {
	      return $this->content;
	    }

	    if (! empty($this->config->lticlientid)) {
		    $lticlientid = $this->config->lticlientid;
		}
		else{
			$lticlientid = $CFG->block_currikisso_lticlientid;
		}

		if (! empty($this->config->toolplatform)) {
		    $toolplatform = $this->config->toolplatform;
		}
		else{
			$toolplatform = $CFG->block_currikisso_toolplatform;
		}

		if (! empty($this->config->guid)) {
		    $guid = $this->config->guid;
		}
		else{
			$guid = $CFG->block_currikisso_guid;
		}

		if (! empty($this->config->toolurl)) {
		    $toolurl = $this->config->toolurl;
		}
		else{
			$toolurl = $CFG->block_currikisso_toolurl;
		}

		if (! empty($this->config->btntext)) {
		    $btntext = $this->config->btntext;
		}
		else{
			$btntext = $CFG->block_currikisso_btntext;
		}

	    
	    $currkiparameters = base64_encode('email='.$USER->email.'&first_name='.$USER->firstname.'&last_name='.$USER->lastname.'&lti_client_id='.$lticlientid.'&tool_platform='.$toolplatform.'&guid='.$guid);
	    //$currkiparameters ='ZW1haWw9bWlrZSU0MGN1cnJpa2kub3JnJmZpcnN0X25hbWU9Q3VycmlraSZsYXN0X25hbWU9QWRtaW4mbHRpX2NsaWVudF9pZD0xMDAwMDAwMDAwMDA1MCZ0b29sX3BsYXRmb3JtPWNhbnZhcyZndWlkPUE0ZmkwTk1jcG9QbU1DeWdPaGJ5Y1hjNnBpb2dJZHZZN0dRMFJPaG8lM0FjYW52YXMtbG1z';

	    $this->content         =  new stdClass;
	    $this->content->text   = '<a href="'.$toolurl.$currkiparameters.'" target="__blank"><span class="btn btn-primary">'.$btntext.'</span></a>';
	    $this->content->footer = '';
	 
	    return $this->content;
	}


	/**
     * Allow the block to have a configuration page
     *
     * @return boolean
     */
    public function has_config() {
        return true;
    }

    function specialization() {
    }

    function applicable_formats() {
        return array('all' => true);
    }

    function instance_allow_multiple() {
        return true;
    }

    
}