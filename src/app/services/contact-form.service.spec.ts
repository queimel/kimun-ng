import { TestBed, inject } from '@angular/core/testing';

import { ContactFormService } from './contact-form.service';

describe('ContactFormService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [ContactFormService]
    });
  });

  it('should ...', inject([ContactFormService], (service: ContactFormService) => {
    expect(service).toBeTruthy();
  }));
});
