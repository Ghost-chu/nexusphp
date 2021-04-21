import { createApp } from 'vue'
import App from './App.vue'
import ElementPlus from 'element-plus'
import router from './router/index'
import 'element-plus/lib/theme-chalk/index.css'
createApp(App).use(ElementPlus).use(router).mount('#app')
