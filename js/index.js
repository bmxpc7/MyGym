var app = new Vue({
    el: '#app',
    data: {
        message: 'Mi Gym ',
        rutinas: [],
        rutina: ""
    },
    methods: {
        agregarRutina() {
            this.rutinas.push({
                rutina: this.rutina,
                estado: false
            });
            this.rutina = '';
            localStorage.setItem('Gym-Vue', JSON.stringify(this.rutinas))
        },
        ModificarStatus(index) {
            this.rutinas[index].estado = true;
            localStorage.setItem('Gym-Vue', JSON.stringify(this.rutinas))
        },
        eliminar(index) {
            this.rutinas.splice(index, 1)
            localStorage.setItem('Gym-Vue', JSON.stringify(this.rutinas))
        }
    },
    created() {
        let datosDB = JSON.parse(localStorage.getItem('Gym-Vue'));
        if (datosDB === null) {
            this.rutinas = [];
        } else {
            this.rutinas = datosDB;
        }
    }
})