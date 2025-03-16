<template>
    <v-container class="container">
      <v-row class="fill-height">
        <v-col cols="12" md="6" class="blue d-flex align-center justify-center">
          <div style="text-align: center">
            <v-card-text class="white--text">
              <h3 class="text-center">Já se inscreveu?</h3>
              <h6 class="text-center">
                Faça login na sua conta para continuar construindo e<br />
                editando seus fluxos de integração
              </h6>
            </v-card-text>
            <div class="text-center">
              <v-btn tile outlined dark @click="step--">Entrar</v-btn>
            </div>
          </div>
        </v-col>
  
        <v-col cols="12" md="6" class="d-flex align-center justify-center">
          <v-card-text class="mt-12">
            <h4 class="text-center">Inscreva-se para uma Conta</h4>
            <h6 class="text-center grey--text">
              Vamos te preparar para que você possa começar a criar sua<br />
              primeira experiência de integração
            </h6>
            <v-row align="center" justify="center">
              <v-col cols="12" sm="8">
                <v-row>
                  <v-col cols="12" sm="6">
                    <v-text-field
                      label="Nome"
                      outlined
                      dense
                      color="blue"
                      autocomplete="false"
                      class="mt-4"
                    />
                  </v-col>
                  <v-col cols="12" sm="6">
                    <v-text-field
                      label="Sobrenome"
                      outlined
                      dense
                      color="blue"
                      autocomplete="false"
                      class="mt-4"
                    />
                  </v-col>
                </v-row>
                <v-text-field
                  label="Email"
                  outlined
                  dense
                  color="blue"
                  autocomplete="false"
                />
                <v-text-field
                  label="Senha"
                  outlined
                  dense
                  color="blue"
                  autocomplete="false"
                  type="password"
                />
                <v-row>
                  <v-col cols="12" sm="7">
                    <v-checkbox label="Eu Aceito AAE" class="mt-n1" color="blue">
                    </v-checkbox>
                  </v-col>
                  <v-col cols="12" sm="5">
                    <span class="caption blue--text ml-n4">
                      Termos & Condições
                    </span>
                  </v-col>
                </v-row>
                <v-btn color="blue" dark block tile>Inscrever-se</v-btn>
  
                <h5 class="text-center grey--text mt-4 mb-3">Ou inscreva-se usando</h5>
                <div class="d-flex justify-space-between align-center mx-10 mb-11">
                  <v-btn depressed outlined color="grey">
                    <v-icon color="red">fab fa-google</v-icon>
                  </v-btn>
                  <v-btn depressed outlined color="grey">
                    <v-icon color="blue">fab fa-facebook-f</v-icon>
                  </v-btn>
                  <v-btn depressed outlined color="grey">
                    <v-icon color="light-blue lighten-3">fab fa-twitter</v-icon>
                  </v-btn>
                </div>
              </v-col>
            </v-row>
          </v-card-text>
        </v-col>
      </v-row>
    </v-container>
  </template>
  
  <script>
  export default {
    data: () => ({
      step: 1,
    }),
    props: {
      source: String,
    },
  };
  </script>
  <style scoped>
  .v-application .blue {
    background-color: #1976d2 !important;
  }
  
  .container {
    height: 100vh;
    max-height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
  }
  </style>
  