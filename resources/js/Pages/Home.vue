
<template>
    <h1>Home</h1>
    <p>{{message}}</p>
</template>

<script setup>
import Layout from '../Shared/Layout.vue'

const message ="Nothing is impossible";

</script>

<script>
export default {
    layout: Layout
}
</script>