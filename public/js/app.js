class ValidationForm {
    static checkOnFull(el) {
        if (el.lenght < 1) {
            console.log('Это поле должно быть заполнено');
        }
    }
}

const nameInput = document.getElementById('name-input');
const tel = document.getElementById('tel-input');
const messageArea = document.getElementById('message-area');
const form = document.forms.form;

const btnsRequest = document.getElementsByClassName('btn_request');
let subject;
let modal = document.getElementById('mod');

// добавление обработчиков событий

nameInput.addEventListener('keydown', handleEnter);
tel.addEventListener('keydown', handleEnter);

form.addEventListener('submit', handleSubmit);
form.addEventListener('click', stopPropagation);

for (let i = 0; i < btnsRequest.length; i++) {
    btnsRequest[i].addEventListener('click', openModal);
}

modal.addEventListener('click', closeModal);

// функции для обработки событий

function handleEnter(e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        validateForm(e.target);
        e.target.parentElement.nextElementSibling.lastElementChild.focus();
    }

    if (e.target.value.length < 2) {
        e.target.style.borderColor = 'red';
    } else {
        e.target.style.borderColor = 'green';
    }
    
}

function closeModal(e) {
    e.currentTarget.classList.add('mod_hidden');

    hideErrors();
}

function openModal(e) {
    modal.classList.remove('mod_hidden');
    subject = e.currentTarget.textContent;
}

function stopPropagation(e) {
    e.stopPropagation();
}

function handleSubmit(e) {
    e.preventDefault();

    const formattedData = new FormData(e.currentTarget);

    formattedData.append('subject', subject);
    sendRequestForm(formattedData)
        .then(message => {
            if (message === 'ОК') {
                
                hideErrors();
                showResultModal();
                cleanForm();
            } else {
                showErrors(message);
            }
            console.log(message);
        })
        .catch(error => console.log(error.message));
}

// вспомогательные функции

function hideErrors() {
    const errors = document.getElementsByClassName('error');

    for (let i = 0; i < errors.length; i++) {
        errors[i].classList.add('error_hidden');
    }
}

function checkBackMessage(message) {
    if (message == 'ОК') showResultModal();
}

function showErrors(message) {
    if (message.hasOwnProperty('username')) {
        nameInput.previousElementSibling.classList.remove('error_hidden');
    }
    if (message.hasOwnProperty('tel')) {
        tel.previousElementSibling.classList.remove('error_hidden');
    }
    
}

function showResultModal() {
    form.classList.add('form_hidden');

    const mod = form.nextElementSibling;

    mod.classList.remove('success-mod_hidden');


    setTimeout(() => {
        mod.classList.add('success-mod_hidden');
        form.classList.remove('form_hidden');
        modal.classList.add('mod_hidden');
    }, 1500);
}


function validateForm(el) {
    if (el.id === 'name-input') {
        ValidationForm.checkOnFull(el.value);
    }
}

async function sendRequestForm(formattedData) {

    console.log(formattedData);

    const options = {
        method: 'POST',
        body: formattedData
    }

    try {

        const response = await fetch('/doctor-doctor/app/api.php', options);
    
        const data = await response.json();

        console.log(data.message);

        return data.message;
        
    } catch (error) {
        console.log(error);
    }
}

function cleanForm() {
    form.reset();
    nameInput.style.borderColor = '#ced4da'
    tel.style.borderColor = '#ced4da'
}