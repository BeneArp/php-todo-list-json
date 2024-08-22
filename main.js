const { createApp } = Vue;

createApp({

    data(){
        return{
            title: 'Todo List',
            apiUrl: 'server.php',
            list: [],
        }
    },

    methods: {
        getApi(){
            axios.get(this.apiUrl).then(response => {
                this.list = response.data;
                console.log(this.list);
            })
        }
    },

    mounted(){
        this.getApi();
    }

}).mount('#app')