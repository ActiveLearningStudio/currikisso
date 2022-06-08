<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtext('block_currikisso_lticlientid', get_string('lticlientid', 'block_currikisso'),
                   get_string('configlticlientid', 'block_currikisso'), '10000000000050', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('block_currikisso_toolplatform', get_string('toolplatform', 'block_currikisso'),
                   get_string('configtoolplatform', 'block_currikisso'), 'canvas', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('block_currikisso_guid', get_string('guid', 'block_currikisso'),
                   get_string('configguid', 'block_currikisso'), 'A4fi0NMcpoPmMCygOhbycXc6piogIdvY7GQ0ROho%3Acanvas-lms', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('block_currikisso_toolurl', get_string('toolurl', 'block_currikisso'),
                   get_string('configtoolurl', 'block_currikisso'), 'https://dev.currikistudio.org/canvas-lti-sso?sso_info=', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('block_currikisso_btntext', get_string('btntext', 'block_currikisso'),
                   get_string('configbtntext', 'block_currikisso'), 'CurrikiStudio Access', PARAM_TEXT));
    
}