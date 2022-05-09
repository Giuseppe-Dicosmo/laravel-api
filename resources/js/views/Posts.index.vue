<template>
    <div class="container grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
      <!-- creiamo un'altro componente e inseriamo il props con :post="el"-->
        <PostCard v-for="el in posts" :key="el.id" :post="el" />
    </div>
</template>

<script>
import PostCard from "../components/PostCard.vue";

export default {
    components: {
        PostCard,
    },
    data() {
        return {
            posts: [],
        };
    },
    methods: {
        // fetchPosts() e una funzione
        fetchPosts() {
            // inseriamo la nostra rotta
            axios
                .get("/api/posts")
                .then((res) => {
                    // Destrutturazione
                    const { posts } = res.data;

                    // Puoi chiamiamo l'array (posts: []) posts
                    this.posts = posts;
                })
                .catch((err) => {
                    console.warn(err);
                });
        },
    },
    mounted() {
        this.fetchPosts();
    },
};
</script>

<style lang="scss"></style>
