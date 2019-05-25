var app = new Vue({
    el:'#root',

    data:{
        showAddUser : false,
        showEditUser : false,
        showDeleteUser : false,
        successMessege : "",
        errorMessege : "",
        users:[
        ]
        // {"id":"1","username":"admin","email":"admin@admin.com","phone":"08123456789"},
        // {"id":"3","username":"admin2","email":"admin2@admin2.com","phone":"0891234567"},
        // {"id":"4","username":"bana","email":"bana@bana.com","phone":"0891234568"}
    },

    mounted(){
        console.log(mounted);
        this.getAllUsers();
    },

    methods:{
        getAllUsers(){
            this.status = 'loading...';
            var vm = this;

            axios.get("http://localhost/vue/ci_rest/api/users/")
            .then(function(response) {
                console.log(response);
                vm.status = response.data[0];
                // if (response.data.error) {
                //     app.errorMessege = response.data.message;
                // }else{
                //     app.users = response.data.users;
                // }
            })
            .catch(function (errors) {
                vm.status = "error euy!"
            })
        }
    }
});