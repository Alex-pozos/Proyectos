/*Creamos nuestra clase principal donde albergara los metodos que vamos a ocupar */
var App = /** @class */ (function () {
    function App() {
        /*Creamos las fields que nos van a servir para recibir los datos por medio del metodo document*/
        this.nombre = document.getElementById("nombre").value;
        this.sueldo_x_hora = parseFloat(document.getElementById("sueldo_x_hora").value);
        this.cantidad_h_trabajadas = parseFloat(document.getElementById("cantidad_h_trabajadas").value);
        this.cantidad_h_extras = parseFloat(document.getElementById("cantidad_h_extras").value);
    }
    /*Se crea el primer metodo que nos ayudara a calcular el sueldo base del empleado */
    App.prototype.calcularSueldoBase = function () {
        return this.sueldo_x_hora * this.cantidad_h_trabajadas;
    };
    /*En este segundo meotodo lo vamos a calcular si el empledo trabajo horas extras */
    App.prototype.calcularSueldoExtra = function () {
        var sueldo_base = this.calcularSueldoBase();
        var sueldo_extra = this.cantidad_h_extras * this.sueldo_x_hora;
        return sueldo_base + sueldo_extra;
    };
    /*Con el siguiente metodo vamos a colocar dentro de los input informacion que nos piden por medio del metodo documentyt */
    App.prototype.setResultados = function () {
        /*Con la siguiente condicional lo que se esta realizando es una pregunta si el empleado escribio que trabajo horas extras o no
        Por ejemplo: aca el empleado no trabajo horas extras  */
        if (this.cantidad_h_extras == 0) {
            /*Solo colocamos los datos del sueldo base mas los impuestos */
            var sueldo_base = this.calcularSueldoBase();
            var impuesto = sueldo_base * .16;
            var sueldo_neto = sueldo_base - impuesto;
            var nombre = this.nombre;
            document.getElementById("nombre2").value = nombre;
            document.getElementById("sueldo_base").value = sueldo_base.toString();
            document.getElementById("impuesto").value = impuesto.toString();
            document.getElementById("sueldo_neto").value = sueldo_neto.toString();
            /*Si el empleado trabajo horas extras calcularemos con el metodo horas extras y lo mandaremos por medio del metodo document.get */
        }
        else if (this.cantidad_h_extras > 0) {
            var sueldo_base = this.calcularSueldoExtra();
            var impuesto = sueldo_base * .16;
            var sueldo_neto = sueldo_base - impuesto;
            var nombre = this.nombre;
            document.getElementById("nombre2").value = nombre;
            document.getElementById("sueldo_base").value = sueldo_base.toString();
            document.getElementById("impuesto").value = impuesto.toString();
            document.getElementById("sueldo_neto").value = sueldo_neto.toString();
        }
    };
    return App;
}());
/*Creamos la funcion que nos ayudara a calcular por medio de los metodos la informacion ya recopilada */
function calcular() {
    var objeto = new App();
    var nombre = document.getElementById("nombre").value;
    var sueldo_x_hora = document.getElementById("sueldo_x_hora").value;
    var cantidad_h_trabajadas = document.getElementById("cantidad_h_trabajadas").value;
    var cantidad_h_extras = document.getElementById("cantidad_h_extras").value;
    /*Con las siguientes condicionales lo que se esta haciendo es preguntar si esta o vacio o no el campo para que lo llene  */
    if (nombre == "") {
        alert("Debes ingresar tu nombre");
        return false;
    }
    else if (sueldo_x_hora == "") {
        alert("Debes ingresar el sueldo por hora");
        return false;
    }
    else if (cantidad_h_trabajadas == "") {
        alert("Debes ingresar la cantidad de horas trabajadas");
        return false;
    }
    else if (cantidad_h_extras == "") {
        alert("Debes ingresar la cantidad de horas extras o poner un 0");
        return false;
    }
    objeto.setResultados();
}
/*Por ultimo con esta funcion limpiamos todas las variables si hay algo escrito en ellas */
function limpiar() {
    document.getElementById("nombre").value = "";
    document.getElementById("sueldo_x_hora").value = "";
    document.getElementById("cantidad_h_trabajadas").value = "";
    document.getElementById("cantidad_h_extras").value = "";
    document.getElementById("nombre2").value = "";
    document.getElementById("sueldo_base").value = "";
    document.getElementById("impuesto").value = "";
    document.getElementById("sueldo_neto").value = "";
}
