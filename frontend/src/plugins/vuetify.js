// src/plugins/vuetify.js

import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import 'vuetify/styles'
import '@fortawesome/fontawesome-free/css/all.css'
import 'material-design-icons-iconfont/dist/material-design-icons.css'

export default createVuetify({
  components,
  directives,
  icons: {
    defaultSet: 'fa',
  },
  theme: {
    defaultTheme: 'light',
    themes: {
      light: {
        colors: {
          background: '#eeeeee',
        },
      },
      dark: {
        colors: {
          background: '#121212',
        },
      },
    },
  },
})
