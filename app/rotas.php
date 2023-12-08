<?php

use ProjetoBarbearia\Core\Router;
Router::get('/','HomeController', 'index');
Router::get('/login', 'LoginController', 'login');
Router::get('/cadastro', 'LoginController', 'cadastro');
Router::post('/cadastrarconta', 'LoginController', 'cadastrarconta');


