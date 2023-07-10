<?php
/* Smarty version 4.3.1, created on 2023-07-06 10:27:58
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\editQuiz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a6972e84b5e8_20438754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '264ef4d42f04972ca1b77e86c7dea19bd17c1249' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\editQuiz.tpl',
      1 => 1688639260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navTemp.tpl' => 1,
  ),
),false)) {
function content_64a6972e84b5e8_20438754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96335212764a6972e8385b3_47904377', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189274444164a6972e83a752_22337904', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74188224264a6972e83e400_76748409', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181558264164a6972e842579_86265894', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186796523664a6972e847030_68866575', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "masterTemp.tpl");
}
/* {block "title"} */
class Block_96335212764a6972e8385b3_47904377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_96335212764a6972e8385b3_47904377',
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
class Block_189274444164a6972e83a752_22337904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_189274444164a6972e83a752_22337904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <head>
        <link rel="stylesheet" href="css/EditQuiz.css">
        <?php echo '<script'; ?>
 src="scripts/editQuiz.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="scripts/addQuiz.js"><?php echo '</script'; ?>
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
    </head>

<?php
}
}
/* {/block "style"} */
/* {block "naveBar"} */
class Block_74188224264a6972e83e400_76748409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_74188224264a6972e83e400_76748409',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_181558264164a6972e842579_86265894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_181558264164a6972e842579_86265894',
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
class Block_186796523664a6972e847030_68866575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_186796523664a6972e847030_68866575',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form method="post" action="../Back_end/quiz.php" id="myForm">
        <div id="quizQuestions">

        </div>

        <input type="hidden" id="custId" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">

        <input type="hidden" id="function" name="function" value="edit">
        <button type="button" onclick="addQuestion()">Add Question</button>
        <button type="button" id="removeLastButton" style="display: none" onclick="removeLastQuestion()">Remove Last Question</button>
        <button type="submit">submit</button>
    </form>
<?php
}
}
/* {/block "body"} */
}
