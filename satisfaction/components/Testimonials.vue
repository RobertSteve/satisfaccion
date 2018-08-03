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
                //"showModal": false
            }
        }
    }
</script>
<style>
    @import "https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700";
    @import "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css";
    @import "../../src/css/main.css";
    @import "../../src/css/style.css";
</style>