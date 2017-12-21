import { KimunNgPage } from './app.po';

describe('kimun-ng App', () => {
  let page: KimunNgPage;

  beforeEach(() => {
    page = new KimunNgPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
