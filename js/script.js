
const { createApp } = Vue;

createApp({
    data() {
        return {
            // indirizzo da dove prendere i dati e portarli nel documento js
            getDataUrl: 'server.php',
            list: []

        }
    },
    mounted() {
        axios.get(this.getDataUrl).then((response) => {
            this.list = response.data
            console.log(this.list)
        })
    },

    methods: {

    },

}).mount('#app')
