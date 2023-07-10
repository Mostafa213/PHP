var questionCount = 1; // Set the starting value of the question count
var ansNum = [2];

function addQuestion() {

    var quizQuestions = document.getElementById("quizQuestions");

    var newQuestion = document.createElement("div");
    newQuestion.classList.add("form-group");
    newQuestion.id = "form-group" + questionCount;

    questionCount++; // Increment the question count

    var questionLabel = document.createElement("label");
    questionLabel.setAttribute("for", "question" + questionCount);
    questionLabel.textContent = "Question " + questionCount + ":";

    var questionInput = document.createElement("input");
    questionInput.setAttribute("type", "text");
    questionInput.classList.add("form-control");
    questionInput.setAttribute("id", "question" + questionCount);
    questionInput.setAttribute("name", "question" + questionCount);

    var answer1Label = document.createElement("label");
    answer1Label.setAttribute("for", "answer1" + questionCount);
    answer1Label.textContent = "Answer 1:";

    var answer1Input = document.createElement("input");
    answer1Input.setAttribute("type", "text");
    answer1Input.classList.add("form-control");
    answer1Input.setAttribute("id", "answer1" + (questionCount - 1));
    answer1Input.setAttribute("name", "answer1q" + (questionCount - 1));

    var checkbox1 = document.createElement("input");
    checkbox1.setAttribute("type", "checkbox");
    checkbox1.setAttribute("id", "checkbox1q" + (questionCount - 1));
    checkbox1.setAttribute("name", "checkbox1q" + (questionCount - 1));

    var answer2Label = document.createElement("label");
    answer2Label.setAttribute("for", "answer2" + questionCount);
    answer2Label.textContent = "Answer 2:";

    var answer2Input = document.createElement("input");
    answer2Input.setAttribute("type", "text");
    answer2Input.classList.add("form-control");
    answer2Input.setAttribute("id", "answer2" + (questionCount - 1));
    answer2Input.setAttribute("name", "answer2q" + (questionCount - 1));

    var checkbox2 = document.createElement("input");
    checkbox2.setAttribute("type", "checkbox");
    checkbox2.setAttribute("id", "checkbox2q" + (questionCount - 1));
    checkbox2.setAttribute("name", "checkbox2q" + (questionCount - 1));

    var buttonAdd = document.createElement("button");
    var buttonDelete = document.createElement("button");
    buttonAdd.setAttribute("type", "button");
    buttonAdd.setAttribute("onclick", "addAnswer(" + (questionCount - 1) + ")");
    buttonAdd.innerHTML = "+";
    buttonDelete.setAttribute("type", "button");
    buttonDelete.setAttribute("onclick", "removeAnswer(" + (questionCount - 1) + ")");
    buttonDelete.innerHTML = "-";

    var hr = document.createElement("hr");
    newQuestion.appendChild(hr);

    newQuestion.appendChild(questionLabel);
    newQuestion.appendChild(questionInput);
    newQuestion.appendChild(buttonAdd);
    newQuestion.appendChild(buttonDelete);
    newQuestion.appendChild(answer1Label);
    newQuestion.appendChild(answer1Input);
    newQuestion.appendChild(checkbox1);
    newQuestion.appendChild(answer2Label);
    newQuestion.appendChild(answer2Input);
    newQuestion.appendChild(checkbox2);

    quizQuestions.appendChild(newQuestion);
    ansNum.push(2);
    updateRemoveLastButton();
}

function addAnswer(ques) {
    ansNum[ques]++;
    // var quizQuestions = document.getElementById("form-group"+ques);
    console.log(ques);
    var questionDiv = document.getElementById("form-group" + parseInt(ques));
    var answerLabel = document.createElement("label");
    answerLabel.id = "answer" + ansNum[ques] + "L" + ques;
    answerLabel.setAttribute("for", "answer" + ansNum[ques] + "q" + ques);
    answerLabel.textContent = "Answer " + ansNum[ques] + ":";

    console.log(answerLabel);

    var answerInput = document.createElement("input");
    answerInput.id = "answer" + ansNum[ques] + "q" + ques;
    answerInput.setAttribute("type", "text");
    answerInput.classList.add("form-control", "answer-field");
    answerInput.setAttribute("id", "answer" + ansNum[ques] + "q" + ques);
    answerInput.setAttribute("name", "answer" + ansNum[ques] + "q" + ques);

    var checkbox = document.createElement("input");
    checkbox.setAttribute("type", "checkbox");
    checkbox.setAttribute("id", "checkbox" + ansNum[ques] + "q" + (questionCount - 1));
    checkbox.setAttribute("name", "checkbox" + ansNum[ques] + "q" + (questionCount - 1));

    questionDiv.appendChild(answerLabel);
    questionDiv.appendChild(answerInput);
    questionDiv.appendChild(checkbox);
}

function updateRemoveLastButton() {
    var removeLastButton = document.getElementById("removeLastButton");
    if (questionCount > 1) {
        removeLastButton.style.display = "block";
    } else {
        removeLastButton.style.display = "none";
    }
}

function removeLastQuestion() {
    var quizQuestions = document.getElementById("quizQuestions");
    var lastQuestion = quizQuestions.lastElementChild;
    if (lastQuestion != null) {
        quizQuestions.removeChild(lastQuestion);
        questionCount--;
        updateRemoveLastButton();
    }
}

function removeAnswer(ques) {
    if (ansNum[ques] > 2) {
        var lastanser = document.getElementById("answer" + ansNum[ques] + "q" + ques);

        console.log(ques);
        lastanser.remove();
        var lastanserLable = document.getElementById("answer" + ansNum[ques] + "L" + ques);
        lastanserLable.remove();
        var last = document.getElementById("checkbox" + ansNum[ques] + "q" + ques);
        last.remove();
        ansNum[ques]--;
    }

}