<script setup>
const name = 'UIHeader'
</script>

<template>
  <header class="bg-gray-50 text-gray-800 p-4 shadow-md flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center">
      <RouterLink to="/home" class="flex items-center space-x-2">
        <!-- <img src="" alt="Logo" class="w-10 h-10" /> -->
        <span class="text-2xl font-bold hover:text-gray-200">AgendAi</span>
      </RouterLink>
    </div>

    <!-- Navegação -->
    <nav class="flex space-x-8">
      <RouterLink
        to="/login"
        class="text-xl font-semibold hover:text-gray-200 transition duration-300"
      >
        Login
      </RouterLink>
      <RouterLink
        to="/register"
        class="text-xl font-semibold hover:text-gray-200 transition duration-300"
      >
        Registrar
      </RouterLink>
    </nav>
  </header>
</template>

<style scoped>
/* Estilos adicionais se necessário */
</style>
