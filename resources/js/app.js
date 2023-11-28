import '@css/app.css';

// Accept HMR as per: https://vitejs.dev/guide/api-hmr.html
if (import.meta.hot) {
    import.meta.hot.accept(() => {
        console.log("HMR")
    });
}


// import Alpine from 'alpinejs'
// window.Alpine = Alpine
// Alpine.start()
