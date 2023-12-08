<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=css('style')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WS BARBEARIA</title>
</head>
<body>
    <header>
    <div class="topo">
       
       <h3><a href="<?=linkrota("login")?>">ENTRE</a> OU <a href="<?=linkrota("cadastro")?>">CADASTRE-SE</a> <h3> 
       
   </div>
   <div class="cabecalho">
       <div class="logo"> <a href="<?=linkrota("")?>"><img src="<?= imagens('logo')?>" alt=""></a></div>
       <div class="menu">
           <nav class="menu-navegacao">
               <a class="item-menu-navegacao" href="">ELETRÔNICOS</a>
               <a class="item-menu-navegacao" href="">ELETRÔNICOS</a>
               <a class="item-menu-navegacao" href="">ELETRÔNICOS</a>
               <a class="item-menu-navegacao" href="">ELETRÔNICOS</a>
               <input type="text" placeholder="Faça uma pesquisa...">
           </nav>
       </div>
   </div>
</header>