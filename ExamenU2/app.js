var App2 = /** @class */ (function () {
    function App2() {
        this.sueldo = parseFloat(document.getElementById("sueldo").value);
        this.edad = parseFloat(document.getElementById("edad").value);
        this.sexo = document.getElementById("select_sex").value;
        this.nacionalidad = document.getElementById("nacionalidad").value;
        this.curso_php = document.getElementById("php").checked;
        this.curso_asp = document.getElementById("asp").checked;
        this.curso_vb = document.getElementById("vb").checked;
        this.curso_java = document.getElementById("java").checked;
        this.curso_oracle = document.getElementById("oracle").checked;
        this.curso_bd = document.getElementById("bd").checked;
        this.radio_btn1 = document.getElementById("1_5").checked;
        this.radio_btn2 = document.getElementById("6_10").checked;
        this.radio_btn3 = document.getElementById("mas_10").checked;
    }
    App2.prototype.validacheck = function () {
        if (this.curso_php) {
            this.curso_php = 20;
        }
        if (this.curso_asp) {
            this.curso_asp = 40;
        }
        if (this.curso_vb) {
            this.curso_vb = 55;
        }
        if (this.curso_java) {
            this.curso_java = 35;
        }
        if (this.curso_oracle) {
            this.curso_oracle = 60;
        }
        if (this.curso_bd) {
            this.curso_bd = 15;
        }
        return this.curso_php + this.curso_asp + this.curso_vb + this.curso_java + this.curso_oracle + this.curso_bd;
    };
    App2.prototype.validaRadio = function () {
        if (this.radio_btn1) {
            this.radio_btn1 = 1;
        }
        if (this.radio_btn2) {
            this.radio_btn2 = 2;
        }
        if (this.radio_btn3) {
            this.radio_btn3 = 3;
        }
        return this.radio_btn1 + this.radio_btn2 + this.radio_btn3;
    };
    App2.prototype.calcularSueldo = function () {
        var porcentaje = this.sueldo * 0.15;
        return porcentaje;
    };
    App2.prototype.aumentoMujer = function () {
        var aumentoMujer = this.sueldo * 0.03;
        return aumentoMujer;
    };
    App2.prototype.aumentoEdad = function () {
        var aumentoEdad = this.sueldo * 0.02;
        return aumentoEdad;
    };
    App2.prototype.quitarPorNac = function () {
        var quitar = this.sueldo * 0.05;
        return quitar;
    };
    App2.prototype.aumento1_5 = function () {
        var aumento1 = this.sueldo * 0.05;
        return aumento1;
    };
    App2.prototype.aumento6_10 = function () {
        var aumento2 = this.sueldo * 0.10;
        return aumento2;
    };
    App2.prototype.aumento_10 = function () {
        var aumento3 = this.sueldo * 0.15;
        return aumento3;
    };
    App2.prototype.calcularCostoH = function () {
        var calcularcostoh = this.validacheck() * 3;
        return calcularcostoh;
    };
    App2.prototype.setBono = function () {
        var genero = this.sexo;
        var edad = this.edad;
        var nacionalidad = this.nacionalidad;
        var validacheck = this.validacheck();
        var validaradio = this.validaRadio();
        var porcentaje = this.calcularSueldo();
        if (genero == "femenino") {
            var aumentogenero = porcentaje + this.aumentoMujer();
            if (edad > 45) {
                var aumentoedad = aumentogenero + this.aumentoEdad();
                if (nacionalidad == "extranjero") {
                    var quita = aumentoedad - this.quitarPorNac();
                    if (validaradio == 1) {
                        var aumento01 = quita + this.aumento1_5();
                        if (validacheck > 0) {
                            var aumentohoras = aumento01 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento01.toString();
                        }
                    }
                    else if (validaradio == 2) {
                        var aumento02 = quita + this.aumento6_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento02 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento02.toString();
                        }
                    }
                    else if (validaradio == 3) {
                        var aumento03 = quita + this.aumento_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento03 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento03.toString();
                        }
                    }
                }
                else if (nacionalidad == "nacional") {
                    var aumentoedad_1 = aumentogenero + this.aumentoEdad();
                    if (validaradio == 1) {
                        var aumento01 = aumentoedad_1 + this.aumento1_5();
                        if (validacheck > 0) {
                            var aumentohoras = aumento01 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento01.toString();
                        }
                    }
                    else if (validaradio == 2) {
                        var aumento02 = aumentoedad_1 + this.aumento6_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento02 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento02.toString();
                        }
                    }
                    else if (validaradio == 3) {
                        var aumento03 = aumentoedad_1 + this.aumento_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento03 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento03.toString();
                        }
                    }
                }
            }
            else if (edad < 45) {
                if (nacionalidad == "extranjero") {
                    var quita = aumentogenero - this.quitarPorNac();
                    if (validaradio == 1) {
                        var aumento01 = quita + this.aumento1_5();
                        if (validacheck > 0) {
                            var aumentohoras = aumento01 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento01.toString();
                        }
                    }
                    else if (validaradio == 2) {
                        var aumento02 = quita + this.aumento6_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento02 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento02.toString();
                        }
                    }
                    else if (validaradio == 3) {
                        var aumento03 = quita + this.aumento_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento03 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento03.toString();
                        }
                    }
                }
                else if (nacionalidad == "nacional") {
                    var aumentoedad = aumentogenero + this.aumentoEdad();
                    if (validaradio == 1) {
                        var aumento01 = aumentoedad + this.aumento1_5();
                        if (validacheck > 0) {
                            var aumentohoras = aumento01 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento01.toString();
                        }
                    }
                    else if (validaradio == 2) {
                        var aumento02 = aumentoedad + this.aumento6_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento02 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento02.toString();
                        }
                    }
                    else if (validaradio == 3) {
                        var aumento03 = aumentoedad + this.aumento_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento03 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento03.toString();
                        }
                    }
                }
            }
        }
        else if (genero = "masculino") {
            if (edad > 45) {
                var aumentoedad = porcentaje + this.aumentoEdad();
                if (nacionalidad == "extranjero") {
                    var quita = aumentoedad - this.quitarPorNac();
                    if (validaradio == 1) {
                        var aumento01 = quita + this.aumento1_5();
                        if (validacheck > 0) {
                            var aumentohoras = aumento01 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento01.toString();
                        }
                    }
                    else if (validaradio == 2) {
                        var aumento02 = quita + this.aumento6_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento02 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento02.toString();
                        }
                    }
                    else if (validaradio == 3) {
                        var aumento03 = quita + this.aumento_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento03 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento03.toString();
                        }
                    }
                }
                else if (nacionalidad == "nacional") {
                    var aumentoedad_2 = porcentaje + this.aumentoEdad();
                    if (validaradio == 1) {
                        var aumento01 = aumentoedad_2 + this.aumento1_5();
                        if (validacheck > 0) {
                            var aumentohoras = aumento01 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento01.toString();
                        }
                    }
                    else if (validaradio == 2) {
                        var aumento02 = aumentoedad_2 + this.aumento6_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento02 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento02.toString();
                        }
                    }
                    else if (validaradio == 3) {
                        var aumento03 = aumentoedad_2 + this.aumento_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento03 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento03.toString();
                        }
                    }
                }
            }
            else if (edad < 45) {
                if (nacionalidad == "extranjero") {
                    var quita = porcentaje - this.quitarPorNac();
                    if (validaradio == 1) {
                        var aumento01 = quita + this.aumento1_5();
                        if (validacheck > 0) {
                            var aumentohoras = aumento01 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento01.toString();
                        }
                    }
                    else if (validaradio == 2) {
                        var aumento02 = quita + this.aumento6_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento02 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento02.toString();
                        }
                    }
                    else if (validaradio == 3) {
                        var aumento03 = quita + this.aumento_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento03 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento03.toString();
                        }
                    }
                }
                else if (nacionalidad == "nacional") {
                    var aumentoedad = porcentaje + this.aumentoEdad();
                    if (validaradio == 1) {
                        var aumento01 = aumentoedad + this.aumento1_5();
                        if (validacheck > 0) {
                            var aumentohoras = aumento01 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento01.toString();
                        }
                    }
                    else if (validaradio == 2) {
                        var aumento02 = aumentoedad + this.aumento6_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento02 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento02.toString();
                        }
                    }
                    else if (validaradio == 3) {
                        var aumento03 = aumentoedad + this.aumento_10();
                        if (validacheck > 0) {
                            var aumentohoras = aumento03 + this.calcularCostoH();
                            document.getElementById("bono").value = aumentohoras.toString();
                        }
                        else if (validacheck == 0) {
                            document.getElementById("bono").value = aumento03.toString();
                        }
                    }
                }
            }
        }
    };
    return App2;
}());
function calcular() {
    var objeto = new App2();
    var sueldo = (document.getElementById("sueldo").value);
    var edad = (document.getElementById("edad").value);
    var sexo = (document.getElementById("select_sex").value);
    var radio_btn1 = (document.getElementById("1_5").checked);
    var radio_btn2 = (document.getElementById("6_10").checked);
    var radio_btn3 = (document.getElementById("mas_10").checked);
    var regex = "^[0-9]*$";
    if (sueldo == "") {
        alert("Debes de ingresar el sueldo");
        return false;
    }
    else if (!(sueldo.match(regex))) {
        alert("Solo estan permitidos 'Numeros' en sueldo");
        return false;
    }
    else if (edad == "") {
        alert("Debes de ingresar tu edad");
        return false;
    }
    else if (!(edad.match(regex))) {
        alert("Solo estan permitidos 'Numeros' en edad");
        return false;
    }
    else if (parseInt(edad) < 20 || parseInt(edad) > 80) {
        alert("Solo se permiten edades de 20 - 80 ");
        return false;
    }
    else if (sexo == "0") {
        alert("En sexo debes de seleccionar 'Femenino' o 'Masculino'");
        return false;
    }
    else if (!(radio_btn1 || radio_btn2 || radio_btn3)) {
        alert("Debes de seleccionar tu antigüedad");
        return false;
    }
    objeto.setBono();
}
function nuevoCalculo() {
    window.parent.location.reload();
}
