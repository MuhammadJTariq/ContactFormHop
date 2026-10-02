import {formCanvas} from '../components/Sidebar/fields';

function contactEditor(){

    const [fields, setFields] = useState([]);

    function addfield(type){
        const field = {
            id : crypto.randomUUID(),
            type : type, 
            label : type, 
            required : false,
        }

        setFields((currentFields) => [
            ...currentFields,
            field
        ]);



        return (
            <div className='contact-form-builder'>
                <formCanvas fields={fields} />
                Hello from the Form Creator

            </div>
        )
    }
}


export default contactEditor;