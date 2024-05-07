const { createApp } = Vue;

createApp ({
    data() {
       return {
           allDisc: [],
           singleDisc: null,
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

        getSingleDiscFromAPI(index) {

            const myParams = {
                discIndex: index
            }

            axios.get('server.php', {
                params: myParams
            })
            .then((response) => {
                this.singleDisc = response.data;
                console.log(this.singleDisc);
            })

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