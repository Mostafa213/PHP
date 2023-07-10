<?php
/* Smarty version 4.3.1, created on 2023-07-06 15:56:25
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\addQuiz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a6e4298e9121_74951519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75e83e583714da93221b5c3000c3439583567206' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\addQuiz.tpl',
      1 => 1688658719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64a6e4298e9121_74951519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113031382164a6e4298d7155_84621828', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26730061064a6e4298d9186_64965488', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31876548264a6e4298dad69_00717832', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25172281264a6e4298e0b39_78117726', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174196078464a6e4298e4ec9_75500413', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_113031382164a6e4298d7155_84621828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_113031382164a6e4298d7155_84621828',
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
class Block_26730061064a6e4298d9186_64965488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_26730061064a6e4298d9186_64965488',
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
class Block_31876548264a6e4298dad69_00717832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_31876548264a6e4298dad69_00717832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_25172281264a6e4298e0b39_78117726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_25172281264a6e4298e0b39_78117726',
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
class Block_174196078464a6e4298e4ec9_75500413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_174196078464a6e4298e4ec9_75500413',
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
