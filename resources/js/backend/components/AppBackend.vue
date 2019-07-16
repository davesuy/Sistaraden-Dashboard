<template>
    <div>
        <!--<h1>Main App</h1>-->
    </div>
</template>


<script>

    import Account from './pages/account.vue';
    import variable from '../mixins/variable.js';

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