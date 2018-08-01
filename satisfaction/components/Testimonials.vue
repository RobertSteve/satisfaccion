<template>
    <div class="container-fluid pt-5">
        <testimonials-nav></testimonials-nav>
        <testimonials-grid></testimonials-grid>
    </div>
</template>
<script>
    import TestimonialsNav from './TestimonialsNav';
    import TestimonialsGrid from './TestimonialsGrid';
    export default {
        name: 'testimonials',
        components: {
            TestimonialsNav,
            TestimonialsGrid
        },
        data() {
            return {
                //
            }
        }
    }
</script>
<style>
    @import "../../src/css/main.css";
    @import "../../src/css/style.css";
</style>