import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NgIfelseComponent } from './ng-ifelse.component';

describe('NgIfelseComponent', () => {
  let component: NgIfelseComponent;
  let fixture: ComponentFixture<NgIfelseComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ NgIfelseComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(NgIfelseComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
