<template>
    <div class="col-md-4">
        <div class="card">
            <a class="card-img-top" :href="hit.pageURL" target="_blank" :title="hit.tags">
                <img :src="hit.largeImageURL" class="card-img-top" :alt="hit.pageURL">
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            hit: {
                required: true,
                type: Object
            }
        }
    }
</script>
