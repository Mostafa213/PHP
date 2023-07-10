{extends file="../masters/masterTemp.tpl"}
{block name="title"}
    Welcome Admin
{/block}
{block name="style"}
    <link rel="stylesheet" href="../front/css/Admin.css">
{/block}

{block name="naveBar"}
    {include file="../masters/navTemp.tpl"}
{/block}

{block name="homeLink"}
    <li class="liClass"><a href="#">Home</a></li>
{/block}

{block name="body"}
    <div class="container">
        <div class="row">
            <div>
                <div class="panel-heading">
                    <h1>Add Quizz</h1>
                </div>
                <form action="adminWelcome.php?page=addQuiz" method="post">

                    Title<input type="text" name="title" id="content" class="input-field" required="required"></number>
                    Discription<input type="textarea" name="description" id="content" cols=30 rows="1" class="input-field"
                        required="required"></textarea>
                    <br>
                    <button type="submit" class="btn">Add</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="panel-heading">
                    <h1>View Quizzes</h1>
                </div>
                <div class="panel-body">

                    <a href="adminWelcome.php?page=listQuiz" class="btn btn-primary btn-block">List Quiz</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="panel-heading">
                    <h1>View Applicants</h1>
                </div>
                <div class="panel-body">

                    <a href="adminWelcome.php?page=listApplicant" class="btn btn-primary btn-block">List Applicant</a>
                </div>
            </div>
        </div>
    </div>
{/block}