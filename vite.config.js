import { defineConfig } from 'vite';

export default defineConfig({
    build: {
        outDir: 'script',
        assetsDir: 'script',
            rollupOptions: {
                output: {
                    entryFileNames: '[name].js',
                    chunkFileNames: '[name].js',
                    assetFileNames: '[name].[ext]',
                },
            },
    },
});