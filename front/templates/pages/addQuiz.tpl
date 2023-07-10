{extends file="../masters/masterTemp.tpl"}
{block name="title"}
    Add Quiz
{/block}
{block name="style"}
    <link rel="stylesheet" href="../front/css/AddQuiz.css">
    <script src="../front/scripts/addQuiz.js">
    </script>
{/block}

{block name="naveBar"}
    {include file="../masters/navTemp.tpl"}
{/block}

{block name="homeLink"}
    <li class="liClass"><a href="adminWelcome.php?page=home">Home</a></li>
{/block}

{block name="body"}
    <form method="post" action="../pages/redirectionsForApplicant.php" id="myForm">
        <div id="quizQuestions">
            <div class="form-group" id='form-group0'>
                <label for="question1">Question 1:</label>
                <input type="text" class="form-control" id="question1" name="question1">
                <button type="button" onclick="addAnswer(0)">+</button>
                <button type="button" onclick="removeAnswer(0)">-</button>
                <label for="answer11">Answer 1:</label>
                <input type="text" class="form-control" id="answer1q0" name="answer1q0">
                <input type="checkbox" id="checkbox1q0" name="checkbox1q0">
                <label for="answer21">Answer 2:</label>
                <input type="text" class="form-control" id="answer2q0" name="answer2q0">
                <input type="checkbox" id="checkbox2q0" name="checkbox2q0">
            </div>

        </div>
        <input type="hidden" id="custId" name="title" value="{$title}">
        <input type="hidden" id="custId" name="description" value="{$discription}">

        <input type="hidden" id="function" name="function" value="generate">
        <button type="button" onclick="addQuestion()">Add Question</button>
        <button type="button" id="removeLastButton" style="display: none" onclick="removeLastQuestion()">Remove Last
            Question</button>
        <button type="submit">submit</button>
    </form>
{/block}