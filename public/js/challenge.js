postTestFormRequests('.overlay__test', '.form__radio-btn', '.answer', 'next', 'popup-Btn', '.popup__group', config.endPoints['challenge-get']);
removeTest('.overlay__test', '.test-close', '.test-error');

function postTestFormRequests(modalOverlayClass, radioGroupClass, answerGroupClass, submitBtnID, modalBtnID, modalGroupClass ,url) {
        
    const   submitBtn = document.getElementById(submitBtnID),
            modalBtn = document.getElementById(modalBtnID),
            modal = document.querySelector(modalOverlayClass),
            group = document.querySelector(modalGroupClass);
    
    let errorLabel = document.querySelector('.test-error');
    let question = null;

    if(modalBtn !== null && submitBtn !== null) {
        modalBtn.addEventListener('click', formSend.bind(null, true));
        submitBtn.addEventListener('click', formSend.bind(null, false));
    }

    async function formSend(isFirst, event) {
            event.preventDefault();
            
            question = document.getElementById('test-question');
            group.innerHTML = '';

            let input = '';

            errorLabel.style.display = 'none';

            if(isFirst) input = '';
            if(!isFirst) {
                let radioBtns = document.querySelectorAll(radioGroupClass);
                let answers = document.querySelectorAll(answerGroupClass);
                
                for(let i = 0; i < answers.length; i++) {
                    if(answers[i].checked) {
                        input = radioBtns[i].children[1].textContent;
                    }
                }

                console.log(radioBtns);
                submitBtn.disabled = true;
            }

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
                    question.textContent = result.question;

                    for(let index = 0; index < result.answers.length; index++) {
                        group.insertAdjacentHTML('beforeend', generateAnswers(index+1, index+1, result.answers[index].answer));
                    }
                    
                    console.log(result);

                    if(isFirst) modal.style.display = 'block';
                    
                    if(!isFirst) submitBtn.disabled = false;
                    
            } else {

                let result = await response.json();
                errorLabel.textContent = result.errors.question;
                errorLabel.style.display = 'block';

                if(!isFirst) submitBtn.disabled = false;
            }
    }
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