import { defineConfig } from 'vite'
import { svelte } from '@sveltejs/vite-plugin-svelte'
import { resolve } from 'path'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [svelte()],
  build: {
    rollupOptions: {
      input: {
        public: resolve(__dirname, 'src/public.js'),
        admin: resolve(__dirname, 'src/admin.js')
      },
      output: {
        entryFileNames: '[name].js',
        chunkFileNames: '[name].js',
        assetFileNames: '[name].[ext]',
      },
    },
    outDir: './dist',
  },
  server: {
    watch: {
      usePolling: true,
      interval: 1000,
      binaryInterval: 3000,
      ignored: ['node_modules/**', 'public/**']
    }
  }
})
