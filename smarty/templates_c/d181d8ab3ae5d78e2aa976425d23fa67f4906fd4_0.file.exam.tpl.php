<?php
/* Smarty version 4.3.1, created on 2023-07-06 15:56:09
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\exam.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a6e419cfa0b9_42783713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd181d8ab3ae5d78e2aa976425d23fa67f4906fd4' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\exam.tpl',
      1 => 1688658774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64a6e419cfa0b9_42783713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142998800364a6e419cd95d7_55989242', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84641896364a6e419cdb5d9_29278757', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73990492564a6e419cdd203_43817469', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71106834464a6e419ce0ec8_15947194', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183500590164a6e419ce2aa2_98890188', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_142998800364a6e419cd95d7_55989242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_142998800364a6e419cd95d7_55989242',
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
class Block_84641896364a6e419cdb5d9_29278757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_84641896364a6e419cdb5d9_29278757',
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
class Block_73990492564a6e419cdd203_43817469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_73990492564a6e419cdd203_43817469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_71106834464a6e419ce0ec8_15947194 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_71106834464a6e419ce0ec8_15947194',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="liClass"><a href="applicant.php">Home</a></li>
<?php
}
}
/* {/block "homeLink"} */
/* {block "body"} */
class Block_183500590164a6e419ce2aa2_98890188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_183500590164a6e419ce2aa2_98890188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<br><br>


    <form method="post" action="../Back_end/user.php">
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
