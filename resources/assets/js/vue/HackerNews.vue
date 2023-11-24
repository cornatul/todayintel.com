<template>
  <div class="card">
    <div class="card-body">
      <div class="box">
        <div class="input-group rounded">
          <input v-model="search"  type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <span @click="searchNews" class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="card" v-if="show">
    <div class="card-body">
      <form>
        <div class="form-group">
          <label for="title">Email address</label>
          <input v-model="article.title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Text</label>
          <v-md-editor v-model="article.markdown" height="400px"></v-md-editor>
        </div>
        <button @click="saveArticle" type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

  <div  v-if="!show" class="card">
    <div class="card-body" v-if="loading">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="text-center">
            <svg width="57" height="57" viewBox="0 0 57 57" xmlns="http://www.w3.org/2000/svg" stroke="#ddd">
              <g fill="#ddd" fill-rule="evenodd">
                <g transform="translate(1 1)" stroke-width="2">
                  <circle cx="5" cy="50" r="5">
                    <animate attributeName="cy"
                             begin="0s" dur="2.2s"
                             values="50;5;50;50"
                             calcMode="linear"
                             repeatCount="indefinite" />
                    <animate attributeName="cx"
                             begin="0s" dur="2.2s"
                             values="5;27;49;5"
                             calcMode="linear"
                             repeatCount="indefinite" />
                  </circle>
                  <circle cx="27" cy="5" r="5">
                    <animate attributeName="cy"
                             begin="0s" dur="2.2s"
                             from="5" to="5"
                             values="5;50;50;5"
                             calcMode="linear"
                             repeatCount="indefinite" />
                    <animate attributeName="cx"
                             begin="0s" dur="2.2s"
                             from="27" to="27"
                             values="27;49;5;27"
                             calcMode="linear"
                             repeatCount="indefinite" />
                  </circle>
                  <circle cx="49" cy="50" r="5">
                    <animate attributeName="cy"
                             begin="0s" dur="2.2s"
                             values="50;50;5;50"
                             calcMode="linear"
                             repeatCount="indefinite" />
                    <animate attributeName="cx"
                             from="49" to="49"
                             begin="0s" dur="2.2s"
                             values="49;5;27;49"
                             calcMode="linear"
                             repeatCount="indefinite" />
                  </circle>
                </g>
              </g>
            </svg>
          </h2>
        </div>
      </div>
    </div>
    <div class="card-table table-responsive" v-else>
      <table class="table">
        <thead>
        <tr>
          <th>
            ID
          </th>
          <th>Title</th>
          <th>Published</th>
          <th class="text-right">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(article, index) in news" :key="index">
          <td>{{ index }}</td>
          <td>{{ article.title }}</td>
          <td>{{ article.published }}</td>
          <td class="text-right">
            <a @click="extractArticle(article.link)" class="btn btn-primary">Extract</a>
          </td>
        </tr>
        </tbody>
      </table>
     
    </div>
  </div>
</template>
<script>
console.log('HackerNews.vue loaded');
export default {
  name: 'HackerNews',
  props: ['keyword'],
  data() {
    return {
      news: [],
      search: 'laravel',
      loading: false,
      article: {},
      show: false
    }
  },
  methods: {
    fetchArticles(keyword) {
         this.loading = true;
          fetch('https://api.todayintel.com/feed/reader', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
              'Access-Control-Allow-Origin': '*'
            },
            body: JSON.stringify({
              link: "https://hnrss.org/newest?q=" + keyword,
            })
          })
          .then(response => {
            return response.json();
          })
          .then(response => {
            console.log(response);
            this.loading = false;
            this.show = false;
            this.news = response.data.response.entries;
          })
          .catch(error => {
            alert(error);
          });
    },
    extractArticle(link) {
      this.loading = true;

      fetch('https://api.todayintel.com/nlp/article', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
              'Access-Control-Allow-Origin': '*'
            },
            body: JSON.stringify({
              link: link,
            })
          })
          .then(response => {
            return response.json();
          })
          .then(response => {
            console.log(response);
            this.loading = false;
            this.show = true;
            this.article = response.data;
          })
          .catch(error => {
            alert(error);
          });
    },
    saveArticle(){
      console.log(this.article);
    },
    searchNews() {
      this.fetchArticles(this.search);
    }
  },
  mounted() {

    this.fetchArticles(this.search);

  }

}
</script>
<style lang="scss">
$color_1: #14B1B2;
$background-color_1: white;

.selectpicker {
  option {
    border: none;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    color: $color_1;
    font-weight: bold;
    font-size: 30px;
    padding-left: 0;
    margin: -20px 0 0;
    background: $background-color_1 none;
  }
}
select.selectpicker {
  border: none;
  outline: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  color: $color_1;
  font-weight: bold;
  font-size: 30px;
  padding-left: 0;
  margin: -20px 0 0;
  background: $background-color_1 none;
}

</style>




