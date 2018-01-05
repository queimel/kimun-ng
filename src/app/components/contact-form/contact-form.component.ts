import { Component, OnInit } from '@angular/core';
import { ContactFormService, IMessage } from '../../services/contact-form.service';

@Component({
  selector: 'app-contact-form',
  templateUrl: './contact-form.component.html',
  styleUrls: ['./contact-form.component.scss']
})
export class ContactFormComponent  {

  message: IMessage = {};
 
  constructor(private appService: ContactFormService) {
 
  }
 
  sendEmail(message: IMessage) {
    this.appService.sendEmail(message).subscribe(res => {
      console.log('AppComponent Success', res);
    }, error => {
      console.log('AppComponent Error', error);
    })
  }

}
