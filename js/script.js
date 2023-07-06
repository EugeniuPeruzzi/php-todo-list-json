
const { createApp } = Vue;

createApp({
    data() {
        return {
            // indirizzo da dove prendere i dati e portarli nel documento js
            getDataUrl: 'server.php',
            list: [],
            getInput: '',

        }
    },
    mounted() {
        //sull'arrivo della paggina mostra tutti i dati dentro il file db.json
        axios.get(this.getDataUrl).then((response) => {
            this.list = response.data
            console.log(this.list)
        });
    },

    methods: {
        //funzione che prende l'iput dell'utente e lo porta nel file server.php
        pushTodo() {
            //creo una costente che e il dato che viene mandato
            const newObj =
            {
                text: this.getInput,
                status: false
            }
            // con posto importo i dati in getDataUrl e l'oggetto con headers
            axios.post(this.getDataUrl, { newObj }, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.getInput = '';
                this.list = response.data;
            })
        },

    },

}).mount('#app')
