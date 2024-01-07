import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    resolve: {
        preserveSymlinks: true,
    },
    assetsInclude: [
        'resources/images/**',
        'resources/favicon/**',
    ],
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
                'app/Filament/**'
            ],
        }),
    ],
});
