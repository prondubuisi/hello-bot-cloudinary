<?php


namespace App;

Class Config {

   
  static $facebookCredentials = [

    'verifyToken' => 'coinmentor',

    'accessToken' => 'EAAUfTVwnitUBAJxTMzZBJ59ZCAKz9d2QFuzX8sZBAZBcJlCtFdMh5Xb7YiEj9BL7pYiNvKdl0LtRwLqAZCfYdd30Bwg0x6oETk2ldqKgFzpSnQYndx9boB6Jlmgp2cYZCvnNwJAjRVpDahCIWrbLLbZCgGDZAcbAQQghyHu1PZCDeSSbDABiT10Oo'

  ];

   
  static function getVerifyToken() {

    return  Config::$facebookCredentials['verifyToken'];

  }

  static function getAccessToken() {

    return  Config::$facebookCredentials['accessToken'];

  }

  

}
