import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/sass/app.scss',
        'resources/js/app.js',
        'resources/css/app.css',
      ],
      refresh: true,
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
  base: "/",
  publicDir: process.env.ASSET_URL,
  optimizeDeps: {
    include: ['v-calendar']
  },
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources/js'),
      '@assets': path.resolve(__dirname, 'resources/assets'),
      vue: 'vue/dist/vue.esm-bundler.js', '~bootstrap': 'bootstrap',
    },
    extensions: ['.js', '.json', '.jsx', '.mjs', '.ts', '.tsx', '.vue'],
  },
  build: {
    chunkSizeWarningLimit: 1600,
    rollupOptions: {
      output: {
        chunkFileNames: '[name]-[hash].js',
        entryFileNames: '[name]-[hash].js',

        assetFileNames: ({ name }) => {
          if (/\.(gif|jpe?g|png|svg)$/.test(name ?? '')) {
            return '[name]-[hash][extname]'
          }

          if (/\.css$/.test(name ?? '')) {
            return '[name]-[hash][extname]'
          }

          // default value
          // ref: https://rollupjs.org/guide/en/#outputassetfilenames
          return '[name]-[hash][extname]'
        }
      }
    }
  },
});
