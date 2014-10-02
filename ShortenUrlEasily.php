<?php
if(!defined('MEDIAWIKI')) die;

$dir = __DIR__;
$ext = 'ShortenUrlEasily';

$wgExtensionCredits['other'][] = array(
  'path'            => __FILE__,
  'name'            => $ext,
  'version'         => '0.1',
  'author'          => 'uta',
  'url'             => 'https://github.com/uta/ShortenUrlEasily',
  'descriptionmsg'  => 'shorten-url-easily-desc',
  'license-name'    => 'MIT-License',
);

$wgExtensionMessagesFiles[$ext] = "$dir/$ext.i18n.php";
$wgMessagesDirs[$ext]           = "$dir/i18n";

require_once("$dir/$ext.class.php");
