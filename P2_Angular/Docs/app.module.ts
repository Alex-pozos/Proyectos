import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { Exp_cssComponent } from './exp_css/exp_css.component';
import { Exp_html5Component } from './exp_html5/exp_html5.component';
import { Exp_jsComponent } from './exp_js/exp_js.component';
import { Exp_tsComponent } from './exp_ts/exp_ts.component';

@NgModule({
  declarations: [
    AppComponent,
    Exp_cssComponent,
    Exp_jsComponent,
    Exp_html5Component,
    Exp_tsComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
