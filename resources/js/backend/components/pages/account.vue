<template>
    <div>
<!--        <h1> Component Account</h1> -->

       <table class="table">
          <thead class="thead-dark">
            <tr>
               <th scope="col">#</th>
              <th scope="col">Account ID</th>
              <th scope="col">Account Name</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>

          <tbody>
            <tr v-for="(account, index ) in displayedAccounts"  v-bind:key="account.id">
               <th scope="row">{{ index + num}} </th>
              <th scope="row">{{ account.id }} </th>
              <td>{{account.accountName}}</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
      
          </tbody>
        </table>

         <!--     Loop through the pages array to display each page number       -->
         <div class="sistaraden-pagination-con text-center mt-5">
          <div class="clearfix btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary" v-if="page != 1" @click="page--"> << </button>
            <button v-bind:class="{'active' : (page == pageNumber) }" type="button" class="btn btn-sm btn-outline-secondary" v-for="pageNumber in pages.slice(page-1, page+5)" @click="page = pageNumber"> {{pageNumber}} </button>

            <button type="button" @click="page++" v-if="page < pages.length" class="btn btn-sm btn-outline-secondary"> >> </button>
          </div>
           </div>
    </div>
</template>

<script>

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
        created() {

            this.fetchAccount();

        },

        methods: {

            fetchAccount() {

                let vm = this;

                // fetch(this.sharpspringConnect, {
                //     method: 'post',
                //     headers: {
                //         'content-type': 'application/json'
                //     },
                //     body: JSON.stringify({"method":"getAccounts","params":{"where":[],"limit":100,"offset":0},"id":5})
                // })
                // .then(res => res.json())
                // .then(data => {

                //     this.accounts = data.result.account;
                //     this.total = data.result.account.length;
                //     //console.log(data.result.account);
                // })
                // .catch(err => console.log(err))

                axios({
                    method: "post",
                    url: this.sharpspringConnect,
                    headers: {
                         'content-type': 'application/json'
                    },
                    data: {"method":"getAccounts","params":{"where":[],"limit":100,"offset":0},"id":5}
                })
                .then(response => {
                    this.accounts = response.data.result.account;

                    console.log(response.data.result.account);
                })
                .catch(response => {
                    console.log(response);
                });
            },
            setPages () {

              let numberOfPages = Math.ceil(this.accounts.length / this.perPage);


              for (let index = 1; index <= numberOfPages; index++) {

                this.pages.push(index);


              }

            },
            paginate (accounts) {

              let page = this.page;
              let perPage = this.perPage;
              let from = (page * perPage) - perPage;
              let to = (page * perPage);

              let per_page = perPage - 1;
           
           
              //console.log(page + '-' + perPage + '-' + from + '-' + to);
              this.num = to - per_page;
              return accounts.slice(from, to);

            }

        },
        watch: {

          accounts () {

            this.setPages();

          }

        },
        computed: {

          displayedAccounts () {

            return this.paginate(this.accounts);

          }

        }
  

    }




</script>

<style>



</style>