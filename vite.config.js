import { defineConfig } from 'vite';

export default defineConfig({
    build: {
        outDir: 'assets',
        assetsDir: 'assets',
            rollupOptions: {
                output: {
                    entryFileNames: '[name].js',
                    chunkFileNames: '[name].js',
                    assetFileNames: '[name].[ext]',
                },
            },
    },
});