<?php
/* Smarty version 4.3.1, created on 2023-07-10 14:51:53
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\quizList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ac1b09ed9965_32252990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6824f738af9f4c23b7f375c3f91f685c7788e79' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\quizList.tpl',
      1 => 1688999856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64ac1b09ed9965_32252990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180955404064ac1b09ebef70_49383223', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114320060664ac1b09ec0fc9_08217260', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68915499064ac1b09ec2e45_71093103', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124451407964ac1b09ec6ab1_56697841', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35704335064ac1b09ec8987_24758951', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_180955404064ac1b09ebef70_49383223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_180955404064ac1b09ebef70_49383223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Quiz List
<?php
}
}
/* {/block "title"} */
/* {block "style"} */
class Block_114320060664ac1b09ec0fc9_08217260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_114320060664ac1b09ec0fc9_08217260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="../front/css/Quiz_List.css">
    <?php echo '<script'; ?>
 src="../front/scripts/listing.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "style"} */
/* {block "naveBar"} */
class Block_68915499064ac1b09ec2e45_71093103 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_68915499064ac1b09ec2e45_71093103',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_124451407964ac1b09ec6ab1_56697841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_124451407964ac1b09ec6ab1_56697841',
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
class Block_35704335064ac1b09ec8987_24758951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_35704335064ac1b09ec8987_24758951',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'res');
$_smarty_tpl->tpl_vars['res']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->do_else = false;
?>
        <div class="container" style="background:white;padding:20px;box-shadow:10px 10px 5px #888;">
            <div class="column">
                <h5>Quiz ID</h5>
            </div>
            <div class="column">
                <h5><?php echo $_smarty_tpl->tpl_vars['res']->value["quizId"];?>
</h5>
            </div><br><br>
            <div class="column">
                <h5>Tile</h5>
            </div>
            <div class="column">
                <h5><?php echo $_smarty_tpl->tpl_vars['res']->value["title"];?>
</h5>
            </div><br><br>
            <div class="column">
                <h5>Description</h5>
            </div>
            <div class="column">
                <h5><?php echo $_smarty_tpl->tpl_vars['res']->value["description"];?>
</h5>
            </div>
            <br><br>
            <div class="column">
                <h5>Number Of Question</h5>
            </div>
            <div class="column">
                <h5><?php echo $_smarty_tpl->tpl_vars['res']->value["questionNumbers"];?>
</h5>
            </div>
            <form id="myForm" method="post" action="adminWelcome.php?page=editQuiz"></form>
            <a onclick='getAllQuizData(<?php echo $_smarty_tpl->tpl_vars['res']->value["quizId"];?>
)' class="btn btn-primary btn-block">Edit Quiz</a>
            <a href='adminWelcome.php?id=<?php echo $_smarty_tpl->tpl_vars['res']->value["quizId"];?>
&page=viewQuiz' class="btn btn-primary btn-block">View Quiz</a>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block "body"} */
}
