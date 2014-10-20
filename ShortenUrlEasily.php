<?php
if(!defined('MEDIAWIKI')) die;

$dir = __DIR__;
$ext = 'ShortenUrlEasily';

$wgExtensionCredits['other'][] = array(
  'path'            => __FILE__,
  'name'            => $ext,
  'version'         => '0.1',
  'author'          => '[https://github.com/uta uta]',
  'url'             => 'https://github.com/uta/ShortenUrlEasily',
  'descriptionmsg'  => 'shorten-url-easily-desc',
  'license-name'    => 'MIT-License',
);

$wgExtensionMessagesFiles[$ext] = "$dir/i18n/_backward_compatibility.php";
$wgMessagesDirs[$ext]           = "$dir/i18n";

require_once("$dir/classes/${ext}Util.php");
