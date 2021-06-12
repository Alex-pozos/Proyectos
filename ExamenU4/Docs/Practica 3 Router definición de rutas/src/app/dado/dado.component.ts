import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-dado',
  templateUrl: './dado.component.html',
  styleUrls: ['./dado.component.css']
})
export class DadoComponent implements OnInit {

  @Input() valor: number = 0;
  valor1: number = 0;
  valor2: number = 0;
  valor3: number = 0;
  resultado: string = '';
  
  retornarAleatorio() {
    return Math.trunc(Math.random() * 6) + 1;
  }
  
constructor() { this.valor1 = this.retornarAleatorio();
  this.valor2 = this.retornarAleatorio();
  this.valor3 = this.retornarAleatorio();}

ngOnInit(): void {
}

}
