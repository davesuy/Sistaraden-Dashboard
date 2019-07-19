<template>
    <div>

   <!--    <h1> Component Active Lists</h1>  -->
<!--    {{infos}} -->
       <table class="table">
          <thead class="thead-dark">
            <tr>
               <th scope="col">#</th>
              <th scope="col">Active List ID</th>
              <th scope="col">Name</th>
              <th scope="col">Member Count</th>
              <th scope="col">Description</th>
            </tr>
          </thead>

          <tbody>
            <tr v-for="(activeList, index ) in displayedInfos"  v-bind:key="activeList.id">
               <th scope="row">{{ index + num}} </th>
              <th scope="row">{{ activeList.id }} </th>
              <td>{{activeList.name}}</td>
              <td>{{activeList.memberCount}}</td>
              <td>{{activeList.description}}</td>
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
                total: 0

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

                fetch('/api/activelists')
                .then(res => res.json())
                .then(data => {

                    this.infos = data.result.activeList;
                    this.total = data.result.activeList.length;
                    console.log(data.result.activeList);
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