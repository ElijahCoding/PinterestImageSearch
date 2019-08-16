const state = {
    images: []
}

const mutations = {

}

const actions = {
    search ({ commit, dispatch }, query) {
        dispatch('saveQuery', query)
    },

    saveQuery ({}, query) {
        
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
