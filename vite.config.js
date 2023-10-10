import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import react from '@vitejs/plugin-react';
import vue from '@vitejs/plugin-vue';
// para importar las imagenes
import { fileURLToPath, URL } from "url";


export default defineConfig({
    base: '/public/',
    plugins: [
        laravel(
        //     [
        //     'resources/css/app.css',
        //     'resources/js/app.js',
        //     // 'resources/js/msj.js',
        //     // '/public/js/msj.js',
        // ]
        {
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }
        ),
        // react(),
        vue(),
        // vue({
        //     template: {
        //         transformAssetUrls: {
        //             base: null,
        //             includeAbsolute: false,
        //         },
        //     },
        // }),
    ],
    // this is adding for las rutas relativa, el cual sera el alias dentro del resolve
    resolve: {
        alias: {
          "@promo":fileURLToPath(new URL("../../public/", import.meta.url)),
        //   "@promo":fileURLToPath(new URL("/storage/img/SlayderPromocion/", import.meta.url)),
          "@": fileURLToPath(new URL("../src/", import.meta.url)),
          "@assets": fileURLToPath(new URL("./src/assets", import.meta.url)),
          // puedes agregar otros alias aquí
        },
      },
});



// import { fileURLToPath, URL } from "url";
// import { defineConfig } from "vite";
// import vue from "@vitejs/plugin-vue";

// [6](https://vitejs.dev/config/)
// export default defineConfig({
//   plugins: [vue()],
//   resolve: {
//     alias: {
//       "@": fileURLToPath(new URL("./src", import.meta.url)),
//       "@assets": fileURLToPath(new URL("./src/assets", import.meta.url)),
//       // puedes agregar otros alias aquí
//     },
//   },
// });