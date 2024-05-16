import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import path from 'path';

export default defineConfig({
server: {
    hmr: {
        host: "localhost",
    },
    port: 8080,
    host: true,
},
plugins: [
    vue(),
    laravel({
        input: ["resources/css/app.css", "resources/js/Components/app.js"],
        refresh: true,
    }),
    
],
});