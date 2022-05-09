<template >
  <div class="container">
    <div v-for="post in posts" :key="post.id">
    {{ post.title }}
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      posts: []
    }
  },
  methods: {
    // fetchPosts() e una funzione
    fetchPosts() {
      // inseriamo la nostra rotta
      axios.get('/api/posts')
      .then( res => {
        // Destrutturazione
        const { posts } = res.data

        // Puoi chiamiamo l'array (posts: []) posts
        this.posts = posts
      })
      .catch( err => {
        console.warn(err)
      })
    }
  },
  mounted() {
    this.fetchPosts();
  }
}
</script>

<style lang="scss">

</style>