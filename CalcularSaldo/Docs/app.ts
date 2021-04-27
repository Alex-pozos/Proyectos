/*Creamos nuestra clase principal donde albergara los metodos que vamos a ocupar */
class App{
    /*Creamos las fields que nos van a servir para recibir los datos por medio del metodo document*/
    public nombre:string = (<HTMLInputElement>document.getElementById("nombre")).value;
    public sueldo_x_hora:number = parseFloat((<HTMLInputElement>document.getElementById("sueldo_x_hora")).value);
    public cantidad_h_trabajadas:number = parseFloat((<HTMLInputElement>document.getElementById("cantidad_h_trabajadas")).value);
    public cantidad_h_extras:number = parseFloat((<HTMLInputElement>document.getElementById("cantidad_h_extras")).value);
    /*Se crea el primer metodo que nos ayudara a calcular el sueldo base del empleado */
    public calcularSueldoBase():number{
        return this.sueldo_x_hora * this.cantidad_h_trabajadas;
    }
    /*En este segundo meotodo lo vamos a calcular si el empledo trabajo horas extras */
    public calcularSueldoExtra():number{
        let sueldo_base = this.calcularSueldoBase();
        let sueldo_extra = this.cantidad_h_extras * this.sueldo_x_hora;
        return sueldo_base + sueldo_extra;
    }
    /*Con el siguiente metodo vamos a colocar dentro de los input informacion que nos piden por medio del metodo documentyt */
    public setResultados(){
        /*Con la siguiente condicional lo que se esta realizando es una pregunta si el empleado escribio que trabajo horas extras o no 
        Por ejemplo: aca el empleado no trabajo horas extras  */
        if(this.cantidad_h_extras == 0){
            /*Solo colocamos los datos del sueldo base mas los impuestos */
            let sueldo_base = this.calcularSueldoBase();
            let impuesto = sueldo_base * .16;
            let sueldo_neto = sueldo_base - impuesto;
            let nombre = this.nombre;
            (<HTMLInputElement>document.getElementById("nombre2")).value = nombre;
            (<HTMLInputElement>document.getElementById("sueldo_base")).value = sueldo_base.toString();
            (<HTMLInputElement>document.getElementById("impuesto")).value = impuesto.toString();
            (<HTMLInputElement>document.getElementById("sueldo_neto")).value = sueldo_neto.toString();
            /*Si el empleado trabajo horas extras calcularemos con el metodo horas extras y lo mandaremos por medio del metodo document.get */
        }else if(this.cantidad_h_extras > 0){
            let sueldo_base = this.calcularSueldoExtra();
            let impuesto = sueldo_base * .16;
            let sueldo_neto = sueldo_base - impuesto;
            let nombre = this.nombre;
            (<HTMLInputElement>document.getElementById("nombre2")).value = nombre;
            (<HTMLInputElement>document.getElementById("sueldo_base")).value = sueldo_base.toString();
            (<HTMLInputElement>document.getElementById("impuesto")).value = impuesto.toString();
            (<HTMLInputElement>document.getElementById("sueldo_neto")).value = sueldo_neto.toString();
        }
    }
}
/*Creamos la funcion que nos ayudara a calcular por medio de los metodos la informacion ya recopilada */
function calcular(){
    let objeto = new App();
    let nombre = (<HTMLInputElement>document.getElementById("nombre")).value;
    let sueldo_x_hora = (<HTMLInputElement>document.getElementById("sueldo_x_hora")).value;
    let cantidad_h_trabajadas = (<HTMLInputElement>document.getElementById("cantidad_h_trabajadas")).value;
    let cantidad_h_extras = (<HTMLInputElement>document.getElementById("cantidad_h_extras")).value;
    /*Con las siguientes condicionales lo que se esta haciendo es preguntar si esta o vacio o no el campo para que lo llene  */
    if (nombre == "") {
        alert("Debes ingresar tu nombre");
        return false;
    }else if(sueldo_x_hora == ""){
        alert("Debes ingresar el sueldo por hora");
        return false;
    }else if(cantidad_h_trabajadas == ""){
        alert("Debes ingresar la cantidad de horas trabajadas");
        return false;
    }else if(cantidad_h_extras == ""){
        alert("Debes ingresar la cantidad de horas extras o poner un 0");
        return false;
    }
    objeto.setResultados();
}
/*Por ultimo con esta funcion limpiamos todas las variables si hay algo escrito en ellas */
function limpiar(){
    (<HTMLInputElement>document.getElementById("nombre")).value = "";
    (<HTMLInputElement>document.getElementById("sueldo_x_hora")).value = "";
    (<HTMLInputElement>document.getElementById("cantidad_h_trabajadas")).value = "";
    (<HTMLInputElement>document.getElementById("cantidad_h_extras")).value = "";
    (<HTMLInputElement>document.getElementById("nombre2")).value = "";
    (<HTMLInputElement>document.getElementById("sueldo_base")).value = "";
    (<HTMLInputElement>document.getElementById("impuesto")).value = "";
    (<HTMLInputElement>document.getElementById("sueldo_neto")).value = "";
}