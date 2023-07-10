<?php
/* Smarty version 4.3.1, created on 2023-07-06 09:13:29
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\quizList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a685b9304344_06385611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a05a5556ebb9d519490281aa5e75a081898fa400' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\quizList.tpl',
      1 => 1688634807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navTemp.tpl' => 1,
  ),
),false)) {
function content_64a685b9304344_06385611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180899256564a685b92d8875_06991926', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175368331764a685b92daa71_07666971', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191477186064a685b92e2918_22487834', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190784127664a685b92ed935_57686484', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109380322764a685b92f1ec2_94661760', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "masterTemp.tpl");
}
/* {block "title"} */
class Block_180899256564a685b92d8875_06991926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_180899256564a685b92d8875_06991926',
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
class Block_175368331764a685b92daa71_07666971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_175368331764a685b92daa71_07666971',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <head>
        <link rel="stylesheet" href="css/Quiz_List.css">
        <?php echo '<script'; ?>
 src="scripts/listing.js"><?php echo '</script'; ?>
>
    </head>
<?php
}
}
/* {/block "style"} */
/* {block "naveBar"} */
class Block_191477186064a685b92e2918_22487834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_191477186064a685b92e2918_22487834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_190784127664a685b92ed935_57686484 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_190784127664a685b92ed935_57686484',
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
class Block_109380322764a685b92f1ec2_94661760 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_109380322764a685b92f1ec2_94661760',
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
            <form id="myForm" method="post" action="editQuiz.php"></form>
            <a onclick='callPHPMethod(<?php echo $_smarty_tpl->tpl_vars['res']->value["quizId"];?>
)' class="btn btn-primary btn-block">Edit Quiz</a>
            <a href='viewQuiz.php?varname=<?php echo $_smarty_tpl->tpl_vars['res']->value["quizId"];?>
' class="btn btn-primary btn-block">View Quiz</a>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block "body"} */
}
