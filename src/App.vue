<template>
  <div id="app">
    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>
@import url(../src/assets/css/stylehome.css);
@import url(../src/assets/css/stylegeral.css);
@import url(../src/assets/css/stylecontato.css);
@import url(../src/assets/css/stylelogin.css);
@import url(../src/assets/css/styleorcamento.css);
@import url(../src/assets/css/stylecadastrocli.css);
@import url(../src/assets/css/styleloja.css);
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 0px;
}
</style>
