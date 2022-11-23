'use strict'
let photo = document.getElementById('imgPhoto');
let file = document.getElementById('flImage');

photo.addEventListener('click', () => {
    file.click();
});

const input1 = document.querySelector('#nameUser');
input1.disabled = true;
const input2 = document.querySelector('#datanasc');
input2.disabled = true;
const input3 = document.querySelector('#cpf');
input3.disabled = true
const input4 = document.querySelector('#ddd');
input4.disabled = true;
const input5 = document.querySelector('#tel');
input5.disabled = true;
const input6 = document.querySelector('#cep');
input6.disabled = true;
const input7 = document.querySelector('#adress');
input7.disabled = true;
const input8 = document.querySelector('#num');
input8.disabled = true;
const input9 = document.querySelector('#descricao');
input9.disabled = true;
const input10 = document.querySelector('#email');
input10.disabled = true;
const input11 = document.querySelector('#cargo');
input11.disabled = true;
const input12 = document.querySelector('#login');
input12.disabled = true;
const input13 = document.querySelector('#senha');
input13.disabled = true;


//---------------------------------//
/*class validator {
    constructor() {
        this.validations = [
            'data-min-length',
        ]
    }
    //inicair a validação de todos os campos
    validate(form) {
        //pegar os inputs
        let inputs = form.getElementByTagName('input');

        let inputsArray = [...inputs];
        inputsArray.forEach(function (input) {
            //loop em todas as validações existentes
            for (let i = 0; this.validations > i; i++) {
                //Verifica se a validação atual existe no input
                if (input.getAttribute(this.validations[i]) != null);
                //limpando a String para virar um método
                let method = this.validations[i].replace('data-', '').replace('-', '');
                //valor do input
                let Value = input.getAttribute(this.validations[i]);
                //invocar o método
                this[method](input, value);
            }
        }, this);
    }

    //verifica se um input tem um numero minimo de caracteres
    minlength(input, minValue) {
        let inputLength = input.value.length;
        let errorMessage = 'O campo precisa ter pelo menos ${minValue} caracters';
        if (inputLength < minValue) {
            this.printMessage(input,errorMessage);
        }
    }
    //método para imprimir mensagens de rro na tela
    printMessage(input,msg){
let template = document.querySelector('.error-validation').cloneNode(true);
template.textContent = msg;
let inputParent = input.ParentNode;
template.classList.remove('template');
inputParent.appendChild(template);
    }
}
let form = document.getElementById("regsiter-form");
let submit = document.getElementById("btn-submit");
let validator = new validator();

//evento que dispara as validações
submit.addEventListener('click', function (e) {
    e.preventDefault();
    validator.validate(form);
});*/