<template>
    <div class="modal-mask" id="testimonialModal">
        <div class="modal-wrapper">
            <div class="modal-container">
                <div class="modal-header d-flex flex-column align-items-center bg-turquoise-secondary p-5">
                    <span class="text-turquoise text-uppercase fs-30">Archivar</span>
                    <span>Selecciona el motivo y presiona el botón</span>
                </div>
                <div class="modal-body border-0">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Motivo:</label>
                        <select class="form-control" name="" id="" v-model="reason">
                            <option value="">Seleccionar</option>
                            <option v-for="reason in reasons" :value="reason.id">{{reason.description}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1 text-black-50">Otro Motivo:</label>
                        <textarea class="form-control" name="" id="" cols="30" rows="4" readonly></textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex flex-column">
                    <a name="" id="" class="btn btn-satisfaction bg-rosewood w-50 d-flex justify-content-center align-items-center text-white" role="button" data-toggle="modal" data-target="#exampleModal">
                        <span class="icon-archived fs-21"></span>
                    </a> 
                    <a class="btn btn-link" role="button" @click="closeModal()">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: 'testimonialModal',
        components:{
            //
        },
        data () {
            return {
                showModal: true,
                reasons: [],
                reason: 5
            }
        },
        methods:{
            listReason: function(){
                axios.get('https://5702bffc.ngrok.io/motivo').then((response) => {
                    this.reasons = response.data.data;
                    console.log(this.reasons);
                })
            },
            closeModal(){
                this.$emit("closeModal");
            }
        }, 
        mounted: function() {
            this.listReason();
        }
    }
</script>

<style>
    .modal-mask {
        position: fixed;
        z-index: 9998;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .5);
        display: table;
        transition: opacity .5s ease;
    }
    .modal-wrapper {
        display: table-cell;
        vertical-align: middle;
    }
    .modal-container {
        width: 500px;
        margin: 0px auto;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
        transition: all .5s ease;
    }

    .modal-header h3 {
        margin-top: 0;
        color: #42b983;
    }

    .modal-body {
        margin: 20px 0;
    }

    .modal-default-button {
        float: right;
    }

    /*
    * The following styles are auto-applied to elements with
    * transition="modal" when their visibility is toggled
    * by Vue.js.
    *
    * You can easily play with the modal transition by editing
    * these styles.
    */

    .modal-enter {
        opacity: 0;
    }

    .modal-leave-active {
        opacity: 0;
    }

    .modal-enter .modal-container,
    .modal-leave-active .modal-container {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
</style>
