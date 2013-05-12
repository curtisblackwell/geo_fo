<?php

require_once('config.php');

class Plugin_Geofo extends Plugin
{

  var $meta = array(
    'name'        => ADD_ON_NAME,
    'version'     => ADD_ON_V,
    'author'      => 'Curtis Blackwell',
    'author_url'  => 'http://curtisblackwell.com'
  );

  public function index()
  {
    $preserve = $this->fetch_param('preserve');

    return strip_tags($this->content, $preserve);
  }
}
