{extends file="../masters/masterTemp.tpl"}
{block name="title"}
    Applicant Result
{/block}
{assign var=i value=0}
{block name="style"}
    <link rel="stylesheet" href="../front/css/ListResult.css">
{/block}

{block name="naveBar"}
    {include file="../masters/navTemp.tpl"}
{/block}

{block name="homeLink"}
    <li class="liClass"><a href="adminWelcome.php?page=home">Home</a></li>
{/block}

{block name="body"}
    <br>
    <h1>Applicant Result</h1>

    <form>
        {foreach $questions as $i => $question}

            <div class="question">
                <h2>Question ({$i+ 1})</h2>
                <p> {$question['question']}</p>
                {foreach $question['answer'] as $option => $answer}
                    <label>
                        {$option} {$answer}
                    </label>
                {/foreach}
            </div>
        {/foreach}

        <div style="text-align: center;">
            <a href="adminWelcome.php?page=listApplicant" class="btn">Back</a>
        </div>
    </form>
{/block}