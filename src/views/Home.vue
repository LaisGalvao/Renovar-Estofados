<template>
  <div>
    <HeaderVue /> <BannerVue />
    <!--História-->
    <main class="container historia bgwhite">
      <article class="blocoH bgwhite radius">
        <div class="texto">
          <h4>Nossa História</h4>
          <p>
            Renovar Estofados uma estofaria tradicional de São Bernardo do Campo
            desde anos 90', com tradições familiares passada entre gerações, mas
            sempre em busca da inovação e praticidade aos nossos clientes.
          </p>

          <p>
            A Renovar sempre trazendo os mais varidos design's tradicionalista e
            contemporâneos encontrados pelo mundo para sua sala.
          </p>
        </div>
      </article>
    </main>
    <!--Fim da história #ELENÃO-->
    <FooterVue />
  </div>
</template>

<script>
import BannerVue from "../components/Banner.vue";
import HeaderVue from "../components/Header.vue";
import FooterVue from "../components/Footer.vue";
import { api } from "../services";
export default {
  components: { HeaderVue, BannerVue, FooterVue },
  mounted() {
    api.get("/user").then(r =>{
      console.log(r.data);
    })
  },
};
</script>

<style></style>
