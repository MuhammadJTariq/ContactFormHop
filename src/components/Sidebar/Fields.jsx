const [fields, setFields] = useState([
    {
        id: crypto.randomUUID(),
        type : 'text', 
        label : 'Name',
        required : true
    }
])



function fieldSideBar({onAddField}){
    return (
        <aside className='field-sidebar'>
            <h2>Drag the Fields to the Form</h2>
            <button onClick={() => onAddField('text')}> Text </button>
            <button onClick={() => onAddField('email')}> Email</button>

        </aside>
    )
}




export function formCanvas({fields}){
    return (
        <main className="Form-Canvas">
            <h1>Contact Form</h1>
            {fields.map((field) => (
                <FormField
                    key={field.id}
                    field={field}
                 />

            ))}

        </main>
    )

}



function FormField({ field }) {

    switch (field.type) {

        case 'text':
            return (
                <div>
                    <label>{field.label}</label>
                    <input type="text" />
                </div>
            );

        case 'email':
            return (
                <div>
                    <label>{field.label}</label>
                    <input type="email" />
                </div>
            );

        case 'textarea':
            return (
                <div>
                    <label>{field.label}</label>
                    <textarea />
                </div>
            );

        default:
            return null;
    }
}


