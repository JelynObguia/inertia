<template>
    
<h1>My Seafoods</h1>
<hr>

<div class="div d-flex align-contents-between  px-5" >
    <div class="card mb-3" v-for="seafood in seafoods" :key="seafood.id">
        <div class="card-header bg-success">
            <h4 class="text-center">{{seafood.main_dish}}</h4>
        </div>
        <div class="card-body">
            <h5>Inclusions:</h5>
            <ul>
                <li>Beverage: {{seafood.beverages}}</li>
                <li>Dessert: {{seafood.dessert}}</li>
                <li>Price: {{seafood.price}}</li>
            </ul>
        </div>
    </div>
</div>


</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        seafoods: Array
    }
}
</script>

<style scoped>
    .card{
        width: 500px;
    }
</style>