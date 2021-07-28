postTestFormRequests('.overlay__test', '.form__radio-btn', '.answer', 'next', 'popup-Btn', config.endPoints['test']);
removeTest('.overlay__test', '.test-close', '.test-error');

function postTestFormRequests(modalOverlayClass, radioGroupClass, answerGroupClass, submitBtnID, modalBtnID, url) {
        
    const radioBtns = document.querySelectorAll(radioGroupClass),
            answers = document.querySelectorAll(answerGroupClass),
            submitBtn = document.getElementById(submitBtnID),
            modalBtn = document.getElementById(modalBtnID),
            modal = document.querySelector(modalOverlayClass);
    
    let errorLabel = document.querySelector('.test-error');

    if(modalBtn !== null && submitBtn !== null) {
        modalBtn.addEventListener('click', formSend.bind(null, true));
        submitBtn.addEventListener('click', formSend.bind(null, false));
    }

    async function formSend(isFirst, event) {
            event.preventDefault();
            const question = document.getElementById('test-question');
            let input = '';

            errorLabel.style.display = 'none';

            if(isFirst) input = '';
            else {
                for(let i = 0; i < answers.length; i++) {
                    if(answers[i].checked) {
                        input = radioBtns[i].children[1].textContent;
                    }
                }
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
                    // question.textContent = result.result;
                    console.log(result.result);

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