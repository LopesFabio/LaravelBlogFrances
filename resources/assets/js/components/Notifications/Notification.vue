<template>
    <div>
        <a class="dropdow-item" href="#">
            <spam @click.prevent="lire(notification.id)">Lire</spam>
            {{ notification.commentaire.user.name }} commenté {{ notification.commentaire.titre }}
        </a>
    </div>

</template>

<script>
    export default {
        props: ['notification'],

        computed: {
            commentaire() {
                return this.notification.data.commentaire
            }
        },

        methods: {
            lire (idNotification) {
                this.$store.dispatch('lire', {id: idNotification})
            }
        }
    }

</script>