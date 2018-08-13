<template>
    <div>
        <div class="container-fluid mt-5">
            <div class="row">
                <testimonial-card v-for="card in cards" @openModal="openModal"
                    :testimonial-id="card"
                    :rating="card"
                    :winner-type="'direct_winner'"
                    :buyer-nick="'JUDWXQ'"
                    :buyer-name="'JUDITH GEOVANNA RAMOS AMONES'"
                    :buyer-membership-status="'Regular'"
                    :buyer-membership-code="745236"
                    :buyer-participations="1"
                    :buyer-adjudicated-lots="2"
                    :buyer-purchased-lots="1"
                    :buyer-funds-money="231"
                    :buyer-funds-credits="0"
                    :rejected-by="'Paul Vidal'"
                    :archived-at="'25D'"
                    :rejected-reason="'Absurdo'"
                ></testimonial-card>
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