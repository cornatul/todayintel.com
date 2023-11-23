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

  <div class="card">
    <div class="card-body" v-if="loading">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="text-center">
            Loading...
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
            Extract
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
    }
  },
  methods: {
    fetchArticles(keyword) {
         this.loading = true;
          fetch('https://api.lzomedia.com/feed/reader', {
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
            this.news = response.data.response.entries;
          })
          .catch(error => {
            alert(error);
          });
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




