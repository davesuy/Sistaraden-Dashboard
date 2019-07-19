<template>
    <div>
<!--        <h1> Component Account</h1> -->
<!--   {{accounts}} -->
       <table class="table">
          <thead class="thead-dark">
            <tr>
               <th scope="col">#</th>
              <th scope="col">Account ID</th>
              <th scope="col">Account Name</th>
            </tr>
          </thead>

          <tbody>
            <tr v-for="(account, index ) in displayedAccounts"  v-bind:key="account.id">
               <th scope="row">{{ index + num}} </th>
              <th scope="row">{{ account.id }} </th>
              <td>{{account.accountName}}</td>
            </tr>
      
          </tbody>
        </table>

   <!--      <div class="sistaraden-pagination-con text-center mt-5 pt-5">

          <div class="clearfix btn-group">

            <button type="button" class="btn btn-sm btn-outline-secondary" v-if="page != 1" @click="page--"> << </button>

            <button v-bind:class="{'active' : (page == pageNumber) }" type="button" class="btn btn-sm btn-outline-secondary" v-for="pageNumber in pages.slice(page-1, page+5)" @click="page = pageNumber"> {{pageNumber}} </button>

            <button type="button" @click="page++" v-if="page < pages.length" class="btn btn-sm btn-outline-secondary"> >> </button>

          </div>

        </div> -->
<!-- 
    {{page}} -->
        <pagination :pages_slice="pages" :page_slice="page"  :per_page_slice="perPage" v-on:pageChanged="updatePage($event)" v-on:pageChangedNext="updatePageNext($event)" v-on:pageChangedPrev="updatePagePrev($event)"></pagination>
    </div>
</template>

<script>

    import Pagination from '../includes/partials/Pagination.vue';

    import displayPaginateMixin from '../../mixins/displayPaginateMixin.js';

    export default {

        data() {

            return {
                accounts: [],
                account: {
                    id: ''
                },
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

                fetch('/api/accounts')
                .then(res => res.json())
                .then(data => {

                    this.accounts = data.result.account;
                    this.total = data.result.account.length;
                    //console.log(data.result.account);
                })
                .catch(err => console.log(err))

                // axios({
                //     method: "post",
                //     url: this.sharpspringConnect,
                //     headers: {
                //         'Content-Type': 'application/json'
                //     },
                //     data: {"method":"getAccounts","params":{"where":[],"limit":100,"offset":0},"id":5}
                // })
                // .then(response => {
                //     this.accounts = response.data.result.account;

                //     console.log(response.data.result.account);
                // })
                // .catch(response => {
                //     console.log(response);
                // });
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

          accounts () {

            this.setPages(this.accounts);

          }

        },
        computed: {

          displayedAccounts () {

            return this.paginate(this.accounts);

          }

        },
        mixins: [displayPaginateMixin],
        
  

    }




</script>

<style>



</style>