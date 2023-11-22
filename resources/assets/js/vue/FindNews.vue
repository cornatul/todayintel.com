<template>
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
          <th>Description</th>
          <th class="text-right">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(article, index) in news" :key="index">
          <td>{{ index }}</td>
          <td>{{ article.title }}</td>
          <td>{{ article.description }}</td>
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
console.log('FindNews.vue loaded');
export default {
  name: 'FindNews',
  props: ['keyword'],
  data() {
    return {
      news: [],
      loading: false,
      keyword: window.keyword
    }
  },
  methods: {
    fetchNews(keyword) {
         this.loading = true;

          fetch('https://api.lzomedia.com/find-news', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
              'Access-Control-Allow-Origin': '*'
            },
            body: JSON.stringify({
              topic: keyword
            })
          })
          .then(response => {
            return response.json();
          })
          .then(response => {
            console.log(response);
            this.loading = false;
            this.news = response.data;
          })
          .catch(error => {
            alert(error);
          });
    }
  },
  mounted() {
    this.fetchNews(this.keyword);
  }

}
</script>



