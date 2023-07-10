<?php
/* Smarty version 4.3.1, created on 2023-07-06 15:56:31
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\editQuiz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a6e42f8c9112_11531399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa2fbe11074045001b32eb612c1e9aabc5ab2c7d' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\editQuiz.tpl',
      1 => 1688658769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64a6e42f8c9112_11531399 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205395979464a6e42f8ba8d5_93998205', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179806280964a6e42f8bca94_63398169', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121387404164a6e42f8c0dc3_67903875', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129772394364a6e42f8c45c6_69598529', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99318687864a6e42f8c6111_37145431', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_205395979464a6e42f8ba8d5_93998205 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_205395979464a6e42f8ba8d5_93998205',
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
class Block_179806280964a6e42f8bca94_63398169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_179806280964a6e42f8bca94_63398169',
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
class Block_121387404164a6e42f8c0dc3_67903875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_121387404164a6e42f8c0dc3_67903875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_129772394364a6e42f8c45c6_69598529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_129772394364a6e42f8c45c6_69598529',
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
class Block_99318687864a6e42f8c6111_37145431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_99318687864a6e42f8c6111_37145431',
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
