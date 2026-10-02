import { createRoot } from '@wordpress/element';
import './style.css';
import ContactEditor from './Editor/contact_form';


const root = document.getElementById('contact-form-root');

if (root) {
    const page = root.dataset.page;
    let component;
    if(page === 'editor'){
        component = <ContactEditor />;
    }


    if(component){
        createRoot(root).render(component);
    }
}