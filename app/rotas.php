<?php

use ProjetoBarbearia\Core\Router;
Router::get('/','HomeController', 'index');
Router::get('/login', 'LoginController', 'login');
Router::get('/cadastro', 'LoginController', 'cadastro');
Router::post('/cadastrarconta', 'LoginController', 'cadastrarconta');
Router::get('/cabelo', 'CabeloController', 'mostrar');
Router::get('/form-cabelo', 'CabeloController', 'cadastro');
Router::post('/cadastrarcabelo','CabeloController', 'cadastrarcabelo');



