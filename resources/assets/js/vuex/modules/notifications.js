export default {
    state: {
        item: []
    },

    mutations: {
        LOAD_NOTIFICATIONS (state, notifications){
            state.items = notifications
        },

        MARQUER_LIRE (state, id) {
            let index = state.items.filter(notification => notification.id == id)
            state.items.splice(index, 1)
        },

        TOUS_LIRE (state) {
            state.items = []
        }
    },

    actions: {
        loadNotifications (context) {
            axios.get('/notifications')
                .then(response => {
                    context.commit('LOAD_NOTIFICATIONS', response.data.notifications)
                })
        },

        lire (context, params) {
            axios.put('/notification-lire', params)
                .then(() => context.comit('MARQUER_LIRE', params.id))
        },

        marquerLire (context) {
            axios.put('/notification-tous-lire')
                .then(() => context.commit('TOUS_LIRE'))
        }
    }
}