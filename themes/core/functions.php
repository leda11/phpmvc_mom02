<?php
/**
* Helpers for theming, available for all themes in their template files and functions.php.
* This file is included right before the themes own functions.php
*/

/**
* Create a url by prepending the base_url.
*/
function base_url($url) {
  return CLydia::Instance()->request->base_url . trim($url, '/');
}

/**
* Return the current url.
*/
function current_url() {
  return CLydia::Instance()->request->current_url;
}


/**
* Helpers for the template file. GLOBAL (inkluderas i CHandy::ThemeEngineRender()
*/
$ha->data['header'] = '<h1>Header: Lydia 06</h1>';
$ha->data['main']   = '<p>Main: Now with a theme engine, Not much more to report for now.</p>';
$ha->data['footer'] = '<p>Footer: &copy; Lena Dackhammar (copy - Lydia by Mikael Roos (mos@dbwebb.se)</p>';



/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $ha = CHandy::Instance();
  $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($ha->config, true)) . "</pre>";
  $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($ha->data, true)) . "</pre>";
  $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($ha->request, true)) . "</pre>";
  return $html;
}

