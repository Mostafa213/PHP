<?php
/* Smarty version 4.3.1, created on 2023-07-10 13:16:54
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\exam.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ac04c650f8e3_76442717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c11ea9e7ee662738147902530e9ffcfd2b711779' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\exam.tpl',
      1 => 1688995008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64ac04c650f8e3_76442717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170606282164ac04c64ec999_33403814', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99918461164ac04c64ef102_53945640', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204227677764ac04c64f0d46_11599923', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103094497664ac04c64f5823_14407049', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162902088364ac04c64f7458_66412558', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_170606282164ac04c64ec999_33403814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_170606282164ac04c64ec999_33403814',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Quiz
<?php
}
}
/* {/block "title"} */
/* {block "style"} */
class Block_99918461164ac04c64ef102_53945640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_99918461164ac04c64ef102_53945640',
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
class Block_204227677764ac04c64f0d46_11599923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_204227677764ac04c64f0d46_11599923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_103094497664ac04c64f5823_14407049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_103094497664ac04c64f5823_14407049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="liClass"><a href="applicant.php?page=home">Home</a></li>
<?php
}
}
/* {/block "homeLink"} */
/* {block "body"} */
class Block_162902088364ac04c64f7458_66412558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_162902088364ac04c64f7458_66412558',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <br><br>
    <form method="post" action="../pages/redirectionsForApplicant.php">
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
        <input type="hidden" name="function" value="correct">

        <div style="text-align: center;">
            <button type="submit" class="btn">Submit</button>
        </div>
    </form>
<?php
}
}
/* {/block "body"} */
}
