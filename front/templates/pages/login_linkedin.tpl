{extends file="../masters/masterTemp.tpl"}
{block name="title"}
    Quiz
{/block}

{block name="style"}
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../front/css/Linkedin.css">
{/block}


{block name="body"}
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-6 offset-3" style="margin:auto;background:white;padding:20px;box-shadow:10px 10px 5px #888;">
                <div class="panel-heading">
                    <h1>Login Linkedin</h1>
                </div>
                <div class="panel-body">
                <a href="{$linkedin->getAuthUrl()}" class="btn btn-primary btn-block">Linkedin Register</a>
                </div>
            </div>
        </div>
    </div>
{/block}