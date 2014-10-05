<?php
class ShortenUrlEasily {
  public static $action_list = array(
    'creativecommons',
    'credits',
    'delete',
    'deletetrackback',
    'dublincore',
    'edit',
    'history',
    'info',
    'markpatrolled',
    'print',
    'protect',
    'purge',
    'raw',
    'render',
    'revert',
    'rollback',
    'search',
    'submit',
    'unprotect',
    'unwatch',
    'varidate',
    'view',
    'viewsource',
    'watch',
  );

  public static function init($path = 'wiki') {
    global $wgArticlePath, $wgActionPaths;
    $wgArticlePath = "/$path/$1";
    foreach(self::$action_list as $a) $wgActionPaths[$a] = "/$path/$a/$1";
  }
}

ShortenUrlEasily::init();
