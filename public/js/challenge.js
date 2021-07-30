postTestFormRequests('.overlay__test', '.form__radio-btn', '.answer', 'next', 'popup-Btn', '.popup__group', config.endPoints['challenge-get']);

window.addEventListener('DOMContentLoaded', () => {
    removeTest('.overlay__test', '.test-close', '.test-error');
    openTest('.overlay__test', 'popup-Btn');
});

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
            submitBtn.disabled = true;
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
                    submitBtn.disabled = false;

                    if(Object.keys(result).includes('result')) {
                        group.innerHTML = '';
                        question.textContent = result.result;

                        setTimeout(() => {
                            location.reload();
                        }, 3000);

                    } else {
                        question.textContent = result.question;
                        group.innerHTML = '';

                        for(let index = 0; index < result.answers.length; index++) {
                            group.insertAdjacentHTML('beforeend', generateAnswers(index+1, index+1, result.answers[index].answer));
                        }
                    }
            
                    
            } else {

                let result = await response.json();
                submitBtn.disabled = false;
                errorLabel.textContent = result.errors.question;
                errorLabel.style.display = 'block';
            }
    }
}

function openTest(modalOverlayClass, modalBtnID) {

    const modal = document.querySelector(modalOverlayClass),
          modalBtn = document.getElementById(modalBtnID);

    const scroll = calcScroll();

    modalBtn.addEventListener('click', ()=> {
        modal.style.display = 'block';

        document.body.style.overflowY = 'hidden';
        document.body.style.marginRight = `${scroll}px`; 
    })
}

function removeTest(modalOverlayClass, closeBtnClass, errorLabelClass) {

    const modal = document.querySelector(modalOverlayClass),
        closeBtn = document.querySelector(closeBtnClass),
        errorLabel = document.querySelector(errorLabelClass);

    if(closeBtn !== null) {
        closeBtn.addEventListener('click', () => {
            const answers = document.querySelectorAll('.answer');
            if(answers !== null) {
                answers.forEach((item) => {
                    item.checked = false;
                })
            }

            errorLabel.style.display = 'none';
            modal.style.display = 'none';
            document.body.style.overflowY = 'scroll';
            document.body.style.marginRight = `0px`; 
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

function calcScroll() {
        
    let div = document.createElement('div');

    div.style.width = '50px';
    div.style.height = '50px';
    div.style.overflowY = 'scroll';
    div.style.visibility = 'hidden';

    document.body.appendChild(div);

    let scrollWidth = div.offsetWidth - div.clientWidth;
    div.remove();

    return scrollWidth;
}