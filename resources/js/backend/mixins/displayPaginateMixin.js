const displayPaginateMixin = {

    methods: {

        setPages (infoParam) {

          let numberOfPages = Math.ceil(infoParam.length / this.perPage);


          for (let index = 1; index <= numberOfPages; index++) {

            this.pages.push(index);


          }

        },
        paginate (infoParam) {

          let page = this.page;
          let perPage = this.perPage;
          let from = (page * perPage) - perPage;
          let to = (page * perPage);

          let per_page = perPage - 1;
       
       
          //console.log(page + '-' + perPage + '-' + from + '-' + to);
          this.num = to - per_page;
          return infoParam.slice(from, to);

        }

    }

}

export default displayPaginateMixin
