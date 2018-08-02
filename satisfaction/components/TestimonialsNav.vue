<template>
    <div class="container-fluid mt-5 bg-white panel-satisfaction" id="testimonialsNav">
        <div class="row my-5">
            <div class="col-12 col-md-3 col-lg-4 col-xl-4 d-flex flex-column justify-content-center pl-5 fs-36">
                <span>Satisfacción</span>
                <span class="font-weight-bold">VMC</span>
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
                    <div>725</div>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-4 col-xl-4 d-flex flex-column justify-content-center align-items-center p-0 mt-3">
                <div class="row w-100">
                    <div class="col-5">
                        <ul class="list-inline m-0 text-right star-5 d-flex flex-row-reverse">
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                        </ul>
                    </div>
                    <div class="col-5 progress p-0 mt-1 progress-bar-satisfaction" >

                        <div class="progress-bar bg-turquoise" role="progressbar" v-bind:style="{width: satisfaction.rating.details.stars_5.percentage}" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="col-2">
                        {{satisfaction.rating.details.stars_5.quantity}}
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col-5">
                        <ul class="list-inline m-0 text-right star-4 d-flex flex-row-reverse">
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                        </ul>
                    </div>
                    <div class="col-5 progress p-0 mt-1 progress-bar-satisfaction" >
                        <div class="progress-bar bg-turquoise-soft" role="progressbar" v-bind:style="{width: satisfaction.rating.details.stars_4.percentage}" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="col-2">
                        {{satisfaction.rating.details.stars_4.quantity}}
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col-5">
                        <ul class="list-inline m-0 text-right star-3 d-flex flex-row-reverse">
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                        </ul>
                    </div>
                    <div class="col-5 progress p-0 mt-1 progress-bar-satisfaction" >
                        <div class="progress-bar bg-turquoise-strong" role="progressbar" v-bind:style="{width: satisfaction.rating.details.stars_3.percentage}" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="col-2">
                        {{satisfaction.rating.details.stars_3.quantity}}
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col-5">
                        <ul class="list-inline m-0 text-right star-2 d-flex flex-row-reverse">
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                        </ul>
                    </div>
                    <div class="col-5 progress p-0 mt-1 progress-bar-satisfaction" >
                        <div class="progress-bar bg-orange" role="progressbar" v-bind:style="{width: satisfaction.rating.details.stars_2.percentage}" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="col-2">
                        {{satisfaction.rating.details.stars_2.quantity}}
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col-5">
                        <ul class="list-inline m-0 text-right star-1 d-flex flex-row-reverse">
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                            <li class="list-inline-item m-1 icon-star-fill"></li>
                        </ul>
                    </div>
                    <div class="col-5 progress p-0 mt-1 progress-bar-satisfaction" >
                        <div class="progress-bar bg-rosewood" role="progressbar" v-bind:style="{width: satisfaction.rating.details.stars_1.percentage}" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="col-2">
                        {{satisfaction.rating.details.stars_1.quantity}}
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100">            
            <div class="row">
                <ul class="nav nav-pills nav-fill navSatisfaction w-100">
                    <testimonials-nav-element nav-type="published" :total="reviews.published.total" :last_week="reviews.published.last_week"></testimonials-nav-element>
                    <testimonials-nav-element nav-type="approved" :total="reviews.approved.total" :last_week="reviews.approved.last_week"></testimonials-nav-element>
                    <testimonials-nav-element nav-type="suggestion" :total="reviews.suggestion.total" :last_week="reviews.suggestion.last_week"></testimonials-nav-element>
                    <testimonials-nav-element nav-type="archived" :total="reviews.archived.total" :last_week="reviews.archived.last_week"></testimonials-nav-element>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios';
    import TestimonialsNavElement from './TestimonialsNavElement';
    export default {
        name: 'testimonialsNav',
        components: {
            TestimonialsNavElement
        },
        data() {
            return {
                "satisfaction": {
                    "rating": {
                        "average": 4.4,
                        "descripcion": "MUY BUENO",
                        "details": {
                            "stars_5": {
                                "quantity": 469,
                                "percentage": "100%"
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
            sumaryVMC: function (){
                axios.get('http://0014d0f6.ngrok.io/jsondata').then((response) => {
                    this.satisfaction = response.data.data;
                    console.log(response)
                }, (error) => {
                    console.log(error);
                })
            }
        },
        mounted: function () {
            this.sumaryVMC()
        }
    }
</script>
<style>

</style>