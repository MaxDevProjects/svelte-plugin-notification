import { defineConfig } from 'vite'
import { svelte } from '@sveltejs/vite-plugin-svelte'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [svelte({
    css: {
      outputFilename: 'main.svelte-p.css', // Nom de fichier personnalisé pour les fichiers CSS générés
    },
  })],
  build: {
    outDir: 'public/dist', // Chemin de sortie pour les fichiers générés
    rollupOptions: {
      input: './src/main.js',
      output: {
        entryFileNames: 'bundle.svelte-p.js', // Nom de fichier personnalisé pour le bundle
        chunkFileNames: '[name].js', // Nom de fichier personnalisé pour les chunks
        assetFileNames: 'main.svelte-p.[ext]',
      },
    },
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
