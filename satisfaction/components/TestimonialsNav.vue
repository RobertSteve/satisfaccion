<template>
    <div class="container-fluid mt-5 bg-white panel-satisfaction" id="testimonialsNav">
        <div class="row my-5">
            <div class="col-12 col-md-3 col-lg-4 col-xl-4 d-flex flex-column justify-content-center pl-5 fs-36">
                <span>Satisfacción</span>
                <span class="font-weight-bold">{{ owner }}</span>
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex flex-column justify-content-center align-items-center">
                <span class="fs-90 ls-5 lh-120">{{satisfaction.rating.average}}</span>
                <span class="text-uppercase">{{satisfaction.rating.descripcion}}</span>
                <div class="d-flex justify-content-center">
                    <div class="mr-2">
                        <ul class="list-inline m-0 text-right star-4 fs-18">
                            <li class="list-inline-item mr-1 icon-star-fill"></li>
                            <li class="list-inline-item mr-1 icon-star-fill"></li>
                            <li class="list-inline-item mr-1 icon-star-fill"></li>
                            <li class="list-inline-item mr-1 icon-star-fill"></li>
                            <li class="list-inline-item mr-1 icon-star-fill"></li>
                        </ul>
                    </div>
                    <div>{{satisfaction.rating.total}}</div>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-4 col-xl-4 d-flex flex-column justify-content-center align-items-center p-0 mt-3" id="filterStar">
                <rating-row @click="filterOnlyRating(5)" :filter="ratingFiltered" :rating="5" :count="satisfaction.rating.details.stars_5.quantity" :percentage="satisfaction.rating.details.stars_5.percentage"></rating-row> 
                <rating-row @click="filterOnlyRating(4)" :filter="ratingFiltered" :rating="4" :count="satisfaction.rating.details.stars_4.quantity" :percentage="satisfaction.rating.details.stars_4.percentage"></rating-row> 
                <rating-row @click="filterOnlyRating(3)" :filter="ratingFiltered" :rating="3" :count="satisfaction.rating.details.stars_3.quantity" :percentage="satisfaction.rating.details.stars_3.percentage"></rating-row> 
                <rating-row @click="filterOnlyRating(2)" :filter="ratingFiltered" :rating="2" :count="satisfaction.rating.details.stars_2.quantity" :percentage="satisfaction.rating.details.stars_2.percentage"></rating-row> 
                <rating-row @click="filterOnlyRating(1)" :filter="ratingFiltered" :rating="1" :count="satisfaction.rating.details.stars_1.quantity" :percentage="satisfaction.rating.details.stars_1.percentage"></rating-row>               
            </div>
        </div>
        <div class="w-100">            
            <div class="row">
                <ul class="nav nav-pills nav-fill navSatisfaction w-100">
                    <testimonials-nav-element nav-type="published" :total="reviews.published.total" :last_week="reviews.published.last_week" v-on:click="activateNav('published')" :active="activeNav == 'published'"></testimonials-nav-element><!--@navSelected="navSelected"-->
                    <testimonials-nav-element nav-type="approved" :total="reviews.approved.total" :last_week="reviews.approved.last_week"  v-on:click="activateNav('approved')" :active="activeNav == 'approved'"></testimonials-nav-element><!--@navSelected="navSelected"-->
                    <testimonials-nav-element nav-type="suggestion" :total="reviews.suggestion.total" :last_week="reviews.suggestion.last_week"  v-on:click="activateNav('suggestion')" :active="activeNav == 'suggestion'"></testimonials-nav-element><!--@navSelected="navSelected"-->
                    <testimonials-nav-element nav-type="archived" :total="reviews.archived.total" :last_week="reviews.archived.last_week"  v-on:click="activateNav('archived')" :active="activeNav == 'archived'"></testimonials-nav-element><!--@navSelected="navSelected"-->
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios';
    import TestimonialsNavElement from './TestimonialsNavElement';
    import RatingRow from './RatingRow';
    export default {
        name: 'testimonialsNav',
        components: {
            TestimonialsNavElement,
            RatingRow
        },
        props: {
            owner: {
                type: String,
                default: 'VMC',
            }
        },
        watch: {
            //
        },
        data() {
            return {
                "ratingFiltered": null,
                "activeNav": "published",
                "satisfaction": {
                    "rating": {
                        "average": 4.4,
                        "descripcion": "MUY BUENO",
                        "total": 765,
                        "details": {
                            "stars_5": {
                                "quantity": 469,
                                "percentage": 100
                            },
                            "stars_4": {
                                "quantity": 193,
                                "percentage": 41.15
                            },
                            "stars_3": {
                                "quantity": 117,
                                "percentage": 24.95
                            },
                            "stars_2": {
                                "quantity": 4,
                                "percentage": 0.85
                            },
                            "stars_1": {
                                "quantity": 8,
                                "percentage": 1.71
                            }
                        }
                    }
                },
                "experience": null,
                "reviews": {
                    "published": {
                        "total": 96,
                        "last_week": 0
                    },
                    "approved": {
                        "total": 695,
                        "last_week": 40
                    },
                    "suggestion": {
                        "total": 6,
                        "last_week": 15
                    },
                    "archived": {
                        "total": 77,
                        "last_week": 0
                    }
                }
            }
        },
        methods:{
            filterOnlyRating(rating) {                
                if (rating == this.ratingFiltered) {
                    this.ratingFiltered = null;
                }else {
                    this.ratingFiltered = rating;
                }
                this.getTestimonials();
            },
            activateNav(nav) {
                if (nav != this.activeNav) {
                    this.activeNav = nav;
                    this.ratingFiltered = null;
                    this.getTestimonials();
                }
            },
            getSummary: function (){
                console.log('getSummary')
                axios.get('https://5702bffc.ngrok.io/summary').then((response) => {
                    this.satisfaction = response.data.data;
                    console.log(response.data.data)
                    this.getTestimonials();
                }, (error) => {
                    console.log(error);
                })
            },
            getTestimonials: function (){
                console.log('getTestimonials')
                axios.get('https://5702bffc.ngrok.io/jsondata?'+this.activeNav).then((response) => {
                    //this.satisfaction = response.data.data;
                    console.log(response)
                }, (error) => {
                    console.log(error);
                })
            }
        },
        mounted: function () {
            this.getSummary()
        }
    }
</script>
<style>

</style>