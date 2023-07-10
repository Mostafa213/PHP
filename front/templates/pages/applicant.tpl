{extends file="../masters/masterTemp.tpl"}
{block name="title"}
    Applicant Home
{/block}

{block name="style"}
    <link rel="stylesheet" href="../front/css/Applicant.css">
{/block}

{block name="naveBar"}
    {include file="../masters/navTemp.tpl"}
{/block}

{block name="homeLink"}
    <li class="liClass"><a href="#">Home</a></li>
{/block}

{block name="body"}
    <h1>Quizzes</h1>
    {if $is_assigned_quiz}
        <div class="quiz">
            <h2> {$quizzes['title']} </h2>
            <p> {$quizzes['description']}</p>
            {if $is_solved_quiz}
                <a href="applicant.php?page=solveTheExam" class="btn">Start Quiz</a>
            {else}
                <a class="btndone">You Solved The Quiz</a>
            {/if}
        </div>
    {else}
        <div class="quiz">
            <h2>No Quizzes Yet..</h2>
            <p>The Admin Will Assign One For You</p>

        </div>
    {/if}
{/block}