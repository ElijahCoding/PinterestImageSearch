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
    search ({ commit, dispatch }, data) {
        dispatch('saveQuery', data)
    },

    saveQuery ({ commit }, { query, endpoint }) {
        commit('setQuery', query);

        axios.post(endpoint, {
            query
        }).then(data => {
            commit('setLoaded', true)
            commit('setHits', data.data.hits)
        })

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
