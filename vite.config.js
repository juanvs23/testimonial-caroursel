import { defineConfig } from 'vite'

export default defineConfig({
    base: '/',
    root:'./',
    build:{
        outDir:'./assets',
        emptyOutDir:false,
        sourcemap:true,
        rollupOptions:{
            input:{
                main:'./src/scripts.js'
            },
            output:{
                entryFileNames:'js/[name].js',
                chunkFileNames:'[name].js',
                assetFileNames:'[ext]/[name].[ext]',

            }
        }
    }
})