import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/scss/app.scss',
                'resources/scss/header.scss',
                'resources/scss/sidebar.scss',
                'resources/scss/content.scss',
                'resources/scss/addon.scss',
                'resources/scss/footer.scss',
                'resources/scss/single_post.scss',
            ],
            refresh: true,
        }),
    ],
});
