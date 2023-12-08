<?php
componente('topo');
?>

<body>
    

    <div class="menu">
    <div class="logo"><img src="logo.png" width="150px"></div>
    </div>

    <h2 class="tema1"><img src="estrela.png" width="30px">CORTES DE CABELOS<img src="estrela.png" width="30px"></h2>

        
<div class="cortes">

<div class="corte1">
<img src="" width="100px">
<p>Americano</p>
<h3 class="preco">R$ 65, 00</h3>
<a class="selecionar" href="" style="text-decoration: none;"><img src="icone.png" width="10px">Selecionar</a>
<br>
<br>
<a class="horarios" href="" style="text-decoration: none;">Horarios<img src="seta.png" width="10px"></a>
</div>  

<div class="corte2">
    <img src="cliente2.png" width="100px">
<p>Pompadour</p>
<h3 class="preco">R$ 75, 00</h3>
<a class="selecionar" href="" style="text-decoration: none;"><img src="icone.png" width="10px">Selecionar</a>
<br>
<br>
<a class="horarios" href="" style="text-decoration: none;">Horarios<img src="seta.png" width="10px"></a>
</div>  
<div class="corte3">
    <img src="cliente3.png" width="100px">
<p>Navalha</p>
<h3 class="preco">R$ 85, 00</h3>
<a class="selecionar" href="" style="text-decoration: none;"><img src="icone.png" width="10px">Selecionar</a>
<br>
<br>
<a class="horarios" href="" style="text-decoration: none;">Horarios<img src="seta.png" width="10px"></a>
</div>  


</div>

<div class="agendar">

<a href="<?=linkrota('form-cabelo')?>" style="text-decoration: none; color: black;">cadastrar cabelo</a>

</div>
<?= componente('rodape')?>


?>