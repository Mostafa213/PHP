var ansNum = [];
var data;
var questionCount;


function loadQuestions(quizData) {
    data = quizData;
    var quizdata = (data);
    // console.log(quzdata );
    questionCount = Object.keys(quizdata).length;
    questionCount--;
    console.log(questionCount);
    var quizQuestions = document.getElementById("quizQuestions");
    for (var i = 0; i < questionCount; i++) {
        var newQuestion = document.createElement("div");
        newQuestion.classList.add("form-group");
        newQuestion.id = "form-group" + i;
        var q = i + 1; // Increment the question count

        var questionLabel = document.createElement("label");
        questionLabel.setAttribute("for", "question" + q);
        questionLabel.textContent = "Question " + q + ":";

        var questionInput = document.createElement("input");
        questionInput.setAttribute("type", "text");
        questionInput.classList.add("form-control");
        questionInput.setAttribute("id", "question" + q);
        questionInput.setAttribute("name", "question" + q);
        questionInput.setAttribute("value", quizdata[i]['question']);


        var buttonAdd = document.createElement("button");
        var buttonDelete = document.createElement("button");
        buttonAdd.setAttribute("type", "button");
        buttonAdd.setAttribute("onclick", "addAnswer(" + (q - 1) + ")");
        buttonAdd.innerHTML = "+";
        buttonDelete.setAttribute("type", "button");
        buttonDelete.setAttribute("onclick", "removeAnswer(" + (q - 1) + ")");
        buttonDelete.innerHTML = "-";

        var hr = document.createElement("hr");

        newQuestion.appendChild(hr);
        newQuestion.appendChild(questionLabel);
        newQuestion.appendChild(questionInput);
        newQuestion.appendChild(buttonAdd);
        newQuestion.appendChild(buttonDelete);

        ansNum.push(quizdata[i]['answer'].length);

        for (var j = 0; j < quizdata[i]['answer'].length; j++) {
            var answer1Label = document.createElement("label");
            answer1Label.setAttribute("for", "answer1" + q);
            answer1Label.textContent = "Answer 1:";

            var answer1Input = document.createElement("input");
            answer1Input.setAttribute("type", "text");
            answer1Input.classList.add("form-control");
            answer1Input.setAttribute("id", "answer" + (j + 1) + "q" + (q - 1));
            answer1Input.setAttribute("name", "answer" + (j + 1) + "q" + (q - 1));
            answer1Input.setAttribute("value", quizdata[i]['answer'][j]['answer']);

            var checkbox1 = document.createElement("input");
            checkbox1.setAttribute("type", "checkbox");
            checkbox1.setAttribute("id", "checkbox" + (j + 1) + "q" + (q - 1));
            checkbox1.setAttribute("name", "checkbox" + (j + 1) + "q" + (q - 1));
            // checkbox1.setAttribute("value", quizdata[i]['answer'][j]['state']);
            checkbox1.checked = quizdata[i]['answer'][j]['state'];



            newQuestion.appendChild(answer1Label);
            newQuestion.appendChild(answer1Input);
            newQuestion.appendChild(checkbox1);
        }

        quizQuestions.appendChild(newQuestion);

    }

    updateRemoveLastButton();
}

