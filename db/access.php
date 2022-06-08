<?php
    $capabilities = array(

    'block/currikisso:myaddinstance' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            //'editingteacher' => CAP_ALLOW,
            //'coursecreator' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        ),

        'clonepermissionsfrom' => 'moodle/my:manageblocks'
    ),

    'block/currikisso:addinstance' => array(
        'riskbitmask' => RISK_SPAM | RISK_XSS,

        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            //'editingteacher' => CAP_ALLOW,
            //'coursecreator' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        ),

        'clonepermissionsfrom' => 'moodle/site:manageblocks'
    ),

    /*'moodle/block:edit' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'legacy' => array(
            //'editingteacher' => CAP_ALLOW,
            //'coursecreator' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    ),

    'moodle/block:view' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_BLOCK,
        'legacy' => array(
            //'guest' => CAP_ALLOW,
            //'student' => CAP_ALLOW,            
            'editingteacher' => CAP_ALLOW,
            'coursecreator' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    ),

    'block/currikisso:view' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_BLOCK,
        'legacy' => array(
            //'guest' => CAP_ALLOW,
            //'student' => CAP_ALLOW,            
            'editingteacher' => CAP_ALLOW,
            'coursecreator' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    ),*/
);