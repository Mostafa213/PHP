<?php
/* Smarty version 4.3.1, created on 2023-07-06 15:56:30
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\quizList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a6e42e91a7e8_91218326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bcc4c4ee0770f7ad1d4516140b961ebd914c76c' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\quizList.tpl',
      1 => 1688658751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64a6e42e91a7e8_91218326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149339318364a6e42e8fd9f6_37353838', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101273776264a6e42e8ffa66_64139201', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187944979064a6e42e901647_40976339', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69021485364a6e42e904f87_35912745', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83467658464a6e42e906b46_60374205', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_149339318364a6e42e8fd9f6_37353838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_149339318364a6e42e8fd9f6_37353838',
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
class Block_101273776264a6e42e8ffa66_64139201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_101273776264a6e42e8ffa66_64139201',
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
class Block_187944979064a6e42e901647_40976339 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_187944979064a6e42e901647_40976339',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_69021485364a6e42e904f87_35912745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_69021485364a6e42e904f87_35912745',
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
class Block_83467658464a6e42e906b46_60374205 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_83467658464a6e42e906b46_60374205',
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
