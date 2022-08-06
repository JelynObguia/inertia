
<template>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Seafoods</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Home'}" href="/">Home</Link>
        </li>
         <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Seafood'}" href="/seafood">Seafoods</Link>
        </li>
         <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='About'}" href="/about">About</Link>
        </li>
         <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Orders'}" href="/orders">Orders</Link>
        </li>
         <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Reviews'}" href="/reviews">Reviews</Link>
        </li>

      </ul>
    </div>
  </div>
</nav>

    <section class="container bg-info p-4 rounded-4 mt-4">
        <slot />
        <footer class="text-center mt-3">
            Copyright &copy; 2022. All right reserved.
        </footer>
    
    </section>


</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<style scoped>
section {
    background-color: #fff;
    opacity: 1;
}

.selected {
  color:coral;
  font-weight: bold;
}
</style>