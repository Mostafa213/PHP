{extends file="../masters/masterTemp.tpl"}
{block name="title"}
    Quiz
{/block}

{block name="style"}
    <link rel="stylesheet" href="../front/css/exam.css">
{/block}

{block name="naveBar"}
    {include file="../masters/navTemp.tpl"}
{/block}

{block name="homeLink"}
    <li class="liClass"><a href="applicant.php?page=home">Home</a></li>
{/block}

{block name="body"}
    <br><br>
    <form method="post" action="../pages/redirectionsForApplicant.php">
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
        <input type="hidden" name="function" value="correct">

        <div style="text-align: center;">
            <button type="submit" class="btn">Submit</button>
        </div>
    </form>
{/block}