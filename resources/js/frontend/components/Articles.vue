<template>
    <div>
        <div class="card card-body mb-2" v-for="post in displayedPosts" v-bind:key="post.id">
            
            <h3>{{ post.title }}</h3>
            <p>{{ post.body }}</p>
        </div>

        <div class="clearfix btn-group col-md-2 offset-md-5">
            <button type="button" class="btn btn-sm btn-outline-secondary" v-if="page != 1" @click="page--"> << </button>
            <button type="button" class="btn btn-sm btn-outline-secondary" v-for="pageNumber in pages.slice(page-1, page+5)" @click="page = pageNumber"> {{pageNumber}} </button>
            <button type="button" @click="page++" v-if="page < pages.length" class="btn btn-sm btn-outline-secondary"> >> </button>
        </div>

    </div>
</template>

<script>
    export default {

        data() {

            return {

                // articles: [],
                // article: {
                //     id: '',
                //     title: '',
                //     body: ''
                // },
                // article_id: '',
                pagination: {},
                posts: [],
                baseUrl: 'https://jsonplaceholder.typicode.com/',
                edit: false,
                page: 1,
                perPage: 5,
                pages: [],

            }

        },
        methods: {

            getPosts() {

                // fetch('https://jsonplaceholder.typicode.com/posts')
                //     .then(res => res.json())
                //     .then(res=> {
                //         console.log(res);
                //     })

                let vm = this;

                var page_url = this.baseUrl + 'posts';

                    axios.get(page_url)
                    .then(response => {
                        //console.log(response.data);

                        this.articles = response.data;
                        this.posts = response.data;

                    })
                    .catch(response => {

                         console.log(response);

                    });

            },
            setPages () {

              let numberOfPages = Math.ceil(this.posts.length / this.perPage);

              for (let index = 1; index <= numberOfPages; index++) {

                this.pages.push(index);

              }
          
            },
            paginate (posts) {
              let page = this.page;
              let perPage = this.perPage;
              let from = (page * perPage) - perPage;
              let to = (page * perPage);
              return  posts.slice(from, to);
            }

        },
        watch: {
            posts () {
              this.setPages();
            }
        },
        computed: {
            displayedPosts () {
              return this.paginate(this.posts);
            }
        },
        created () {
            this.getPosts();
        },

    }
</script>

<style>



</style>