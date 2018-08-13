<template>
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mb-5 px-2">
        <div class="card card-satisfaction" :class="'card-satisfaction--' + type">
        
            <div class="card-body bg-amour py-4" v-show="type == 'archived'">
                <div class="row">
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <span class="icon-binder fs-48 text-rosewood"></span>
                    </div>
                    <div class="col-10 d-flex flex-column justify-content-center fs-13">
                        <span>{{ rejectedBy }}</span>
                        <span>{{ archivedAt ? 'Hace ' + archivedAt : '' }}</span>
                        <span>{{ rejectedReason }}</span>
                    </div>
                </div>
            </div>

            <div class="card-img-top card-img-satisfaction" style="background-image: url('src/img/P2000172.jpg')">
                <div class="text-white car-img-satisfaction-content">
                    <div class="row px-3 h-100">
                        <div class="col-8 col-sm-9 col-md-9 col-lg-9 col-xl-9 d-flex flex-column justify-content-center">
                            <div class="fs-21">
                                <ul class="list-inline m-0 text-gray" :class="'star-'+rating">
                                    <li class="list-inline-item mr-1 icon-star-fill"></li>
                                    <li class="list-inline-item mr-1 icon-star-fill"></li>
                                    <li class="list-inline-item mr-1 icon-star-fill"></li>
                                    <li class="list-inline-item mr-1 icon-star-fill"></li>
                                    <li class="list-inline-item mr-1 icon-star-fill"></li>
                                </ul>
                            </div>
                            <div class="text-uppercase font-weight-bold fs-18">
                                TOYOTA HILUX 2010
                            </div>
                            <div class="text-uppercase font-weight-bold fs-15">
                                APQ242
                            </div>
                            <div class="fs-15">
                                PACÍFICO - US$ 16,584
                            </div>
                        </div>
                        <div class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3 d-flex flex-column align-items-end justify-content-end fs-15 position-relative pl-4">
                            <div class="position-absolute icon-top bg-turquoise d-flex justify-content-center align-items-center" style="top: 0; left: 25px">
                                <span class="icon-laptop fs-25"></span>
                                <span class="icon-smartphone fs-18 d-none"></span>
                                <span class="icon-laptop-smartphone fs-25 d-none"></span>
                            </div>
                            <div class="icon-eye mb-3 w-100 text-turquoise fs-18">
                                <span class="text-white font-weight-bold fs-15 lh-18 ml-1">40</span> 
                            </div>                                           
                            <div class="icon-play mb-3 w-100 text-turquoise fs-18">                                                 
                                <span class="text-white font-weight-bold fs-15 lh-18 ml-1">12</span> 
                            </div>
                            <div class="icon-calendar mb-3 w-100 text-turquoise fs-18 d-none">                                                 
                                <span class="text-white font-weight-bold fs-15 lh-18 ml-1">24 D</span> 
                            </div>
                            <div class="icon-calendar-clock mb-3 w-100 text-turquoise fs-18">                                                 
                                <span class="text-white font-weight-bold fs-15 lh-18 ml-1">24 D</span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text fs-14 lh-24">Fue muy interesante y emopcionante, creo que la plataforma virtual que manejan es excelente, ahora espero culminar satisfactoriamente el proceso de pago cuanto antes. Felicitaciones y seguiremos usando esta plataforma para otras compras.</p>
            </div>
            <div class="card-body border-top fs-13 bg-white">
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex flex-fill flex-column justify-content-center align-items-center">
                        <span class="icon icon-cup mb-1 fs-30" v-show="winnerType == 'direct_winner'"></span>
                        <span class="icon icon-medal mb-1 fs-30" v-show="winnerType == 'best_bidder'"></span>
                        <span class="font-weight-bold fs-18 text-turquoise">{{ buyerNick }}</span>
                        <span class="" style="line-height: 7px">{{ buyerMembershipStatus }}</span>
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 border-left d-flex flex-fill flex-column justify-content-center align-items-center">
                        <div class="row w-100 mb-1">
                            <div class="col p-0">
                                {{ buyerName }}
                                <span class="font-weight-bold">&#8226; {{ buyerMembershipCode }}</span>
                            </div>
                        </div>
                        <div class="row w-100 mb-1">
                            <div class="col text-left p-0">
                                <span class="icon-people fs-16"></span>
                                {{ buyerParticipations }}
                            </div>
                            <div class="col text-center p-0">
                                <span class="icon-auto-check fs-16"></span>
                                {{ buyerAdjudicatedLots }}
                            </div>
                            <div class="col text-right p-0">
                                <span class="icon-auto-coin fs-16"></span>
                                {{ buyerPurchasedLots }}
                            </div>
                        </div>
                        <div class="row w-100 mb-1">
                            <div class="col-5 text-left p-0">
                                <span class="icon-moneybag fs-16"></span>
                                US$ {{ buyerFundsMoney }}
                            </div>
                            <div class="col-7 text-right p-0">
                                <span class="icon-card fs-14"></span>&nbsp;
                                <span class="icon-vmc-credit fs-13"></span>
                                {{ buyerFundsCredits }}
                            </div>
                        </div>    
                    </div>
                </div>
            </div>

            <div class="car-body border-top">
                <div class="row m-0">
                    <div class="col text-center bg-turquoise-secondary fs-13 py-1 cursor-pointer" v-show="testimonialId != 1">
                        <span class="icon-link mr-1 fs-16"></span>
                        Copiar URL del Replay
                    </div>
                    <div class="col text-center bg-turquoise-secondary fs-13 py-1" v-show="testimonialId == 1">
                        &nbsp;
                    </div>
                </div>
            </div>

            <div class="card-footer bg-white" v-show="type != 'archived'">
                <div class="row">
                    <div class="col" v-show="type == 'published'">
                        <a name="" id="" class="btn btn-satisfaction bg-purple w-100 d-flex justify-content-center align-items-center text-white" href="#" role="button">
                            <span class="icon-download-img fs-21"></span>
                        </a>
                    </div>
                    <div class="col" v-show="type == 'published'">
                        <a name="" id="" class="btn btn-satisfaction bg-rosewood w-100 d-flex justify-content-center align-items-center text-white" href="#" role="button">
                            <span class="icon-star-crossed-out fs-21"></span>
                        </a>                                      
                    </div>
                    <div class="col" v-show="type == 'approved'">
                        <a name="" id="" class="btn btn-satisfaction bg-orange w-100 d-flex justify-content-center align-items-center text-white" href="#" role="button">
                            <span class="icon-star fs-21"></span>
                        </a>
                    </div>
                    <div class="col" v-show="type == 'suggestion'">
                        <a name="" id="" class="btn btn-satisfaction bg-turquoise w-100 d-flex justify-content-center align-items-center text-white" href="#" role="button">
                            <span class="icon-check fs-21"></span>
                        </a>
                    </div>
                    <div class="col" v-show="type == 'approved' || type == 'suggestion'">
                        <a class="btn btn-satisfaction bg-rosewood w-100 d-flex justify-content-center align-items-center text-white" v-on:click="openModal()">
                            <span class="icon-archived fs-21"></span>
                        </a>                                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'testimonialCard',
        components: {
            //
        },
        props:{
            type: {
                type: String,
                default: 'published'
            },
            testimonialId: {
                type: Number
            },
            rating: {
                type: Number
            },
            winnerType: {
                type: String
            },
            buyerNick: {
                type: String
            },
            buyerName: {
                type: String
            },
            buyerMembershipStatus: {
                type: String
            },
            buyerMembershipCode: {
                type: Number
            },
            buyerParticipations: {
                type: Number
            },
            buyerAdjudicatedLots: {
                type: Number
            },
            buyerPurchasedLots: {
                type: Number
            },
            buyerFundsMoney: {
                type: Number
            },
            buyerFundsCredits: {
                type: Number
            },
            rejectedBy: {
                type: String
            },
            archivedAt: {
                type: String
            },
            rejectedReason: {
                type: String
            },
        },
        data() {
            return {
                //
            }
        },
        methods:{
            openModal(){
                this.$emit("openModal");
            }
        }

    }
</script>
<style>
    
</style>