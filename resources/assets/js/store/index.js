import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const state = {
    user_state : 'UNAUTHENTICATED',
    token : '',
    posts: []
};

const getters = {
    getUserState: state => {
        return state.user_state;
    },
    getAccessToken: state => {
        return state.token.access_token;
    },
    getUserId: state => {
        return state.token.user_id;
    }
}

const mutations = {
    changeUserState(state,user_state){
        state.user_state = user_state;
    },
    setAccess(state, token){
        state.token = token;
    }
}

const actions = {
    setToken(context, employeeToken){
        context.commit('setAccess', employeeToken);
        context.commit('changeUserState','AUTHENTICATED');
    }
}
export default new Vuex.Store({
    state,
    getters,
    mutations,
    actions
})
