const { createApp } = Vue;

createApp ({
    data() {
       return {
           allDisc: [],
           indexFlag: 0,
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
            this.indexFlag = index
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