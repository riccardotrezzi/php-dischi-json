const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: []
        };
    },
    methods: {
        getDiscs(){
            axios
                .get('http://localhost:8888/php-dischi-json/api.php')
                .then(res => {
                    this.discs = res.data;
                });
        }
    },
    created() {
        this.getDiscs();
    }
}).mount('#app');