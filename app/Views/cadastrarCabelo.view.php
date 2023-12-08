<?php componente('topo')?>
    
       
<main class="principal">
        <div class="nav-alternativa">
          </div>    
    <div class="form-container">
        <form id="login-form" method="POST" action="<?=linkrota("cadastrarcabelo")?>">
          <h2><i class="fa-solid fa-user-plus"></i> CadastrarCorte</h2>
          <input type="text" placeholder="Nome Completo" name="nome" required>
         <input type="number" placeholder="preço" name="preco" required>
         <button class="btn"> 
         <a href="<?=linkrota('cabelo')?>"></a>   
         <i class="fa-solid fa-circle-plus"></i>

            Criar
          </button>
        </form>
     </div>
    </main>
    
    <?php componente('rodape')?>