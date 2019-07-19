<template>
    <div>

   <!--    <h1> Component Active Lists</h1>  -->
<!--    {{infos}} -->
       <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">ID</th>
              <th scope="col">Title</th>
              <th scope="col">Subject</th>
              <th scope="col">Thumbnail</th>
             
            </tr>
          </thead>

          <tbody>
            <tr v-for="(infoList, index ) in displayedInfos"  v-bind:key="infoList.id">
              <th scope="row">{{ index + num}} </th>
              <th scope="row">{{ infoList.id }} </th>
              <td>{{infoList.title}}</td>
              <td>{{infoList.subject}}</td>
              <td><a :href="infoList.thumbnail"><img width="200" :src="infoList.thumbnail" /></a></td>
           
            </tr>
      
          </tbody>
        </table>

        <pagination :pages_slice="pages" :page_slice="page"  :per_page_slice="perPage" v-on:pageChanged="updatePage($event)" v-on:pageChangedNext="updatePageNext($event)" v-on:pageChangedPrev="updatePagePrev($event)"></pagination>
    </div>
</template>

<script>

    import Pagination from '../includes/partials/Pagination.vue';

    import displayPaginateMixin from '../../mixins/displayPaginateMixin.js';

    export default {

        data() {

            return {
                infos: [],
                page: 1,
                perPage: 10,
                pages: [],
                num: 0,
                total: 0,
                api_url: '/api/emails'

            }

        },
        components: {

            'pagination': Pagination,

        },
        created() {

            this.fetchAccount();

        },

        methods: {

            fetchAccount() {

                let vm = this;
              

                fetch(this.api_url)
                .then(res => res.json())
                .then(data => {

                    this.infos = data.result.getAllemailListings;
                    this.total = data.result.getAllemailListings.length;

                    console.log(data.result.getAllemailListings);
                
                })
                .catch(err => console.log(err))
            },      
            updatePage: function(updatedPage) {
              this.page = updatedPage;
            },
            updatePageNext: function(updatedPage) {
              this.page = updatedPage;
            },
            updatePagePrev: function(updatedPage) {
              this.page = updatedPage;
            }
          

        },
        watch: {

          infos () {

            this.setPages(this.infos);

          }

        },
        computed: {

          displayedInfos() {

            return this.paginate(this.infos);

          }

        },
        mixins: [displayPaginateMixin],
        
  

    }




</script>

<style>



</style>