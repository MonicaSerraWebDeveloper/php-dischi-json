const { createApp } = Vue;

createApp ({
    data() {
       return {
           allDisc: [],
           indexDisc: 0,
           showPopUp: false,
       }
    },

    methods: {
        getDiscFromAPI() {
            axios.get('server.php')
            .then((response) => {
                this.allDisc = response.data;
            })
        },

        getSingleDisc(index) {
            this.indexDisc = index
            if (!this.showPopUp) {
                this.showPopUp = true
            } else {
                this.showPopUp = false
            }
            
        }
    },

    mounted() {
        this.getDiscFromAPI();
    }
}).mount('#app');