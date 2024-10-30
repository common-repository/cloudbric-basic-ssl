<?php
/*
Plugin Name: Cloudbric Basic SSL
Plugin URI:  https://wordpress.org/plugins/cloudbric-basic-ssl/
Description: fixed The Redirect Loop and Client IP address for Cloudbric.
Version: 0.9.3
Author: Tiny (tiny@cloudbric.com)
Author URI: https://www.cloudbric.com
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: cloudbric-basic-ssl
*/

if (isset($_SERVER['HTTP_CLOUDBRIC']) && $_SERVER['HTTP_CLOUDBRIC'] == 'on') {

    //fixed The Redirect Loop
    if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS'] = 'on';

    //fixed Client IP address
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
            $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
            $_SERVER['REMOTE_ADDR'] =  trim($addr[0]);
        } else {
            $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }

}