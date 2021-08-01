<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                    
         <button @click="followuser" v-text="buttontext" class="btn btn-primary ml-4">Follow</button> 

                    </div>
                </div>
            </div>
        </div> 
    </div>
</template>

<script>
    export default {
        props:['userid','follows'],
        mounted() {
            console.log('Component mounted.')
        },
        data:function(){
            return {
                status:this.follows
            }
        },
        methods:{
            followuser(){
                    axios.post('/follow/'+this.userid).then(response=>{this.status=!this.status})
                    .catch(errors=>{
                        if(errors.response.status===401){
                            window.location='/login';
                        }
                    })

            }
        },
        computed:{

            buttontext(){
                return (this.status)? 'unfollow':'follow';
            }
        }
    }
</script>
