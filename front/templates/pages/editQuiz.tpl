{extends file="../masters/masterTemp.tpl"}
{block name="title"}
    Add Quiz
{/block}
{block name="style"}
    <link rel="stylesheet" href="../front/css/EditQuiz.css">
    <script src="../front/scripts/editQuiz.js"></script>
    <script src="../front/scripts/addQuiz.js"></script>
    <script>
        var data = {$postdata};
        window.onload = function() {
            loadQuestions(data);
        }
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

        </div>

        <input type="hidden" id="custId" name="id" value="{$data['id']}">

        <input type="hidden" id="function" name="function" value="edit">
        <button type="button" onclick="addQuestion()">Add Question</button>
        <button type="button" id="removeLastButton" style="display: none" onclick="removeLastQuestion()">Remove Last
            Question</button>
        <button type="submit">submit</button>
    </form>
{/block}