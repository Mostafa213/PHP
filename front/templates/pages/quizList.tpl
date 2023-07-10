{extends file="../masters/masterTemp.tpl"}
{block name="title"}
    Quiz List
{/block}
{block name="style"}
    <link rel="stylesheet" href="../front/css/Quiz_List.css">
    <script src="../front/scripts/listing.js"></script>
{/block}

{block name="naveBar"}
    {include file="../masters/navTemp.tpl"}
{/block}

{block name="homeLink"}
    <li class="liClass"><a href="adminWelcome.php?page=home">Home</a></li>
{/block}

{block name="body"}
    {foreach $result as $res}
        <div class="container" style="background:white;padding:20px;box-shadow:10px 10px 5px #888;">
            <div class="column">
                <h5>Quiz ID</h5>
            </div>
            <div class="column">
                <h5>{$res["quizId"]}</h5>
            </div><br><br>
            <div class="column">
                <h5>Tile</h5>
            </div>
            <div class="column">
                <h5>{$res["title"]}</h5>
            </div><br><br>
            <div class="column">
                <h5>Description</h5>
            </div>
            <div class="column">
                <h5>{$res["description"]}</h5>
            </div>
            <br><br>
            <div class="column">
                <h5>Number Of Question</h5>
            </div>
            <div class="column">
                <h5>{$res["questionNumbers"]}</h5>
            </div>
            <form id="myForm" method="post" action="adminWelcome.php?page=editQuiz"></form>
            <a onclick='getAllQuizData({$res["quizId"]})' class="btn btn-primary btn-block">Edit Quiz</a>
            <a href='adminWelcome.php?id={$res["quizId"]}&page=viewQuiz' class="btn btn-primary btn-block">View Quiz</a>
        </div>
    {/foreach}
{/block}