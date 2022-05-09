<template >
  <div class="app bg-slate-200">
    <PostsGrid />
  </div>
</template>

<script>
import PostsGrid from "./Posts.index.vue";

export default {

  components: {
    PostsGrid,
  }

}
</script>

<style lang="scss" scoped>

.app {
  min-height: 100vh;
}

</style>