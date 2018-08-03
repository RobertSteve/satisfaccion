<template>
    <div>
        <div class="container-fluid mt-5">
            <div class="row">
                <testimonial-card v-for="card in cards"></testimonial-card>
            </div>
        </div>
        <testimonial-modal v-if="showModal" @close="showModal = false"></testimonial-modal>
    </div>
</template>
<script>
    import TestimonialCard from './TestimonialCard';
    import TestimonialModal from './TestimonialModal';
    export default {
        name: 'testimonialsGrid',
        components: {
            TestimonialCard,
            TestimonialModal
        },
        data() {
            return {
                cards: [1,2,3,4],
                "showModal": false
            }
        }
    }
</script>
<style>

</style>