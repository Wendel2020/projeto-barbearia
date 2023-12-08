<?php componente('topo')?>
    
       
<main class="principal">
        <div class="nav-alternativa">
            <a class="btn-voltar" href="<?=linkrota("")?>">
              <i class="fa-solid fa-chevron-left"></i>
                Voltar
            </a>     
          </div>    
    <div class="form-container">
        <form id="login-form" method="POST" action="<?=linkrota("cadastrarconta")?>">
          <h2><i class="fa-solid fa-user-plus"></i> Criar Conta</h2>
          <input type="text" placeholder="Nome Completo" name="nome" required>
        <input type="email" placeholder="Email" name="email" required>
          <input type="text" placeholder="usuario" name="login" required>
          <input type="password" placeholder="Senha" name="senha" required>         
         <button class="btn"> 
          <a href="<?=linkrota('login')?>">
            <i class="fa-solid fa-circle-plus"></i>
            Criar
            </a>
          </button>
          <a href="<?=linkrota("login")?>" class="btn verde-claro">
            <i class="fa-solid fa-unlock"></i>
            Voltar e Fazer Login
          </a>
        </form>
     </div>
    </main>
    
    <?php componente('rodape')?>