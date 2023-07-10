<?php
/* Smarty version 4.3.1, created on 2023-07-10 14:52:08
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\viewQuiz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ac1b18ab87a1_13251373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '496c72662accbb9631717d09182e4900d635cb07' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\viewQuiz.tpl',
      1 => 1688977085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64ac1b18ab87a1_13251373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103989614164ac1b18a90028_78808685', "title");
?>

<?php $_smarty_tpl->_assignInScope('i', 0);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80126143764ac1b18a93fc8_90910307', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116430044564ac1b18a95c62_01504757', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124667592464ac1b18a995e0_03022959', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183549220764ac1b18a9b197_31278939', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_103989614164ac1b18a90028_78808685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_103989614164ac1b18a90028_78808685',
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
class Block_80126143764ac1b18a93fc8_90910307 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_80126143764ac1b18a93fc8_90910307',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="../front/css/exam.css">
<?php
}
}
/* {/block "style"} */
/* {block "naveBar"} */
class Block_116430044564ac1b18a95c62_01504757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_116430044564ac1b18a95c62_01504757',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_124667592464ac1b18a995e0_03022959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_124667592464ac1b18a995e0_03022959',
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
class Block_183549220764ac1b18a9b197_31278939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_183549220764ac1b18a9b197_31278939',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <br>
    <h1>MCQ Exam</h1>

    <form>
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
            <a href="adminWelcome.php?page=listQuiz" class="btn">Back</a>
        </div>
    </form>
<?php
}
}
/* {/block "body"} */
}
