const apicategory = new Vue({
    el: '#apicategory',
    data: {
        nombre: '',
        slug: '',
        div_mensajeslug:'Slug Existente',
        div_clase_slug: 'badge bg-danger',
        div_aparecer: false,
        deshabilitar_boton:1
    }, 
    computed: {
        generarSLug : function(){
            var char= {
                "á":"a","é":"e","í":"i","ó":"o","ú":"u",
                "Á":"A","É":"E","Í":"I","Ó":"O","Ú":"U",
                "ñ":"n","Ñ":"N"," ":"-","_":"-"
            }
            var expr = /[áéíóúÁÉÍÓÚÑñ_ ]/g;

            this.slug =  this.nombre.trim().replace(expr, function(e){
                return char[e]
            }).toLowerCase()

           return this.slug;
           //return this.nombre.trim().replace(/ /g,'-').toLowerCase()
        }
    },
    methods: {
        getCategory() {
            if (this.slug){
                let url = '/api/category/'+this.slug;
                axios.get(url).then(response => {
                this.div_mensajeslug = response.data;
                    if (this.div_mensajeslug==="Slug Disponible") {
                        this.div_clase_slug = 'badge bg-success';
                        this.deshabilitar_boton=0;
                    } else {
                        this.div_clase_slug = 'badge bg-danger';
                        this.deshabilitar_boton=1;
                    }
                    this.div_aparecer = true;

            })
            }else{
                this.div_clase_slug = 'badge bg-success';
                this.div_mensajeslug="Escribir etiqueta";
                this.deshabilitar_boton=1;
                this.div_aparecer = true;
            }
            
        }
    },
    mounted(){
        if (document.getElementById('editar').innerHTML){
            this.nombre = document.getElementById('nombretemp').innerHTML;
            this.deshabilitar_boton=0;
        }
    }

});