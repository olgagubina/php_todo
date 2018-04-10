<?php

return [
  'database' => [
      'name' => 'todo',
      'username' => 'root',
      'password' => '770770',
      'connection' => 'mysql:host=127.0.0.1',
      'options ' => [
          //for the case of error
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ]
  ]
];