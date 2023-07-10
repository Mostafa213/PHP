{extends file="../masters/masterTemp.tpl"}
{block name="title"}
    MCQ Exam
{/block}
{assign var=i value=0}
{block name="style"}
    <link rel="stylesheet" href="../front/css/exam.css">
{/block}

{block name="naveBar"}
    {include file="../masters/navTemp.tpl"}
{/block}

{block name="homeLink"}
    <li class="liClass"><a href="adminWelcome.php?page=home">Home</a></li>
{/block}

{block name="body"}
    <br>
    <h1>MCQ Exam</h1>

    <form>
        {foreach $questions as $i => $question}
            {if $question['ansnum'] eq 'single'}
                <div class="question">
                    <h2>Question ({$i+ 1})</h2>
                    <p> {$question['question']}</p>
                    {foreach $question['options'] as $option => $answer}
                        <label>
                            <input type="radio" name="answer[{$i}]" value="{$option}">
                            {$option} {$answer}
                        </label>
                    {/foreach}
                </div>
            {else}
                <div class="question">
                    <h2>Question ({$i+ 1})</h2>
                    <p> {$question['question']}</p>
                    {foreach $question['options'] as $option => $answer}
                        <label>
                            <input type="checkbox" name="answer{$i}[]" value="{$option}">
                            {$option} {$answer}
                        </label>
                    {/foreach}
                </div>
            {/if}
        {/foreach}

        <div style="text-align: center;">
            <a href="adminWelcome.php?page=listQuiz" class="btn">Back</a>
        </div>
    </form>
{/block}