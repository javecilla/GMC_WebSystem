import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
  base: '/public/',
  plugins: [
    laravel({
      input: [
        'resources/sass/app.scss',
        'resources/js/app.js',
        'resources/css/app.css',
      ],
      refresh: true,
      publicDirectory: 'public',
      buildDirectory: 'build', // Changed this line
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
    },
    extensions: ['.js', '.json', '.jsx', '.mjs', '.ts', '.tsx', '.vue'],
  },
  build: {
    outDir: 'public/build', // Changed this line
    assetsDir: '',
    manifest: true,
    chunkSizeWarningLimit: 1000, // Increased from default 500
    rollupOptions: {
      output: {
        manualChunks: {
          vendor: ['vue', 'v-calendar'], // Add other large dependencies here
          // You can add more manual chunks as needed
        },
        chunkFileNames: 'js/[name]-[hash].js',
        entryFileNames: 'js/[name]-[hash].js',
        assetFileNames: ({name}) => {
          if (/\.(gif|jpe?g|png|svg)$/.test(name ?? '')) {
            return 'images/[name]-[hash][extname]';
          }
          if (/\.css$/.test(name ?? '')) {
            return 'css/[name]-[hash][extname]';
          }
          return 'assets/[name]-[hash][extname]';
        },
      },
    },
  },
});
