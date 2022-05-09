<template>
    <div class="card post">
        <!-- <img src="" alt="" srcset=""> -->
        <div class="card__body">
            <h4 class="post__title">{{ post.title }}</h4>
            <p v-if="post.category">{{ post.category.name }}</p>
            <ul class="tags">
                <li class="tag" v-for="tag in post.tags" :key="tag.id">
                    {{ tag.name }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        post: {
            type: Object,
            required: false,
        },
    },
};
</script>

<style lang="scss" scoped></style>
