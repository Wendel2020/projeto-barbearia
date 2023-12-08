<?php componente('topo')?>

    <main>
        <div class="banner">
            <img src="<?= imagens('banner')?>" alt="">
        </div>
        <div class="servicos">
            <div class="servicos-titulo">
                <h1 >SERVIÇOS</h1>
            </div>
            
            <div class="servicos-opcoes-top">
                <div class="cabelo">
                    <a href="<?=linkrota('cabelo')?>"><img src="<?= imagens('cabelo')?>" alt=""></a>
                    <h2>CABELO</h2>
                </div>
            
                <div class="barba">
                    <img src="<?= imagens('barba')?>" alt="">
                    <h2>BARBA</h2>
                </div>
            
                <div class="produtos">
                    <img src="<?= imagens('produtos')?>" alt="">
                    <h2>PRODUTOS</h2>
                </div>
            </div>
            <div class="servicos-opcoes-bottom">
                <div class="sombrancelha">
                    <img src="<?= imagens('pinca')?>" alt="">
                    <h2>SOMBRANCELHA</h2>
                </div>
            
                <div class="depilacao">
                    <img src="<?= imagens('depilacao')?>" alt="">
                    <h2>DEPILAÇÃO</h2>
                </div>
            
                <div class="pigmentacao">
                    <img src="<?= imagens('pincel')?>" alt="">
                    <h2>PIGMENTAÇÃO</h2>
                </div>
            </div>
            
        </div>
        <hr>
        <div class="localizacao">
            <section class="esquerda">
                <div class="titulo-esquerda">
                    <h1>NOSSA<br></h1>
                
                    <h1> LOCALIZAÇÃO</h1>
                </div>
            </section>    
            <section class="direita">
                <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d966.9988334750025!2d-41.6742122!3d-14.1950515!3m2!1i1024!2i768!4f13.1!2m1!1sRua%20Alta%20Leite%20Oliveira%20-%20Brumado%2C%20BA!5e0!3m2!1spt-BR!2sbr!4v1694694874783!5m2!1spt-BR!2sbr" width="768" height="418" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </div>
        <div class="tipos-de-corte">
            <div class="tipos-de-corte-titulo">
                <h1 >MODELOS DE CORTE</h1>
            </div>
            <div class="opcoes-cortes">
                <div class="navalhado">
                    <img src="<?= imagens('navalhado')?>" alt="">
                    <h2>NAVALHADO</h2>
                </div>
            
                <div class="pompadour">
                    <img src="<?= imagens('pompadur')?>" alt="">
                    <h2>POMPADOUR</h2>
                </div>
            
                <div class="americano">
                    <img src="<?= imagens('americano')?>" alt="">
                    <h2>AMERICANO</h2>
                </div>
            </div>
        </div>


    </main>
    <?php componente('rodape')?>
