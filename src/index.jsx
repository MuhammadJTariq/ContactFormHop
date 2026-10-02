import { createRoot } from '@wordpress/element';
import './style.css';
import contactEditor from './Editor/contact_form';


const root = document.getElementById('contact-form-root');

if (root) {
    const page = root.dataset.page;
    let component;
    if(page === 'editor'){
        component = <contactEditor />;
    }
    else{
        component = "Hello world";
    }


    if(component){
        createRoot(root).render(component);
    }
}