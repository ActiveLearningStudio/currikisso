<?php

class block_currikisso_edit_form extends block_edit_form {
        
    protected function specific_definition($mform) {
        global $CFG;
        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('currikisso', 'block_currikisso'));

        // A sample string variable with a default value.
        $mform->addElement('text', 'config_lticlientid', get_string('lticlientid', 'block_currikisso'));
        $mform->setDefault('config_lticlientid', $CFG->block_currikisso_lticlientid);
        $mform->setType('config_lticlientid', PARAM_TEXT);

        $mform->addElement('text', 'config_toolplatform', get_string('toolplatform', 'block_currikisso'));
        $mform->setDefault('config_toolplatform', $CFG->block_currikisso_toolplatform);
        $mform->setType('config_toolplatform', PARAM_TEXT);

        $mform->addElement('text', 'config_guid', get_string('guid', 'block_currikisso'));
        $mform->setDefault('config_guid', $CFG->block_currikisso_guid);
        $mform->setType('config_guid', PARAM_TEXT);

        $mform->addElement('text', 'config_toolurl', get_string('toolurl', 'block_currikisso'));
        $mform->setDefault('config_toolurl', $CFG->block_currikisso_toolurl);
        $mform->setType('config_toolurl', PARAM_TEXT);        

        $mform->addElement('text', 'config_btntext', get_string('btntext', 'block_currikisso'));
        $mform->setDefault('config_btntext', $CFG->block_currikisso_btntext);
        $mform->setType('config_btntext', PARAM_TEXT);
    }
}