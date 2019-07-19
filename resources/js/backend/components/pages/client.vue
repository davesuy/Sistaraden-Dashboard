<template>
    <div>

   <!--    <h1> Component Active Lists</h1>  -->
<!--    {{infos}} -->
       <table class="table">
          <thead class="thead-dark">
            <tr>
               <th scope="col">#</th>
              <th scope="col">Client ID</th>
              <th scope="col">Company Name</th>
              <th scope="col">Street Address</th>
              <th scope="col">Zip Code</th>
              <th scope="col">Country</th>
              <th scope="col">State</th>
              <th scope="col">City</th>
            </tr>
          </thead>

          <tbody>
            <tr v-for="(infoList, index ) in displayedInfos"  v-bind:key="infoList.id">
               <th scope="row">{{ index + num}} </th>
              <th scope="row">{{ infoList.id }} </th>
              <td>{{infoList.companyName}}</td>
              <td>{{infoList.streetAddress}}</td>
              <td>{{infoList.zipCode}}</td>
              <td>{{infoList.country}}</td>
              <td>{{infoList.state}}</td>
              <td>{{infoList.city}}</td>
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
                api_url: '/api/clients'

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

                    this.infos = data.result.getAllcompanyProfileManagedBys;
                    this.total = data.result.getAllcompanyProfileManagedBys.length;

                    //console.log(data.result.getAllcompanyProfileManagedBys.length);
                
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