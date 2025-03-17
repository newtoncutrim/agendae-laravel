<script setup>
const title = 'Login'
import { ref } from 'vue'

const email = ref('')
const password = ref('')

// Regras de validação
const emailRules = [
  (v) => !!v || 'E-mail é obrigatório',
  (v) => /.+@.+\..+/.test(v) || 'E-mail inválido',
]

const passwordRules = [
  (v) => !!v || 'Senha é obrigatória',
  (v) => v.length >= 6 || 'A senha precisa ter no mínimo 6 caracteres',
]

// Função de login
const submitLogin = () => {
  console.log('Email:', email.value)
  console.log('Senha:', password.value)
  // Lógica de login pode ser implementada aqui
}
</script>

<template>
  <div class="flex items-center justify-center min-h-screen bg-white">
    <div class="max-w-5xl w-full p-4 rounded-lg flex items-center bg-white">
      <!-- Formulário de Login (Aumentando a largura) -->
      <div class="w-3/4 p-6">
        <!-- Alterado para w-3/4 -->
        <h2 class="text-4xl font-semibold text-center mb-6">Login</h2>
        <v-form @submit.prevent="submitLogin" class="form-container">
          <v-text-field
            v-model="email"
            label="E-mail"
            type="email"
            required
            class="mb-3"
          ></v-text-field>
          <v-text-field
            v-model="password"
            label="Senha"
            type="password"
            required
            class="mb-3"
          ></v-text-field>
          <v-btn color="primary" type="submit">Entrar</v-btn>
        </v-form>
        <!-- Link para Cadastro -->
        <p class="text-2xl text-center mt-4">
          Ainda não tem uma conta?
          <a href="/register" class="text-blue-500 hover:underline">Cadastre-se aqui</a>
        </p>

        <!-- Ícones de Redes Sociais -->
        <div class="flex justify-center gap-10 mt-6">
          <a href="#" class="text-gray-600 hover:text-blue-600">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="text-gray-600 hover:text-blue-400">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="text-gray-600 hover:text-red-500">
            <i class="fab fa-google"></i>
          </a>
        </div>
      </div>

      <!-- Imagem ao lado (Ajustando a largura) -->
      <div class="w-3/4 p-6hidden md:block">
        <!-- Alterado para w-1/4 -->
        <img
          src="@/assets/img/login.jpg"
          alt="Imagem do Formulário"
          class="w-full h-full object-cover"
        />
      </div>
    </div>
  </div>
</template>

<style scoped>
.form-container {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  padding: 1rem;
}

a {
  font-weight: bold;
}

i {
  font-size: 1.5rem;
  transition: color 0.3s;
}

i:hover {
  color: currentColor;
}
</style>
