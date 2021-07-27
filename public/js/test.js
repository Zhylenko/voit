postTestFormRequests('.form__radio-btn', '.answer', 'next', 'popup-Btn', config.endPoints['test']);

function postTestFormRequests(radioGroupClass, answerGroupClass, submitBtnID, modalBtnID, url) {
        
    const radioBtns = document.querySelectorAll(radioGroupClass),
            answers = document.querySelectorAll(answerGroupClass),
            submitBtn = document.getElementById(submitBtnID),
            modalBtn = document.getElementById(modalBtnID);

    modalBtn.addEventListener('click', formSend.bind(null, true));
    submitBtn.addEventListener('click', formSend.bind(null, false));

    async function formSend(isFirst, event) {
            event.preventDefault();
            const question = document.getElementById('test-question');
            let input = '';

            if(isFirst) input = '';
            else {
                for(let i = 0; i < answers.length; i++) {
                    if(answers[i].checked) {
                        input = radioBtns[i].children[1].textContent;
                    }
                }
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
                    question.textContent = result.answers.answer;
            } else {
                alert('ошибка');
                let result = await response.json();
                console.log(result);
            }
    }
}