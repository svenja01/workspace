<?php
/*
Plugin Name: Mein erstes Plugin
Plugin URL: http://
Version: 1.0
Author: Svenja Sutter
*/
add_action('admin_menu', 'myPlugin');

function myPlugin(){
    add_menu_page('Hilfe1','Hilfe2','edit_posts','meinPluginurl','myPlugin_echo','../wp-content/plugins/myPlugin/myPlugin.png',4);
    
    function myPlugin_echo(){
    global $wpdb;
    echo '<h1>Hilfebereich</h1>';
    $user_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->users" );
    echo "<p>User count is {$user_count}</p>";
    $result=$wpdb->get_results("Select * from $wpdb->users");
    foreach($result as $tmpResult){
       echo $tmpResult->user_email. " ".  $tmpResult->user_nicename . "<br />";
    }

}
?>