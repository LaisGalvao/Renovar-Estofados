<template>
  <div>
    	<article class="produto bgwhite radius ">
				<img src="img/Produtos/<?php echo $resultLoja['foto'];?>" class="radius">
				<div class="texto">
					<h4>Nome do produto</h4>
					<h4>R$00,00</h4>
					<p>
					Detalhes

					<!--aqui se iniciam as ações do carrinho e métodos de compra-->
					<!--foram usados campos do tipo hidden para mandar as informações para os scripts em php-->
					<form method="POST" action="compra.php">

					<input type="hidden" name="txtId" value="<?php echo $resultLoja['Id_Produto']; ?>"/>
					<input type="hidden" name="txtNome" value="<?php echo $resultLoja['nome_prod']; ?>"/>
					<input type="hidden" name="txtPreco" value="<?php echo $resultLoja['preco']; ?>"/>

					<i class="fas fa-cart-plus"></i><input type="submit" name="AddCarrinho" value="Comprar" />

					</form>
					</p>
				</div>

			</article>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
