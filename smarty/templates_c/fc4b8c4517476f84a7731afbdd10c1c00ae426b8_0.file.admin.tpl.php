<?php
/* Smarty version 4.3.1, created on 2023-07-06 15:56:21
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a6e425a96ce5_70324947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc4b8c4517476f84a7731afbdd10c1c00ae426b8' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\admin.tpl',
      1 => 1688658723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64a6e425a96ce5_70324947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187530197864a6e425a8c5e1_90251597', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161193610664a6e425a8e634_91366513', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169729949264a6e425a90234_18521587', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41290756564a6e425a93ed2_21266150', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2514864964a6e425a95af7_74170394', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_187530197864a6e425a8c5e1_90251597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_187530197864a6e425a8c5e1_90251597',
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
class Block_161193610664a6e425a8e634_91366513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_161193610664a6e425a8e634_91366513',
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
class Block_169729949264a6e425a90234_18521587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_169729949264a6e425a90234_18521587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_41290756564a6e425a93ed2_21266150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_41290756564a6e425a93ed2_21266150',
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
class Block_2514864964a6e425a95af7_74170394 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2514864964a6e425a95af7_74170394',
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
