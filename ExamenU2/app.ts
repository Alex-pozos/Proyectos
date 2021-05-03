class App2{
    public sueldo:number = parseFloat((<HTMLInputElement>document.getElementById("sueldo")).value);
    public edad:number = parseFloat((<HTMLInputElement>document.getElementById("edad")).value);
    public sexo:any = (<HTMLInputElement>document.getElementById("select_sex")).value;
    public nacionalidad:any = (<HTMLInputElement>document.getElementById("nacionalidad")).value;
    public curso_php:any = (<HTMLInputElement>document.getElementById("php")).checked;
    public curso_asp:any = (<HTMLInputElement>document.getElementById("asp")).checked;
    public curso_vb:any = (<HTMLInputElement>document.getElementById("vb")).checked;
    public curso_java:any = (<HTMLInputElement>document.getElementById("java")).checked;
    public curso_oracle:any = (<HTMLInputElement>document.getElementById("oracle")).checked;
    public curso_bd:any = (<HTMLInputElement>document.getElementById("bd")).checked;
    public radio_btn1:any = (<HTMLInputElement>document.getElementById("1_5")).checked;
    public radio_btn2:any = (<HTMLInputElement>document.getElementById("6_10")).checked;
    public radio_btn3:any = (<HTMLInputElement>document.getElementById("mas_10")).checked;

    public validacheck():number{        
        if (this.curso_php) {
            this.curso_php = 20;
        }if (this.curso_asp) {
            this.curso_asp = 40;
        }if (this.curso_vb) {
            this.curso_vb = 55;
        }if (this.curso_java) {
            this.curso_java = 35;
        }if (this.curso_oracle) {
            this.curso_oracle = 60;
        }if (this.curso_bd) {
            this.curso_bd = 15;
        }
        return this.curso_php+this.curso_asp+this.curso_vb+this.curso_java+this.curso_oracle+this.curso_bd;
    }
    public validaRadio():number{
        if (this.radio_btn1) {
            this.radio_btn1 = 1;
        }if (this.radio_btn2) {
            this.radio_btn2 = 2;
        }if (this.radio_btn3) {
            this.radio_btn3 = 3;
        }
        return this.radio_btn1+this.radio_btn2+this.radio_btn3;
    }
    public calcularSueldo():number{
        let porcentaje = this.sueldo * 0.15;
        return porcentaje;
    }
    public aumentoMujer():number{
        let aumentoMujer = this.sueldo * 0.03;
        return aumentoMujer;
    }
    public aumentoEdad():number{
        let aumentoEdad = this.sueldo * 0.02;
        return aumentoEdad;
    }
    public quitarPorNac():number{
        let quitar = this.sueldo * 0.05;
        return quitar;
    }
    public aumento1_5():number{
        let aumento1 = this.sueldo * 0.05;
        return aumento1;
    }
    public aumento6_10():number{
        let aumento2 = this.sueldo * 0.10;
        return aumento2;
    }
    public aumento_10():number{
        let aumento3 = this.sueldo * 0.15;
        return aumento3;
    }
    public calcularCostoH():number{
        let calcularcostoh = this.validacheck() * 3;
        return calcularcostoh;
    }
    public setBono(){
        let genero = this.sexo;
        let edad = this.edad;
        let nacionalidad = this.nacionalidad;
        let validacheck = this.validacheck();
        let validaradio = this.validaRadio();
        let porcentaje = this.calcularSueldo();

        if (genero == "femenino") {
            let aumentogenero = porcentaje + this.aumentoMujer();
            if (edad > 45 ) {
                let aumentoedad = aumentogenero + this.aumentoEdad();
                if (nacionalidad == "extranjero") {
                    let quita = aumentoedad - this.quitarPorNac(); 
                    if (validaradio == 1) {
                        let aumento01 = quita + this.aumento1_5();
                        if (validacheck > 0) {
                            let aumentohoras = aumento01 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento01.toString();
                        }                
                    }else if (validaradio == 2) {
                        let aumento02 = quita + this.aumento6_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento02 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento02.toString();
                        }
                    }else if (validaradio == 3) {
                        let aumento03 = quita + this.aumento_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento03 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento03.toString();
                        }
                    }
                }else if (nacionalidad == "nacional") {
                    let aumentoedad = aumentogenero + this.aumentoEdad();
                    if (validaradio == 1) {
                        let aumento01 = aumentoedad + this.aumento1_5();
                        if (validacheck > 0) {
                            let aumentohoras = aumento01 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento01.toString();
                        }                
                    }else if (validaradio == 2) {
                        let aumento02 = aumentoedad + this.aumento6_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento02 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento02.toString();
                        }
                    }else if (validaradio == 3) {
                        let aumento03 = aumentoedad + this.aumento_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento03 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento03.toString();
                        }
                    }
                }
            }else if (edad < 45) {
                if (nacionalidad == "extranjero") {
                    let quita = aumentogenero - this.quitarPorNac(); 
                    if (validaradio == 1) {
                        let aumento01 = quita + this.aumento1_5();
                        if (validacheck > 0) {
                            let aumentohoras = aumento01 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento01.toString();
                        }  
                    }else if (validaradio == 2) {
                        let aumento02 = quita + this.aumento6_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento02 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento02.toString();
                        }
                    }else if (validaradio == 3) {
                        let aumento03 = quita + this.aumento_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento03 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento03.toString();
                        }
                    }              
                }else if (nacionalidad == "nacional") {
                    let aumentoedad = aumentogenero + this.aumentoEdad();
                    if (validaradio == 1) {
                        let aumento01 = aumentoedad + this.aumento1_5();
                        if (validacheck > 0) {
                            let aumentohoras = aumento01 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento01.toString();
                        }                
                    }else if (validaradio == 2) {
                        let aumento02 = aumentoedad + this.aumento6_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento02 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento02.toString();
                        }
                    }else if (validaradio == 3) {
                        let aumento03 = aumentoedad + this.aumento_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento03 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento03.toString();
                        }
                    }
                }
            }
        }else if (genero = "masculino") {
            if (edad > 45 ) {
                let aumentoedad = porcentaje + this.aumentoEdad();
                if (nacionalidad == "extranjero") {
                    let quita = aumentoedad - this.quitarPorNac(); 
                    if (validaradio == 1) {
                        let aumento01 = quita + this.aumento1_5();
                        if (validacheck > 0) {
                            let aumentohoras = aumento01 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento01.toString();
                        }                
                    }else if (validaradio == 2) {
                        let aumento02 = quita + this.aumento6_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento02 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento02.toString();
                        }
                    }else if (validaradio == 3) {
                        let aumento03 = quita + this.aumento_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento03 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento03.toString();
                        }
                    }
                }else if (nacionalidad == "nacional") {
                    let aumentoedad = porcentaje + this.aumentoEdad();
                    if (validaradio == 1) {
                        let aumento01 = aumentoedad + this.aumento1_5();
                        if (validacheck > 0) {
                            let aumentohoras = aumento01 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento01.toString();
                        }                
                    }else if (validaradio == 2) {
                        let aumento02 = aumentoedad + this.aumento6_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento02 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento02.toString();
                        }
                    }else if (validaradio == 3) {
                        let aumento03 = aumentoedad + this.aumento_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento03 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento03.toString();
                        }
                    }
                }
            }else if (edad < 45) {
                if (nacionalidad == "extranjero") {
                    let quita = porcentaje - this.quitarPorNac(); 
                    if (validaradio == 1) {
                        let aumento01 = quita + this.aumento1_5();
                        if (validacheck > 0) {
                            let aumentohoras = aumento01 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento01.toString();
                        }  
                    }else if (validaradio == 2) {
                        let aumento02 = quita + this.aumento6_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento02 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento02.toString();
                        }
                    }else if (validaradio == 3) {
                        let aumento03 = quita + this.aumento_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento03 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento03.toString();
                        }
                    }              
                }else if (nacionalidad == "nacional") {
                    let aumentoedad = porcentaje + this.aumentoEdad();
                    if (validaradio == 1) {
                        let aumento01 = aumentoedad + this.aumento1_5();
                        if (validacheck > 0) {
                            let aumentohoras = aumento01 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento01.toString();
                        }                
                    }else if (validaradio == 2) {
                        let aumento02 = aumentoedad + this.aumento6_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento02 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento02.toString();
                        }
                    }else if (validaradio == 3) {
                        let aumento03 = aumentoedad + this.aumento_10();
                        if (validacheck > 0) {
                            let aumentohoras = aumento03 + this.calcularCostoH(); 
                            (<HTMLInputElement>document.getElementById("bono")).value = aumentohoras.toString();
                        }else if (validacheck == 0) {
                            (<HTMLInputElement>document.getElementById("bono")).value = aumento03.toString();
                        }
                    }
                }
            }
        }
    }
}

function calcular(){
    let objeto = new App2();
    let sueldo = ((<HTMLInputElement>document.getElementById("sueldo")).value);
    let edad = ((<HTMLInputElement>document.getElementById("edad")).value);
    let sexo = ((<HTMLInputElement>document.getElementById("select_sex")).value);
    let radio_btn1 = ((<HTMLInputElement>document.getElementById("1_5")).checked);
    let radio_btn2 = ((<HTMLInputElement>document.getElementById("6_10")).checked);
    let radio_btn3 = ((<HTMLInputElement>document.getElementById("mas_10")).checked);
    let regex = "^[0-9]*$";
    if (sueldo == "") {
        alert("Debes de ingresar el sueldo");
        return false;
    }else if (!(sueldo.match(regex))) {
        alert("Solo estan permitidos 'Numeros' en sueldo");
       return false; 
    }else if (edad == "") {
        alert("Debes de ingresar tu edad");
        return false;
    }else if (!(edad.match(regex))) {
        alert("Solo estan permitidos 'Numeros' en edad");
       return false; 
    }else if (parseInt(edad) < 20 || parseInt(edad) > 80 ) {
        alert("Solo se permiten edades de 20 - 80 ");
       return false; 
    }else if (sexo == "0") {
        alert("En sexo debes de seleccionar 'Femenino' o 'Masculino'");
        return false;
    }else if (!(radio_btn1 || radio_btn2 || radio_btn3)) {
        alert("Debes de seleccionar tu antigüedad");
        return false;
    }

    objeto.setBono();
}
function nuevoCalculo(){
    window.parent.location.reload();
}