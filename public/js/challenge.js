postTestFormRequests('.overlay__test', '.form__radio-btn', '.answer', 'next', 'popup-Btn', '.popup__group', config.endPoints['challenge-get']);
removeTest('.overlay__test', '.test-close', '.test-error');
openTest('.overlay__test', 'popup-Btn');

function postTestFormRequests(modalOverlayClass, radioGroupClass, answerGroupClass, submitBtnID, modalBtnID, modalGroupClass ,url) {
        
    const   submitBtn = document.getElementById(submitBtnID),
            group = document.querySelector(modalGroupClass);
    
    let errorLabel = document.querySelector('.test-error');
    let question = null;

    if(submitBtn !== null) {
        window.addEventListener('DOMContentLoaded', formSend.bind(null, true));
        submitBtn.addEventListener('click', formSend.bind(null, false));
    }

    async function formSend(isFirst, event) {
            event.preventDefault();
            
            question = document.getElementById('test-question');

            let input = '';

            errorLabel.style.display = 'none';

            if(isFirst) input = '';
            if(isFirst === false) {
                let radioBtns = document.querySelectorAll(radioGroupClass);
                let answers = document.querySelectorAll(answerGroupClass);
                
                for(let i = 0; i < answers.length; i++) {
                    if(answers[i].checked) {
                        input = radioBtns[i].children[1].textContent;
                    }
                }

                submitBtn.disabled = true;
            }

            console.log(isFirst);
            console.log(input);

            let dataForm = new FormData();
            dataForm.set('answer', input);
           
            dataForm.set('question', question.textContent);

            let response = await fetch(url, {
                    credentials: 'same-origin',
                    method: 'POST',
                    body: dataForm,
                    headers: new Headers({
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': token
                    })
            });

            if(response.ok) {

                    let result = await response.json();

                    if(Object.keys(result).includes('result')) {
                        question.textContent = result.result;
                        if(!isFirst) submitBtn.disabled = false;

                        setTimeout(() => {
                            location.reload();
                        }, 3000);

                    } else {
                        question.textContent = result.question;
                        group.innerHTML = '';

                        for(let index = 0; index < result.answers.length; index++) {
                            group.insertAdjacentHTML('beforeend', generateAnswers(index+1, index+1, result.answers[index].answer));
                        }

                        if(!isFirst) submitBtn.disabled = false;
                    }

                    console.log(result);
            
                    
            } else {

                let result = await response.json();
                errorLabel.textContent = result.errors.question;
                errorLabel.style.display = 'block';

                if(!isFirst) submitBtn.disabled = false;
            }
    }
}

function openTest(modalOverlayClass, modalBtnID) {

    const modal = document.querySelector(modalOverlayClass),
          modalBtn = document.getElementById(modalBtnID);

    modalBtn.addEventListener('click', ()=> {
        modal.style.display = 'block';
    })
}

function removeTest(modalOverlayClass, closeBtnClass, errorLabelClass) {

    const modal = document.querySelector(modalOverlayClass),
        closeBtn = document.querySelector(closeBtnClass),
        errorLabel = document.querySelector(errorLabelClass);

    if(closeBtn !== null) {
        closeBtn.addEventListener('click', () => {

            errorLabel.style.display = 'none';
            modal.style.display = 'none';
        });
    }
}

function generateAnswers(index, value, text) {
    return `
    <div class="form__radio-btn">  
        <input class="popup__group-btn answer" id="radio-${index}" type="radio" value="${value}" name="answer-radio">
        <label for="radio-${index}" style="background-image: url(./img/lines.svg);">${text}</label>
    </div>
    `;
}