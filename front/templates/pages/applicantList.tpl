{extends file="../masters/masterTemp.tpl"}
{block name="title"}
    Applicant List
{/block}
{block name="style"}
    <link rel="stylesheet" href="../front/css/Applicant_List.css">

    <script src="../front/scripts/listing.js">
    </script>
{/block}

{block name="naveBar"}
    {include file="../masters/navTemp.tpl"}
{/block}

{block name="homeLink"}
    <li class="liClass"><a href="adminWelcome.php?page=home">Home</a></li>
{/block}

{block name="body"}
    {foreach $result as $res}
        {assign var="is_solved" value=(($res["result"] == null) && ($res["quizID"] != null))}
        {assign var="is_done" value=(($res["result"] != null))}
        <div class="container" style="background:white;padding:20px;box-shadow:10px 10px 5px #888;">
            <div class="column">
                <h5>ID</h5>
            </div>
            <div class="column">
                <h5> {$res["userID"]} </h5>
            </div>
            <div class="column">
                <h5>User Name</h5>
            </div>
            <div class="column">
                <h5> {$res["username"]} </h5>
            </div>
            <div class="column">
                <h5>Password</h5>
            </div>
            <div class="column">
                <h5> {$res["password"]} </h5>
            </div>
            <div class="column">
                <h5>Email</h5>
            </div>
            <div class="column">
                <h5> {$res["email"]} </h5>
            </div>
            <div class="column">
                <h5>Name</h5>
            </div>
            <div class="column">
                <h5> {$res["name"]} </h5>
            </div>
            <div class="column">
                <h5>Quiz ID</h5>
            </div>
            <div class="column">
                <h5> {$res["quizID"]} </h5>
            </div>
            <div class="column">
                <h5>Result</h5>
            </div>
            <div class="column">
                <h5> {$res["result"]} </h5>
            </div>
            <div class="column">
                <h5>Number Of Quiz Questions</h5>
            </div>
            <div class="column">
                <h5> {$res["questionNumber"]} </h5>
            </div>
            <div class="column">
                <h5>Quize Complete</h5>
            </div>

            {if $is_done}
                <div class="column">
                    <h5>Done</h5>
                </div>
                <a href="adminWelcome.php?userID={$res["userID"]}&page=listResult" class="btn btn-primary btn-block">View
                    Result</a>
            {else}
                {if $is_solved}
                    <div class="column">
                        <h5>Not Solved Yet</h5>
                    </div>

                {else}
                    <div class="column">
                        <h5>In progress</h5>
                    </div>
                    <a onclick="updataQuizID({$res['userID']} , '{$res['name']}')" class="btn btn-primary btn-block">Add Quiz</a>
                    <label for="QuizIId"></label>
                    <input type="number" id="QuizIId" name="QuizIId" placeholder="Enter Quiz ID" value="">
                {/if}
            {/if}

        </div>
    {/foreach}
{/block}