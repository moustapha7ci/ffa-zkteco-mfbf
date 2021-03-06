<?php

namespace FfaZktecoMfbf;

class PdoFactory {

  // https://phpro.org/tutorials/Introduction-to-PHP-PDO.html#8
  public function mysql(string $hostname = 'localhost', string $dbname = 'ffa_price_farm', string $username = 'username', $password = 'password') {
      $dsn = "mysql:host=$hostname;dbname=$dbname";
      return new \PDO($dsn, $username, $password);
  }

  public function odbc(string $dsn = 'MarketflowAcc', string $dbname, string $username = 'username', $password = 'password') {
      $pdo = new \PDO("odbc:$dsn",$username,$password);
      $pdo->query("use $dbname;");
      return $pdo;
  }

}
