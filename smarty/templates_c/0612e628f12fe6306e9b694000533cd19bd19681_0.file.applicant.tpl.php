<?php
/* Smarty version 4.3.1, created on 2023-07-05 13:20:44
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\applicant.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a56e2c094b01_99728418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0612e628f12fe6306e9b694000533cd19bd19681' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\applicant.tpl',
      1 => 1688562910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navTemp.tpl' => 1,
  ),
),false)) {
function content_64a56e2c094b01_99728418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29176838264a56e2c0784a3_87370397', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80266931164a56e2c07bc79_75878459', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202576922164a56e2c07ec20_16897325', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72824995364a56e2c084f90_92889406', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13280620664a56e2c088b57_41691829', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "masterTemp.tpl");
}
/* {block "title"} */
class Block_29176838264a56e2c0784a3_87370397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_29176838264a56e2c0784a3_87370397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Applicant Home
<?php
}
}
/* {/block "title"} */
/* {block "style"} */
class Block_80266931164a56e2c07bc79_75878459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_80266931164a56e2c07bc79_75878459',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <head>
        <link rel="stylesheet" href="css/Applicant.css">
    </head>
<?php
}
}
/* {/block "style"} */
/* {block "naveBar"} */
class Block_202576922164a56e2c07ec20_16897325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_202576922164a56e2c07ec20_16897325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_72824995364a56e2c084f90_92889406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_72824995364a56e2c084f90_92889406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="liClass"><a href="#">Home</a></li>
<?php
}
}
/* {/block "homeLink"} */
/* {block "body"} */
class Block_13280620664a56e2c088b57_41691829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13280620664a56e2c088b57_41691829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Quizzes</h1>
    <?php if ($_smarty_tpl->tpl_vars['is_assigned_quiz']->value) {?>
        <div class="quiz">
            <h2> <?php echo $_smarty_tpl->tpl_vars['quizzes']->value['title'];?>
 </h2>
            <p> <?php echo $_smarty_tpl->tpl_vars['quizzes']->value['description'];?>
</p>
            <?php if ($_smarty_tpl->tpl_vars['is_solved_quiz']->value) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['quizzes']->value['link'];?>
" class="btn">Start Quiz</a>
            <?php } else { ?>
                <a class="btndone">You Solved The Quiz</a>
            <?php }?>
        </div>
    <?php } else { ?>
        <div class="quiz">
            <h2>No Quizzes Yet..</h2>
            <p>The Admin Will Assign One For You</p>

        </div>
    <?php }
}
}
/* {/block "body"} */
}
