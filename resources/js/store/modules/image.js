const state = {
    images: []
}

const mutations = {

}

const actions = {
    search ({ commit, dispatch }, data) {
        dispatch('saveQuery', data)
    },

    saveQuery ({}, { query, endpoint }) {
        axios.post(endpoint, {
            query
        })

    }
}

const getters = {

}

export default {
    namespaced: true,
    state,
    mutations,
    actions,
    getters
}
