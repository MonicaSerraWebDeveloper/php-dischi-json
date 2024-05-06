const { createApp } = Vue;

createApp ({
    data() {
       return {
           allDisc: []
       }
    },

    methods: {
        getDiscFromAPI () {
            axios.get('server.php')
            .then((response) => {
                this.allDisc = response.data;
            })
        }
    },

    mounted() {
        this.getDiscFromAPI();
    }
}).mount('#app');