<template>
    <div>
        <!--<h1>Main App</h1>-->
    </div>
</template>


<script>

    import Variable from '../mixins/variable.js';
    import Account from './pages/account.vue';
   


    export default {

        components: {

            'account': Account,
         

        },

        created () {

            // console.log(this.sharpspringConnect);

        },
        data() {

            return {

                        
             
            }

        },
       // mixins:[variable]

    }
</script>

<style>



</style>