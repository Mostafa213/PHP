<?php
/* Smarty version 4.3.1, created on 2023-07-06 06:44:46
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a662de272cf9_19818917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e00b9cf3155d72f84145fbdc619e262a89be76a5' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\admin.tpl',
      1 => 1688625725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navTemp.tpl' => 1,
  ),
),false)) {
function content_64a662de272cf9_19818917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33283054164a662de260f77_33316980', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125294130264a662de265163_16922028', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160278469764a662de268586_67492373', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62164213764a662de26f8a3_98662440', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201225155264a662de271641_25212907', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "masterTemp.tpl");
}
/* {block "title"} */
class Block_33283054164a662de260f77_33316980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_33283054164a662de260f77_33316980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Welcome Admin
<?php
}
}
/* {/block "title"} */
/* {block "style"} */
class Block_125294130264a662de265163_16922028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_125294130264a662de265163_16922028',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <head>
        <link rel="stylesheet" href="css/Admin.css">
    </head>
<?php
}
}
/* {/block "style"} */
/* {block "naveBar"} */
class Block_160278469764a662de268586_67492373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_160278469764a662de268586_67492373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_62164213764a662de26f8a3_98662440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_62164213764a662de26f8a3_98662440',
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
class Block_201225155264a662de271641_25212907 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_201225155264a662de271641_25212907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <div>
                <div class="panel-heading">
                    <h1>Add Quizz</h1>
                </div>
                <form action="addQuiz.php" method="post">

                    Title<input type="text" name="title" id="content" class="input-field" required="required"></number>
                    Discription<input type="textarea" name="description" id="content" cols=30 rows="1" class="input-field"
                        required="required"></textarea>
                    <br>
                    <button type="submit" class="btn">Add</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="panel-heading">
                    <h1>View Quizzes</h1>
                </div>
                <div class="panel-body">

                    <a href="quizList.php" class="btn btn-primary btn-block">List Quiz</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="panel-heading">
                    <h1>View Applicants</h1>
                </div>
                <div class="panel-body">

                    <a href="applicantList.php" class="btn btn-primary btn-block">List Applicant</a>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
