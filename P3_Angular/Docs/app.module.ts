import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NgForComponent } from './ng-for/ng-for.component';
import { NgIfComponent } from './ng-if/ng-if.component';
import { NgIfelseComponent } from './ng-ifelse/ng-ifelse.component';

@NgModule({
  declarations: [
    AppComponent,
    NgForComponent,
    NgIfComponent,
    NgIfelseComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
