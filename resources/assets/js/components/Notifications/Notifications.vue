<template>
    <div>
        <li class="nav-item dropdown">
            <a id="navBarDropdown" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"
               aria-haspopup="true">
                Notificacions ({{ notifications.length }})
                <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <notification v-for="notification in notifications" :key="notification.id" :notification="notification">
                    {{ notifications }}
                </notification>

                <a class="dropdown-item" href="#" @click.prevent="MarquerLire">
                    Marquer Lire
                </a>
            </div>
        </li>
    </div>
</template>

<script>
    export default {
        created () {
            this.$store.dispatch('loadNotifications')
        },

        computed: {
            notifications () {
                return this.$store.state.notifications.items
            }
        },

        methods: {
            MarquerLire () {
                this.$store.dispatch('MarquerLire')
            }
        }
    }
</script>