const { createApp } = Vue;

createApp({

    data(){
        return{
            title: 'Todo List',
            apiUrl: 'server.php',
            list: [],
            userTask: '',
        }
    },

    methods: {
        getApi(){
            axios.get(this.apiUrl).then(response => {
                this.list = response.data;
                console.log(this.list);
            })
        },

        addTask(){
            const data = {
                "text": this.userTask,
            };

            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
            .then(response => {
                console.log(response.data);
                this.toDo = response.data;
            });

            this.userTask = '';

            this.getApi();
        },

        removeTask(index){
            // console.log(index);
            const data = {
                "indexDelate" : index
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
            .then(response => {
                console.log(response.data);
                this.toDo = response.data;
            });

            this.getApi();
        },

        changeStatus(index){
            const data = {
                "indexToChange": index
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
            .then(response => {
                console.log(response.data);
                this.toDo = response.data;
            });

            this.getApi();
        }
    },

    mounted(){
        this.getApi();
    }

}).mount('#app')