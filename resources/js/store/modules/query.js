const state = {
    query: '',
    hits: [],
    loaded: false
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
    }
}

const actions = {
    async search ({ commit, dispatch }, { query, endpoint }) {
        commit('setQuery', query)

        const data = await axios.post(endpoint, { query })

        if (data) {
            commit('setLoaded', true)
            commit('setHits', data.data.hits)
        }
    },

    async getLastQuery ({ commit }) {
        
    }
}

const getters = {
    query: state => state.query,
    hits: state => state.hits,
    loaded: state => state.loaded
}

export default {
    namespaced: true,
    state,
    mutations,
    actions,
    getters
}
