import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        compression({
            algorithm: 'brotliCompress', // or 'gzip'
            ext: '.br', // or '.gz'
            threshold: 1024, // Compress files larger than 1KB
        }),
    ],
});
