<template>
    <div>
        <button :type="type" class="my-button" v-text="test.name"></button>
    </div>
</template>

<script>
    export default {

        data: function () {
            return {
                test: '',
            }
        }, 

        mounted() {
 

            axios.post('api/vue',{})
                .then(response => {
                    //console.log(response.data);
                    this.test = response.data;

                });

        },

        props: [

            'texte',
            'type'

        ]

    }
</script>

<style>

    .my-button {
        background: #333;
        color: #fff;
        padding: 10px 20px;
    }

</style>