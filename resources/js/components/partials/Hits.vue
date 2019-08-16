<template>
    <div class="col-md-8 mt-3">
        <div class="row">
            <Hit v-for="hit in hits" :hit="hit" :key="hit.id" />
        </div>
    </div>
</template>

<script>
    import Hit from './Hit'

    export default {
        props: {
            hits: {
                required: true,
                type: Array
            }
        },

        components: {
            Hit
        }
    }
</script>
