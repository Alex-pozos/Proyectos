import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-juegodados',
  templateUrl: './juegodados.component.html',
  styleUrls: ['./juegodados.component.css']
})
export class JuegodadosComponent implements OnInit {
  valor1: number = 0;
  valor2: number = 0;
  valor3: number = 0;
  resultado: string = '';
  
  retornarAleatorio() {
    return Math.trunc(Math.random() * 6) + 1;
  }
  
  constructor() {
    this.valor1 = this.retornarAleatorio();
    this.valor2 = this.retornarAleatorio();
    this.valor3 = this.retornarAleatorio();
  } 

  tirar() {
    this.valor1 = this.retornarAleatorio();
    this.valor2 = this.retornarAleatorio();
    this.valor3 = this.retornarAleatorio();
    if (this.valor1==this.valor2 && this.valor1==this.valor3)    
      this.resultado='Ganó';
    else
      this.resultado='Perdió';
  }
  
  ngOnInit() {
  }


}
