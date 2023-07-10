<?php
/* Smarty version 4.3.1, created on 2023-07-06 15:45:58
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\listResult.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a6e1b6f31818_43742186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9df1a323b9804b55b8893764cca6da6c5a812907' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\listResult.tpl',
      1 => 1688658356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navTemp.tpl' => 1,
  ),
),false)) {
function content_64a6e1b6f31818_43742186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78835915864a6e1b6f16df8_54455805', "title");
?>

<?php $_smarty_tpl->_assignInScope('i', 0);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14269197064a6e1b6f1aeb1_14925873', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141862980464a6e1b6f1ce69_98765188', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136282301864a6e1b6f20ba3_46714510', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145592753264a6e1b6f22856_86586448', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "masterTemp.tpl");
}
/* {block "title"} */
class Block_78835915864a6e1b6f16df8_54455805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_78835915864a6e1b6f16df8_54455805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Applicant Result
<?php
}
}
/* {/block "title"} */
/* {block "style"} */
class Block_14269197064a6e1b6f1aeb1_14925873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_14269197064a6e1b6f1aeb1_14925873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <head>
        <link rel="stylesheet" href="css/ListResult.css">
    </head>
<?php
}
}
/* {/block "style"} */
/* {block "naveBar"} */
class Block_141862980464a6e1b6f1ce69_98765188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_141862980464a6e1b6f1ce69_98765188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_136282301864a6e1b6f20ba3_46714510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_136282301864a6e1b6f20ba3_46714510',
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
class Block_145592753264a6e1b6f22856_86586448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_145592753264a6e1b6f22856_86586448',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <br>
    <h1>Applicant Result</h1>

    <form action="applicantList.php">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question', false, 'i');
$_smarty_tpl->tpl_vars['question']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->do_else = false;
?>

            <div class="question">
                <h2>Question (<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
)</h2>
                <p> <?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</p>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['question']->value['answer'], 'answer', false, 'option');
$_smarty_tpl->tpl_vars['answer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value => $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->do_else = false;
?>
                    <label>
                        <?php echo $_smarty_tpl->tpl_vars['option']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['answer']->value;?>

                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
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
