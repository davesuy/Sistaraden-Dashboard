<template>
    <div>

   <!--    <h1> Component Active Lists</h1>  -->
<!--    {{infos}} -->
       <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Account ID</th>
              <th scope="col">Company Name</th>
              <th scope="col">Title</th>
            </tr>
          </thead>

          <tbody>
            <tr v-for="(infoList, index ) in displayedInfos"  v-bind:key="infoList.id">
              <th scope="row">{{ index + num}} </th>
              <td>{{infoList.firstName}} {{infoList.lastName}}</td>
              <td>{{infoList.emailAddress}}</td>          
              <th scope="row">{{ infoList.accountID }} </th>
              <td>{{infoList.companyName}}</td>
              <td>{{infoList.title}}</td>
          
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
                api_url: '/api/leads'

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

                    this.infos = data.result.lead;
                    this.total = data.result.lead.length;

                    console.log(data.result.glead);
                
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