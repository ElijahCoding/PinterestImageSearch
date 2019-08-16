<template>
    <div class="card mt-3">
        <a class="card-img-top" :href="hit.pageURL" target="_blank" :title="hit.tags">
            <img :src="hit.largeImageURL" class="card-img-top" :alt="hit.pageURL">
        </a>
    </div>
</template>

<script>
    export default {
        props: {
            hit: {
                required: true,
                type: Object
            }
        },

        mounted () {
            console.log(this.hit);
        }
    }
</script>
