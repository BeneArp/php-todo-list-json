const { createApp } = Vue;

createApp({

    data(){
        return{
            title: 'Todo List',
            apiUrl: 'server.php',
        }
    },

    methods: {
        getApi(){
            axios.get(this.apiUrl).then(response => {
                console.log(response.data);
            })
        }
    },

    mounted(){
        this.getApi();
    }

}).mount('#app')