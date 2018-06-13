<template lang="html">
    <div class="container">
        <form action="#" v-on:submit.prevent="login">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" v-model="username" class="form-control" name="username" id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" v-model="password" class="form-control" id="password" placeholder="Password">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <div class="text-center">
                <router-link to="/register">Register</router-link>
            </div>
        </form>
    </div>
</template>


<script>
    export default{
        data() {
            return {
                username : "",
                password : ""
            }
        },
        methods : {
            login : function() {
                var instance = this;
                console.log(this.username);
                axios.post('/api/authenticate', {
                    email : this.username,
                    password : this.password
                }).then(function(response){
                    console.log(response.data);
                  
                    instance.$store.dispatch('setToken', response.data);
                    instance.$router.replace('/post');
                
                }).catch(function(error){
                    console.log(error);
                });
            }
        }
    }
</script>
<style lang="css">

</style>