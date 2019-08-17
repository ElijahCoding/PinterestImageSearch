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
            <Hits :hits="hits.length ? hits : existing_hits"/>
            <p v-if="hasError">Неправильный Запрос</p>
        </div>
    </div>
</template>

<script>
    import { mapGetters, mapActions } from 'vuex'
    import Hits from './partials/Hits'

    export default {
        props: ['endpoint', 'last_query_endpoint'],

        data () {
            return {
                query: '',
                existing_hits: []
            }
        },

        mounted () {
            this.fetchExistingData()
        },

        methods: {
            ...mapActions({
                search: 'query/search',
                getLastQuery: 'query/getLastQuery'
            }),

            async fetchExistingData () {
                if (await this.getLastQuery()) {
                    localStorage.getItem('query') ? this.query = localStorage.getItem('query') : this.query = ''
                    localStorage.getItem('hits') ? this.existing_hits = JSON.parse(localStorage.getItem('hits')) : this.existing_hits = []
                }
            }
        },

        components: {
            Hits
        },

        computed: {
            ...mapGetters({
                hits: 'query/hits',
                loaded: 'query/loaded',
                hasError: 'query/hasError'
            })
        }
    }
</script>
