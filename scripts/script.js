/*const imageInput = document.getElementById('image-input');
var uploaded_image = "";

imageInput.addEventListener("change", function () {
    // console.log(imageInput.value);
    
    const reader = new FileReader();
    reader.addEventListener('load', () => {
        uploaded_image = reader.result;
        document.getElementById('display-image').style.backgroundImage = `url(${uploaded_image})`
    });
    
    reader.readAsDataURL(this.files[0]);
});
*/
const full_name = document.getElementById("full_name");
const nick_name = document.getElementById("nick_name");
const age = document.getElementById("age");
const role = document.getElementById("role");
const email = document.getElementById("email");
const description = document.getElementById("description");
const input_image = document.getElementById("profile");

const submit = document.getElementById('submit-btn');
let data = [];

function handleOutput(newData) {
    const formContainer = document.querySelector('.form-container');
    const h1Elem = document.querySelector('#output h1');

    formContainer.style.display = "none";

    h1Elem.innerHTML = newData[0]["fullname"];
};

const handleInputNumber = e => {
    const numPattern = /\D/;

    if (numPattern.test(e.key)) {
        e.preventDefault();
    }
};

const handleSubmit = e => {
    let condition = validate() == true;
    if (condition) {
        // proceed to the next page....
        data.push(
            {
                "fullname": full_name.value,
                "nickname": nick_name.value,
                "age": age.value,
                "role": role.value,
                "email": email.value,
                "description": description.value,
            }
        );

        setTimeout(() => {
            handleOutput(data);
        }, 500);

    } else
        e.preventDefault();
};

// handles the submit event
submit.addEventListener('click', handleSubmit);

// set the default state of age
age.addEventListener("keypress", handleInputNumber);

function changeBorder(element) {
    element.style.border = '1px solid #F76CAD';
}

const emptyInputs = (inputs) => {
    // this function will returning a boolean value either its true or false 
    let fullname = inputs[0].value;
    let nickname = inputs[1].value;
    let age = inputs[2].value;
    let role = inputs[3].value;
    let email = inputs[4].value;
    let inputImage = inputs[5].value;



    if (fullname != '' && nickname != '' && age != '' && role != '' && email != '' && inputImage != '')
        return true;
    else {
        let i = 0;
        while (i < inputs.length) {
            if (inputs[i].value != '') {
                i++;
            } else if (inputs[i].value == '')
                changeBorder(inputs[i]);

            i++;
        }
    }

    return false;
};

const emptyDescription = (desc) => {
    if (desc.value == '') {
        changeBorder(desc);
        return false;
    }

    return true;
};

const validate = () => {
    const inputs = Array.from(document.getElementsByTagName("input"));
    let emailInput = inputs[4].value;
    let valid = 
        emptyInputs(inputs) == true &&
        emptyDescription(description) == true &&
        isValidEmail(emailInput) == true;


    // loop through array and check each one of its element wether its empty or not
    emptyInputs(inputs);
    emptyDescription(description);

    // check if email is valid using regEx email pattern 
    isValidEmail(emailInput);

    if(valid) return true;

    console.log(emptyInputs(inputs));
    console.log(isValidEmail(emailInput));
    console.log(emptyDescription(description));

    return false;
};

const isValidEmail = email => {
    let pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (email.toString().match(pattern)) return true;

    return false;
}



