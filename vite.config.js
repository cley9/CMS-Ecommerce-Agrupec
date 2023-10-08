import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import react from '@vitejs/plugin-react';
import vue from '@vitejs/plugin-vue';

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
});