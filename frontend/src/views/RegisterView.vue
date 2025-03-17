<script setup>
const title = 'Registrar'
import { ref } from 'vue'

const name = ref('')
const email = ref('')
const password = ref('')

const submitForm = () => {
  // Implementar a lógica de envio do formulário
  console.log(name.value, email.value, password.value)
}
</script>

<template>
  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="max-w-md w-full p-4 rounded-lg">
      <h2 class="text-2xl font-semibold text-center mb-4">Registrar-se</h2>
      <v-form>
        <v-text-field v-model="name" label="Nome" outlined placeholder="Digite seu nome" />
        <v-text-field
          v-model="email"
          label="E-mail"
          outlined
          placeholder="Digite seu e-mail"
          type="email"
        />
        <v-text-field
          v-model="password"
          label="Senha"
          outlined
          placeholder="Digite sua senha"
          type="password"
        />
        <v-btn color="primary" class="w-full" @click="submitForm">Criar Conta</v-btn>
      </v-form>
    </div>
  </div>
</template>

<style scoped>
/* Personalização do formulário de registro */
.form-container {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  padding: 1rem;
}
</style>
