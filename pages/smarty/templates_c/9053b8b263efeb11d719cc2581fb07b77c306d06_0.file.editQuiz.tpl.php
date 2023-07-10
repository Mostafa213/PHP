<?php
/* Smarty version 4.3.1, created on 2023-07-10 15:10:40
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\editQuiz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ac1f707fa072_38508656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9053b8b263efeb11d719cc2581fb07b77c306d06' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\editQuiz.tpl',
      1 => 1689001815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64ac1f707fa072_38508656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70724992364ac1f707e7130_78036897', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197350712464ac1f707ebb61_52569564', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94612960564ac1f707f0c53_19280735', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29458653064ac1f707f4998_83605874', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201471521064ac1f707f6fb4_78007116', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_70724992364ac1f707e7130_78036897 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_70724992364ac1f707e7130_78036897',
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
class Block_197350712464ac1f707ebb61_52569564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_197350712464ac1f707ebb61_52569564',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="../front/css/EditQuiz.css">
    <?php echo '<script'; ?>
 src="../front/scripts/editQuiz.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../front/scripts/addQuiz.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var data = <?php echo $_smarty_tpl->tpl_vars['postdata']->value;?>
;
        window.onload = function() {
            loadQuestions(data);
        }
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "style"} */
/* {block "naveBar"} */
class Block_94612960564ac1f707f0c53_19280735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_94612960564ac1f707f0c53_19280735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_29458653064ac1f707f4998_83605874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_29458653064ac1f707f4998_83605874',
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
class Block_201471521064ac1f707f6fb4_78007116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_201471521064ac1f707f6fb4_78007116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form method="post" action="../pages/redirectionsForApplicant.php" id="myForm">
        <div id="quizQuestions">

        </div>

        <input type="hidden" id="custId" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">

        <input type="hidden" id="function" name="function" value="edit">
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
