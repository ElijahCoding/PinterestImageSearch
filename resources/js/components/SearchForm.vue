<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Поиск Котов....</div>

                    <div class="card-body">
                        <form @submit.prevent="search({query, endpoint})">
                            <div class="form-group">
                                <input type="text"
                                       class="form-control"
                                       v-model="query"
                                       required
                                       >
                            </div>

                            <div class="text-center">
                                <button type="submit"
                                        class="btn btn-primary"
                                        v-if="!loaded">
                                        Поиск
                                </button>
                                <a href="/" class="btn btn-primary" v-else>Далее</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <Hits v-if="hits.length" :hits="hits" />
        </div>
    </div>
</template>

<script>
    import { mapGetters, mapActions } from 'vuex'
    import Hits from './partials/Hits'

    export default {
        props: ['endpoint', 'last_query'],

        data () {
            return {
                query: ''
            }
        },

        mounted () {

        },

        methods: {
            ...mapActions({
                search: 'image/search'
            })
        },

        components: {
            Hits
        },

        computed: {
            ...mapGetters({
                hits: 'image/hits',
                loaded: 'image/loaded'
            })
        }
    }
</script>
