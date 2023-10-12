const { createApp } = Vue
createApp({
    data() {
        return {
            songs: ''
        }
    },

    methods: {},
    mounted() {
        axios
            .get('server.php')
            .then(response => {
                console.log(response);
                this.songs = response.data
                console.log(this.songs);
            })
    }
}).mount('#app')