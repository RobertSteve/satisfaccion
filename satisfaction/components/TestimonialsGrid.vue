<template>
    <div class="container-fluid mt-5">
        <div class="row">
            <testimonial-card v-for="card in cards"></testimonial-card>
        </div>
    </div>    
</template>
<script>
    import TestimonialCard from './TestimonialCard';
    export default {
        name: 'testimonialsGrid',
        components: {
            TestimonialCard
        },
        data() {
            return {
                cards: [1,2,3,4]
            }
        }
    }
</script>
<style>

</style>