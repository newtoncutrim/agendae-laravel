<script setup>
const goToRegister = () => {
  // Lógica para redirecionar para a página de registro
  console.log('Redirecionando para o registro')
}
</script>

<template>
  <main class="flex items-center justify-center min-h-screen bg-gray-100">
    <v-container class="py-12">
      <v-row justify="center">
        <v-col cols="12" md="8" lg="6" class="text-center">
          <!-- Título -->
          <h1 class="font-weight-bold text-blue-600 mb-4">Bem-vindo ao AgendAI</h1>

          <!-- Descrição -->
          <p class="text-body-1 text-gray-700 mb-6">
            Agende seus serviços de forma fácil e eficiente com profissionais qualificados.
          </p>

          <!-- Botão para Cadastro -->
          <v-btn
            to="/register"
            color="primary"
            class="text-xl font-semibold rounded-lg px-6 py-3"
            elevation="2"
            @click="goToRegister"
            large
          >
            Comece Agora
          </v-btn>
        </v-col>
      </v-row>

      <!-- Rodapé com mais informações -->
      <v-row justify="center" class="mt-10">
        <v-col cols="12" md="8" class="text-center">
          <p class="text-gray-600">Pronto para agendar? Explore nossas opções de serviços.</p>
        </v-col>
      </v-row>
    </v-container>
  </main>
</template>

<style scoped>
.v-application--wrap {
  background-color: #f7fafc;
}

.v-btn {
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.v-btn:hover {
  transform: translateY(-2px);
}

.v-application--wrap {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.v-typography {
  word-wrap: break-word;
}
</style>
