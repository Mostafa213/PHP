<?php
/* Smarty version 4.3.1, created on 2023-07-10 14:58:42
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\addQuiz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ac1ca204d409_52365541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e45cfd2c29fe1ac821ca960cc432f5dbcf97a720' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\addQuiz.tpl',
      1 => 1689000931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64ac1ca204d409_52365541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111886548264ac1ca20403b9_19266845', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207015373464ac1ca2042477_99650293', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162047804764ac1ca2044557_36106144', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207649418964ac1ca20481c8_01984803', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54157688564ac1ca2049e08_75343389', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_111886548264ac1ca20403b9_19266845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_111886548264ac1ca20403b9_19266845',
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
class Block_207015373464ac1ca2042477_99650293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_207015373464ac1ca2042477_99650293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="../front/css/AddQuiz.css">
    <?php echo '<script'; ?>
 src="../front/scripts/addQuiz.js">
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "style"} */
/* {block "naveBar"} */
class Block_162047804764ac1ca2044557_36106144 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_162047804764ac1ca2044557_36106144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_207649418964ac1ca20481c8_01984803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_207649418964ac1ca20481c8_01984803',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="liClass"><a href="adminWelcome.php?page=home">Home</a></li>
<?php
}
}
/* {/block "homeLink"} */
/* {block "body"} */
class Block_54157688564ac1ca2049e08_75343389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_54157688564ac1ca2049e08_75343389',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form method="post" action="../pages/redirectionsForApplicant.php" id="myForm">
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
        <button type="button" id="removeLastButton" style="display: none" onclick="removeLastQuestion()">Remove Last
            Question</button>
        <button type="submit">submit</button>
    </form>
<?php
}
}
/* {/block "body"} */
}
