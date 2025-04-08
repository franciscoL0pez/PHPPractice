import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import path from 'path'; // 👈 ESTO!

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.jsx'],
            refresh: true,
        }),
        react(),
    ],
    resolve: {
        alias: {
            'tailwindcss/version.js': path.resolve(__dirname, 'resources/js/mocks/tailwindcss/version.js'),
        },
    },
});
