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
          <th>Keyword</th>
          <th>Appearance</th>
          <th>Updated at</th>
          <th class="text-right">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr  v-for="(keyword, index) in keywords" :key="index">
          <td>{{ keyword.id }}</td>
          <td>{{ keyword.keyword }}</td>
          <td>{{ keyword.count }}</td>
          <td>{{ keyword.updated_at }}</td>
          <td class="text-right">
            <a class="btn btn-primary btn-sm" :href="'/news/find-news/' + keyword.keyword">
              <i class="fas fa-eye"></i>
            </a>
          </td>
        </tr>
        </tbody>
      </table>
    </div>

  </div>
</template>
<script>
console.log('TrendingKeywords.vue loaded');
export default {
    name: 'TrendingKeywords',
    data() {
        return {
          title: 'Trending Keywords',
          keywords: [],
          loading: false
        }
    },
    methods: {
        fetchTrendingKeywords()
        {
            this.loading = true;

            fetch('/news/api/trending-words')
                .then(response => {
                    return response.json();
                }).then(response => {
                    console.log(response);
                    this.loading = false;
                    this.keywords = response.data;
                })
                .catch(error => {
                    console.log(error);
                });

        },
    },
    mounted()
    {
        this.fetchTrendingKeywords();
        console.log('TrendingKeywords.vue mounted');
    }

}
</script>
<style lang="scss">
ul.keyword-list {
  list-style: none;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  li {
    flex: 1;
    width: 25vw; /* Set to 25% for 4 columns */
    box-sizing: border-box;
    padding: 10px;
    border: 1px solid #ccc;
    margin: 5px;
  }
}
</style>


