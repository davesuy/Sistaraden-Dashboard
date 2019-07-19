<template>
    <div>
<!--         <h1>Pagination {{pages_slice}}</h1>
 -->
        <!--     Loop through the pages array to display each page number       -->
        <div class="sistaraden-pagination-con text-center mt-5 pt-5">

          <div class="clearfix btn-group">

            <button type="button" class="btn btn-sm btn-outline-secondary" v-if="page != 1" @click="changePagePrev"> << </button>

            <button v-bind:class="{'active' : (page == pageNumber) }" type="button" class="btn btn-sm btn-outline-secondary" v-for="pageNumber in pages.slice(page-1, page+5)" @click="changePage(pageNumber)"> {{pageNumber}} </button>

            <button type="button" @click="changePageNext" v-if="page < pages.length" class="btn btn-sm btn-outline-secondary"> >> </button>

          </div>

        </div>
     
    </div>
</template>

<script>

    import displayPaginateMixin from '../../../mixins/displayPaginateMixin.js';

    export default {

        data () {
             return {

                page: this.page_slice,
                per_page: this.per_page_slice,
                pages: this.pages_slice,
                pageNumber: ''
               
            }
        }, 
        props: {
            pages_slice: {
                type: Array,
                required: true
            },
            page_slice: {
                type: Number,
                required: true
            },
            per_page_slice: {
                type: Number,
                required: true
            },
            page_accounts_slice: {
                type: Array,
                required: false
            },
           // title: {
                //type: String
            //}
            
        },
        methods: {
            changePage(pageNumber) {

                //console.log(this.pages);

                this.page = pageNumber;
      
            
                this.$emit('pageChanged', this.page);
            },
            changePageNext() {

                this.page += 1;

                this.$emit('pageChangedNext', this.page);
            },
            changePagePrev() {

                this.page -= 1;

                this.$emit('pageChangedPrev', this.page);
            }
        },
        mixins: [displayPaginateMixin],

    }
</script>

<style>


</style>