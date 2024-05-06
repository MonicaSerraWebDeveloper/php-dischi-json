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
            const myParam = {
                discIndex: this.indexDisc
            }

            axios.get('server.php', {
                params: myParam
            })
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