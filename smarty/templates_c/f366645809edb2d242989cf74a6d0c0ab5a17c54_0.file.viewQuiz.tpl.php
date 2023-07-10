<?php
/* Smarty version 4.3.1, created on 2023-07-06 15:56:53
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\viewQuiz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a6e4451e6d59_53492793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f366645809edb2d242989cf74a6d0c0ab5a17c54' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\viewQuiz.tpl',
      1 => 1688658681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64a6e4451e6d59_53492793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40765427564a6e4451b7fb9_70572165', "title");
?>

<?php $_smarty_tpl->_assignInScope('i', 0);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97317574364a6e4451c1896_29113320', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30720193864a6e4451c3f07_52792116', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126583451064a6e4451c7c32_76522037', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21509476764a6e4451c97c5_77598618', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_40765427564a6e4451b7fb9_70572165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_40765427564a6e4451b7fb9_70572165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    MCQ Exam
<?php
}
}
/* {/block "title"} */
/* {block "style"} */
class Block_97317574364a6e4451c1896_29113320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_97317574364a6e4451c1896_29113320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <head>
        <link rel="stylesheet" href="css/exam.css">
    </head>
<?php
}
}
/* {/block "style"} */
/* {block "naveBar"} */
class Block_30720193864a6e4451c3f07_52792116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_30720193864a6e4451c3f07_52792116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_126583451064a6e4451c7c32_76522037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_126583451064a6e4451c7c32_76522037',
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
class Block_21509476764a6e4451c97c5_77598618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_21509476764a6e4451c97c5_77598618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <br>
    <h1>MCQ Exam</h1>

    <form action="quizList.php">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question', false, 'i');
$_smarty_tpl->tpl_vars['question']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['question']->value['ansnum'] == 'single') {?>
                <div class="question">
                    <h2>Question (<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
)</h2>
                    <p> <?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</p>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['question']->value['options'], 'answer', false, 'option');
$_smarty_tpl->tpl_vars['answer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value => $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->do_else = false;
?>
                        <label>
                            <input type="radio" name="answer[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['option']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['answer']->value;?>

                        </label>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php } else { ?>
                <div class="question">
                    <h2>Question (<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
)</h2>
                    <p> <?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</p>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['question']->value['options'], 'answer', false, 'option');
$_smarty_tpl->tpl_vars['answer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value => $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->do_else = false;
?>
                        <label>
                            <input type="checkbox" name="answer<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['option']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['answer']->value;?>

                        </label>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <div style="text-align: center;">
            <button type="submit" class="btn">Back</button>
        </div>
    </form>
<?php
}
}
/* {/block "body"} */
}
