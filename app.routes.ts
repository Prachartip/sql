import {Routes} from '@angular/router';
//import {Home} from './home/home';
import { Product } from './product/product';
export const routes: Routes = [
  {
    path: '',
    title: 'App Home Page',
    component: Product,
  },
];