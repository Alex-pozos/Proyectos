import { Component } from '@angular/core';

@Component({
  selector: 'app-ng-for',
  templateUrl: './ng-for.component.html',
  styleUrls: ['./ng-for.component.css']
})
export class NgForComponent {

  public title1: string = "1er Ejemplo con *ngFor";
  public title2: string = "2do Ejemplo con *ngFor";
  public title3: string = "3er Ejemplo con *ngFor";

  preguntas: string[] = [
    "¿Te gustaria aprender angular?",
    "¿Hará sol el día de hoy?",
    "¿Estás aprendiendo Angular?",
    "¿Has hecho ya algún curso referente a angular?"
  ];
  preguntasObj: any = [
    {
      pregunta: "¿Te gustaria aprender angular?",
      si: 2200,
      no: 95
    },
    {
      pregunta: "¿Estás aprendiendo Angular 2 en DesarrolloWeb?",
      si: 262,
      no: 3
    },
    {
      pregunta: "¿Has hecho ya algún curso referente a angular?",
      si: 1026,
      no: 1
    }
  ];
}
