import { Component } from '@angular/core';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  public title:string = "Practica 1 Contador desde angular";
  public base:number = 5;
  public numero:number = this.base;
  
  public sumarRestar(valor:number){
    valor = this.base;
    this.numero = this.numero + valor;
  }

  public sumar(){
    this.numero += this.base;
    console.log(this.numero);
  }

  public restar(){
    this.numero -= this.base;
    console.log(this.numero);
  }
}
