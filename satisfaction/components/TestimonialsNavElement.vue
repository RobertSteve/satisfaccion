<template>
    <li @click="click" class="nav-item nav-item-satisfaction d-flex flex-column justify-content-center align-items-center" :class="active ? 'activate' : ''" ><!--@click="selectionOption(navType)" -->
        <div class="position-relative" :class="[icon, fs]">
            <span class="badge badge-satisfaction text-center" :class="badge" v-show="last_week > 0">{{ last_week }}</span>
        </div>
        <div class="mb-1 fs-14">{{ title }}</div>
        <div class="font-weight-bold fs-36 lh-25">{{ total }}</div>
    </li>
</template>
<script>
    export default {
        props:{
            navType: {
                type: String,
                required: true
            },
            total: {
                type: Number,
                default: 0
            },
            last_week: {
                type: Number,
                default: 0
            },
            active: {
                type: Boolean,
                default: true
            }
        },
        name: 'testimonialsNavElement',
        components: {
            //
        },
        data() {
            return {
                title: '',
                badge: '',
                fs: ''
            }
        },
        methods:{
            click: function (e) {this.$emit('click', e)},
            selectionOption: function(option){
                this.$emit("navSelected", option);
            }
        },
        computed: {
            icon: function () {
                var icon = '';
                switch(this.navType) {
                    case 'published':
                        icon = 'icon-star';
                        this.title = 'Publicados'; 
                        this.fs = 'fs-30';                     
                        break;                    
                    case 'approved':
                        icon = 'icon-check';
                        this.title = 'Aprobados';
                        this.fs = 'fs-26'; 
                        break;
                    case 'suggestion':
                        icon = 'icon-email';
                        this.title = 'Sugerencias';
                        this.badge = 'badge-satisfaction--suggestion';
                        this.fs = 'fs-32'; 
                        break;
                    case 'archived':
                        icon = 'icon-archived';
                        this.title = 'Archivados';
                        this.fs = 'fs-30'; 
                        break;
                }
                return icon;
            }
        }
    }
</script>
<style>

</style>