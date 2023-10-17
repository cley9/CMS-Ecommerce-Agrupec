## REQUSITOS PARA DEPLOYAR EL ECOMMERCE
-- PHP >8.0  <8.1
-- .env
-- composer install
-- elimina la ruta storage, para que no presente error 

#
-- modificar el punto .env en los mix por vite
# MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
# MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
-- VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
-- VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
## uso de vite en laravel 9
-- para compilar y levantar el js y css en producción es necesario poner un npm run build, para conpilar los archivos de css y js

## PENDIENTE
-- migrar la version de laravel 9 a 10 
-- migrar las dependencias

## Configuración para gmail en laravel forma 2

1 paso configurar el .env los mail

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=clyutp@gmail.com
MAIL_PASSWORD=umbghixdjauavciw
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="cleyutp@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"


2 paso  crear el archivo email
php artisan make:mail EnvioInformacionNewProducto


<!--  -->



// -------------------------------------------end
// obs queda pendiente ver el modal en vue, no muestra en laravel 

// 
//----------------- Los pasos para crar un proyecto con laravel 9 + vue.js + vite.js son => 
// 1 crear un proyecto laravel [laravel new nameProyect]
// 2  instala vue dentro del proyecto el vue [npm install vue] 
// 3 instalar el pluguin de vite [npm install --save-dev @vitejs/plugin-vue], este pluguin se instalar por poryecto [ nota: vite tienes que instalar en laravel 10 o en cual quier versión]
// 4 configuras el vite.config.js, agregas el import del pluguin instalado 
        // se agrega para el plugin de  vue en vite 
        // import vue from '@vitejs/plugin-vue';

// 5 configurar el app.js de la ruta del resources/js, ahi agregaras el vue
        // se configra para que vue funcione 
        // import  { createApp } from "vue";
        // import App from "../src/name.vue"; // nombre de componente.vue
        // // selector del id app
        // createApp(App).mount("#app");
// 6 tienes que modificar el archivo vite.config.js, agregar el vue(); para que note  de error al ejecutar el vue
        // export default defineConfig({
        //         plugins: [
        //             laravel({
        //                 input: ['resources/css/app.css', 'resources/js/app.js'],
        //                 refresh: true,
        //             }),
        //             // se agrega el vue para que funcion el vue plugin's 
        //             vue(),
// 7 ejecutar el proyecto 

// nota: Ambos se necesita para funcionar el proyecto con [laravel + vue.js + vite]
// -- ejecutar laravel 
// php artisan serve  // para ejecutar el desarrollo back-end 

// -- ejecutar el vue.js components
// npm run dev   // al ejecutar se ejecutr el puerto del vite como front-end, donde compilara el template de vue a codigo js  



// ------------ instalación de talwind css en laravel 10 + vite + vue.js ---------------
// [nota: en laravel 10 ya viene preinstalado el tailwind, pero en versiones anteriores no]
// 1 pasa
// npm install -D tailwindcss postcss autoprefixer
// 2 paso [Genera los archivos de configuración tailwind.config.js y postcss.config.js:] , para ello ejecuta el comando npx tailwindcss init -p
// 3 paso 

// 4 paso se agrega  en el archivo creado reciente creado // tailwind.config.js
        module.exports = {
        mode: 'jit',
        purge: [
            './index.html',
            './src/**/*.{vue,js,ts,jsx,tsx}',
        ],
        darkMode: false,
        theme: {
            extend: {},
        },
        variants: {},
        plugins: [
            require('tailwindcss'),
            require('autoprefixer'),
        ],
        }
// 5 paso agregar el la importacion de talwind en el archivo de vite.config.js
        tailwindcss(),
// 6 npm install @headlessui/vue [para instalar una dependencia de talwind que es de estilo ]
        // import { defineConfig } from 'vite'
        // import vue from '@vitejs/plugin-vue'
        // import WindiCSS from 'vite-plugin-windicss'

        // export default defineConfig({
        //   plugins: [
        //     vue(),
        //     WindiCSS(),
        //   ],
        // })


