<template>
  <div>
    <HeaderVue /> <BannerVue />
    <!-- Aqui fica o conteúdo principal-->
    <main class=" container ConteudoPrincipal">
      <CardProduto />
    </main>
    <!--Fim do conteúdo principal-->
    <FooterVue />
  </div>
</template>

<script>
import BannerVue from '../components/Banner.vue'
import HeaderVue from '../components/Header.vue'
import FooterVue from '../components/Footer.vue'
import CardProduto from '../components/CardProduto.vue'
export default {
  components: { HeaderVue, BannerVue, FooterVue, CardProduto }
}
</script>

<style></style>
