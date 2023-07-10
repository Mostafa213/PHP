<?php
/* Smarty version 4.3.1, created on 2023-07-10 08:18:09
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\applicant.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abbec15d4b97_62189835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe6c07cbb6a25e571d5ccf6c5ad3aee399c8094d' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\applicant.tpl',
      1 => 1688977039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64abbec15d4b97_62189835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124229905664abbec15c0e11_63029950', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54382504864abbec15c3072_82299408', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4455222164abbec15c4fe4_85479261', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59188986864abbec15c8db2_73422203', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198192185064abbec15ca9d1_76659918', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_124229905664abbec15c0e11_63029950 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_124229905664abbec15c0e11_63029950',
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
class Block_54382504864abbec15c3072_82299408 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_54382504864abbec15c3072_82299408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="../front/css/Applicant.css">
<?php
}
}
/* {/block "style"} */
/* {block "naveBar"} */
class Block_4455222164abbec15c4fe4_85479261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_4455222164abbec15c4fe4_85479261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_59188986864abbec15c8db2_73422203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_59188986864abbec15c8db2_73422203',
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
class Block_198192185064abbec15ca9d1_76659918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_198192185064abbec15ca9d1_76659918',
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
                <a href="applicant.php?page=solveTheExam" class="btn">Start Quiz</a>
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
