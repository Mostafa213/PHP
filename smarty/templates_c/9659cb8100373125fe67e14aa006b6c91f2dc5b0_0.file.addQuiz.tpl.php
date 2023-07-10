<?php
/* Smarty version 4.3.1, created on 2023-07-06 06:57:19
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\addQuiz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a665cf832271_61899889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9659cb8100373125fe67e14aa006b6c91f2dc5b0' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\addQuiz.tpl',
      1 => 1688626636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navTemp.tpl' => 1,
  ),
),false)) {
function content_64a665cf832271_61899889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133369170164a665cf8215f9_06482972', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6042403664a665cf824d81_12976221', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76954164064a665cf828c02_85732820', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26587246064a665cf82d074_97649748', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189510848564a665cf82ec68_21711606', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "masterTemp.tpl");
}
/* {block "title"} */
class Block_133369170164a665cf8215f9_06482972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_133369170164a665cf8215f9_06482972',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Add Quiz
<?php
}
}
/* {/block "title"} */
/* {block "style"} */
class Block_6042403664a665cf824d81_12976221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_6042403664a665cf824d81_12976221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <head>
        <link rel="stylesheet" href="css/AddQuiz.css">
    </head>
    <?php echo '<script'; ?>
 src="scripts/addQuiz.js">
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "style"} */
/* {block "naveBar"} */
class Block_76954164064a665cf828c02_85732820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_76954164064a665cf828c02_85732820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_26587246064a665cf82d074_97649748 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_26587246064a665cf82d074_97649748',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="liClass"><a href="admin.php">Home</a></li>
<?php
}
}
/* {/block "homeLink"} */
/* {block "body"} */
class Block_189510848564a665cf82ec68_21711606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_189510848564a665cf82ec68_21711606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form method="post" action="../Back_end/quiz.php" id="myForm">
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
        <input type="hidden" id="custId" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
        <input type="hidden" id="custId" name="description" value="<?php echo $_smarty_tpl->tpl_vars['discription']->value;?>
">
        
        <input type="hidden" id="function" name="function" value="generate">
        <button type="button" onclick="addQuestion()">Add Question</button>
        <button type="button" id="removeLastButton" style="display: none" onclick="removeLastQuestion()">Remove Last Question</button>
        <button type="submit">submit</button>
    </form>
<?php
}
}
/* {/block "body"} */
}
