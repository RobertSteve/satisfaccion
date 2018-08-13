<template>
    <div class="row w-100" @click="click" :class="filter == rating ? 'filtered' : (filter == null ? '' : 'unfiltered')">
        <div class="col-5">
            <ul class="list-inline m-0 text-right d-flex flex-row-reverse" :class="'star-'+rating">
                <li class="list-inline-item m-1 icon-star-fill"></li>
                <li class="list-inline-item m-1 icon-star-fill"></li>
                <li class="list-inline-item m-1 icon-star-fill"></li>
                <li class="list-inline-item m-1 icon-star-fill"></li>
                <li class="list-inline-item m-1 icon-star-fill"></li>
            </ul>
        </div>
        <div class="col-5 progress p-0 mt-1 progress-bar-satisfaction" >
            <div class="progress-bar" :class="bgColor" role="progressbar" v-bind:style="{width: percentage}" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="col-2">
            {{ count }}
        </div>
    </div>    
</template>

<script>
    export default {
        name: 'ratingRow',
        props:{
            filter: {
                default: null
            },
            rating: {
                type: Number,
                default: 1
            },
            count: {
                type: Number,
                default: 0
            },
            percentage: {
                type: Number,
                default: 0
            },
        },
        methods:{
            click: function (e) {this.$emit('click', e)},
        },
        computed: {
            bgColor() {
                var color = "";
                switch(this.rating)
                {
                    case 1:
                        color = 'bg-rosewood';
                        break;
                    case 2:
                        color = 'bg-orange';
                        break;
                    case 3:
                        color = 'bg-turquoise-strong';
                        break;
                    case 4:
                        color = 'bg-turquoise-soft';
                        break;
                    default:
                        color = 'bg-turquoise';
                        break;
                }
                return color;
            }
        }
    }
</script>

<style>
    
</style>