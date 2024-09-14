import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
  base: '/',
  plugins: [
    laravel({
      input: [
        'resources/sass/app.scss',
        'resources/js/app.js',
        'resources/css/app.css',
      ],
      refresh: true,
      publicDirectory: 'public',
      buildDirectory: 'build',
    }),
    vue({
      template: {
        transformAssetUrls: {
          base: null,
          includeAbsolute: false,
        },
        compilerOptions: {
          isCustomElement: (tag) => tag.includes('-')
        },
      },
    }),
  ],
  optimizeDeps: {
    include: ['v-calendar']
  },
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources/js'),
      '@assets': path.resolve(__dirname, 'resources/assets'),
      vue: 'vue/dist/vue.esm-bundler.js',
      '~bootstrap': 'bootstrap',
      '~vite': path.resolve(__dirname, 'public/build'),
    },
    extensions: ['.js', '.json', '.jsx', '.mjs', '.ts', '.tsx', '.vue'],
  },
  build: {
    outDir: 'public/build', 
    assetsDir: '',
    manifest: 'manifest.json',
    chunkSizeWarningLimit: 1000
  },
});
