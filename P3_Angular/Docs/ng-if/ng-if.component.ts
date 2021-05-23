import { Component } from '@angular/core';

@Component({
  selector: 'app-ng-if',
  templateUrl: './ng-if.component.html',
  styleUrls: ['./ng-if.component.css']
})
export class NgIfComponent {

  public title1:string = "1er Ejemplo con *ngif";
  public title2:string = "2do Ejemplo con *ngif";
  public title3:string = "3er Ejemplo con *ngif";

  isLogin: boolean = true;
  isNewUser: boolean = false;

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
