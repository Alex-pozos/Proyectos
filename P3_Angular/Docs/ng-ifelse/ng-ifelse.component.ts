import { Component } from '@angular/core';

@Component({
  selector: 'app-ng-ifelse',
  templateUrl: './ng-ifelse.component.html',
  styleUrls: ['./ng-ifelse.component.css']
})
export class NgIfelseComponent {

  public title1: string = "1er Ejemplo con *ngifelse";
  public title2: string = "2do Ejemplo con *ngifelse";
  public title3: string = "3er Ejemplo con *ngifelse";

  public check: boolean = true;
  public calificacion: number = 5;
  public calificacion2: number = 5;
  public materia: string = "Mean stack";
  public materia2: string = "Sin materia";
}
