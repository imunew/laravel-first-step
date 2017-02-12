<template>
    <div class="rss-item">
        <a :href="link" v-on:click="click" target="_blank">{{ title }}</a>
    </div>
</template>

<style>
    .rss-item {
        margin-bottom: 5px;
    }
</style>

<script>
    export default {
        props: ['link', 'title'],
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            click: function(e) {
                if (!window.confirm('You are now leaving this website. Do you want to continue?')) {
                    e.preventDefault();
                }
            }
        }
    }
</script>
