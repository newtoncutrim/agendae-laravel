<script setup>
import Header from './components/UIHeader.vue'
import Footer from './components/UIFooter.vue'
import { RouterView } from 'vue-router'
import '@/assets/main.css'
</script>

<template>
  <div class="flex flex-col min-h-screen">
    <!-- Header -->
    <Header />

    <!-- Main Content -->
    <main>
      <RouterView />
    </main>

    <!-- Footer -->
    <Footer />
  </div>
</template>

<style scoped>
main {
  background-color: #f9fafb;
}

/* Estilos para a transição */
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}
.fade-enter, .fade-leave-to /* .fade-leave-active no Vue 3 */ {
  opacity: 0;
}
</style>
