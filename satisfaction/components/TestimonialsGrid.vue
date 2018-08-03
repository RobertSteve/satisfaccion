<template>
    <div>
        <div class="container-fluid mt-5">
            <div class="row">
                <testimonial-card v-for="card in cards" @openModal="openModal"></testimonial-card>
            </div>
        </div>
        <testimonial-modal v-if="showModal" @closeModal="closeModal"></testimonial-modal><!--@close="showModal = false"-->
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
                showModal: false
            }
        },
        methods: {
            openModal(){
                this.showModal = true;
            },
            closeModal(){
                this.showModal = false;
            }
        }

    }
</script>
<style>

</style>