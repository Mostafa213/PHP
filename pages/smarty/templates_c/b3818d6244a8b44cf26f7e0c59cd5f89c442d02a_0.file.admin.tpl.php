<?php
/* Smarty version 4.3.1, created on 2023-07-10 08:18:13
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abbec5abc0d1_02458525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3818d6244a8b44cf26f7e0c59cd5f89c442d02a' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\admin.tpl',
      1 => 1688977035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64abbec5abc0d1_02458525 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112825089864abbec5ab13c9_78216588', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113421093064abbec5ab3b34_61509095', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165539883864abbec5ab5759_93825742', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169500636164abbec5ab92d4_16667411', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194779746664abbec5abaef2_20549215', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_112825089864abbec5ab13c9_78216588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_112825089864abbec5ab13c9_78216588',
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
class Block_113421093064abbec5ab3b34_61509095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_113421093064abbec5ab3b34_61509095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="../front/css/Admin.css">
<?php
}
}
/* {/block "style"} */
/* {block "naveBar"} */
class Block_165539883864abbec5ab5759_93825742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_165539883864abbec5ab5759_93825742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_169500636164abbec5ab92d4_16667411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_169500636164abbec5ab92d4_16667411',
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
class Block_194779746664abbec5abaef2_20549215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_194779746664abbec5abaef2_20549215',
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
                <form action="adminWelcome.php?page=addQuiz" method="post">

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

                    <a href="adminWelcome.php?page=listQuiz" class="btn btn-primary btn-block">List Quiz</a>
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

                    <a href="adminWelcome.php?page=listApplicant" class="btn btn-primary btn-block">List Applicant</a>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
