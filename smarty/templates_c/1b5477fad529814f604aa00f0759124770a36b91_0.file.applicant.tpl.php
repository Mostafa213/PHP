<?php
/* Smarty version 4.3.1, created on 2023-07-06 15:56:07
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\applicant.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a6e417605749_39149281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b5477fad529814f604aa00f0759124770a36b91' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\applicant.tpl',
      1 => 1688658732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64a6e417605749_39149281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157366485464a6e4175f1db3_71924745', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189726240864a6e4175f3e51_41495022', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100545623664a6e4175f5a83_02111808', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123456705664a6e4175f9518_48795770', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22112705264a6e4175fb0f8_06511821', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_157366485464a6e4175f1db3_71924745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_157366485464a6e4175f1db3_71924745',
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
class Block_189726240864a6e4175f3e51_41495022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_189726240864a6e4175f3e51_41495022',
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
class Block_100545623664a6e4175f5a83_02111808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_100545623664a6e4175f5a83_02111808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_123456705664a6e4175f9518_48795770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_123456705664a6e4175f9518_48795770',
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
class Block_22112705264a6e4175fb0f8_06511821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_22112705264a6e4175fb0f8_06511821',
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
