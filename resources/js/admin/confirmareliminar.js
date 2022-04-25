
const confirmareliminar = new Vue({
    el: '#confirmareliminar',
    data: {
        nombre: '',
    },
    methods: {
        deseas_eliminar(id) {
            //alert(id);
            this.urlaeliminar =document.getElementById('urlbase').innerHTML+'/'+id;
            $('#modal_eliminar').modal('show');
        }
    },

});