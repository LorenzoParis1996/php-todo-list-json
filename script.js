const { createApp } = Vue

createApp({
    data() {
        return {
            tasks: [],
        }
    },

    methods: {
        getData() {
            axios.get('./server.php', {
                params: {
                    ID: 12345
                }
            })
                .then((response) => {

                    this.tasks = response.data;
                    console.log(this.tasks);
                })
                .catch(function (error) {
                    console.log(error);
                })
                .finally(function () {

                });
        }
    },

    created() {
        this.getData();
    }
}).mount('#app')