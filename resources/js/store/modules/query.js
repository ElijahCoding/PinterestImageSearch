const state = {
    query: '',
    hits: [],
    loaded: false,
    hasError: false
}

const mutations = {
    setQuery (state, data) {
        state.query = data
    },

    setHits (state, data) {
        state.hits = data
    },

    setLoaded (state, data) {
        state.loaded = data
    },

    setError (state, data) {
        state.hasError = data
    }
}

const actions = {
    async search ({ commit, dispatch }, { query, endpoint }) {
        commit('setQuery', query)

        const { data } = await axios.post(endpoint, { query })

        if (data.hits.length) {
            commit('setLoaded', true)
            commit('setHits', data.hits)
        } else {
            commit('setError', true)
        }
    },

    async getLastQuery ({ commit }) {
        const { data } = await axios.get('/query/existing')

        if (data.query && data.hits.length) {
            localStorage.setItem('query', data.query)
            localStorage.setItem('hits', JSON.stringify(data.hits))
        }

        return true
    }
}

const getters = {
    query: state => state.query,
    hits: state => state.hits,
    loaded: state => state.loaded,
    hasError: state => state.hasError
}

export default {
    namespaced: true,
    state,
    mutations,
    actions,
    getters
}
