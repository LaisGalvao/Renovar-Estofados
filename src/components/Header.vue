<template>
  <div>
    <!--Cabeçalho do Cliente-->
		<div class=" container AreaCliente bgBlack ">
				 <ul>
				 	<li><a href="cadastrar.html" ><i class="fab fa-wpforms"></i>Cadastrar</a></li>
				 	<li><a href="login.html"><i class="fas fa-user"></i>Login</a></li>
				 </ul>
		</div>
    <!--Cabeçalho-->
    <header class=" banner container Cabeçalho ">
      <a href="" class="logo"></a>
      <button class="btnMenuRes bggradiente">
        <i class="fas fa-align-right"></i>
      </button>

      <nav class="menu">
        <a href="#" class="btnClose"><i class="far fa-times-circle"></i></a>
        <ul>
          <li><a @click="$router.push({name: 'Home'})">Home</a></li>
          <li><a @click="$router.push({name: 'Loja'})">Loja</a></li>
          <li><a href="">Orçamento</a></li>
          <li><a href="">Contato</a></li>
          <label for="Log" class="Log"></label>
          <label for="LogA" class="LogA"></label>
        </ul>
      </nav>
    </header>
    <!--Fim Cabeçalho-->
  </div>
</template>

<script>
export default {}
</script>

<style>

</style>
