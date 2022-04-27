import Vue from 'vue'
const confirmareliminar = new Vue({
    el: '#confirmareliminar',
    data: {
        urlaeliminar: ''
    }, 
    
    methods: {
        deseas_eliminar(id) {
            this.urlaeliminar =document.getElementById('urlbase').innerHTML+'/'+id;
            $('#modal_eliminar').modal('show');
        }
    },

});