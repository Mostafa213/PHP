<?php
/* Smarty version 4.3.1, created on 2023-07-09 11:14:05
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\callBack.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64aa967d92f850_80602589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ddc3d848ebeefb3e3539fc58b3f1f2ed5919daf' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\callBack.tpl',
      1 => 1688900167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64aa967d92f850_80602589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214395065564aa967d91c0c1_24661571', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185759562264aa967d91ee10_05101293', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72386076264aa967d921560_80179917', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_214395065564aa967d91c0c1_24661571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_214395065564aa967d91c0c1_24661571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Applicant Login
<?php
}
}
/* {/block "title"} */
/* {block "style"} */
class Block_185759562264aa967d91ee10_05101293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_185759562264aa967d91ee10_05101293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="css/callback.css">
<?php
}
}
/* {/block "style"} */
/* {block "body"} */
class Block_72386076264aa967d921560_80179917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_72386076264aa967d921560_80179917',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container" >
        <div class="column">
                <h5>Name</h5>
                </div>
        <div class="column">
                <h5> <?php echo $_smarty_tpl->tpl_vars['profileObject']->value['localizedFirstName'];?>
   <?php echo $_smarty_tpl->tpl_vars['profileObject']->value['localizedLastName'];?>
 </h5>
                </div>
        <div class="column">
                <h5>User Name</h5>
                </div>
        <div class="column">
                <h5> <?php echo $_smarty_tpl->tpl_vars['emailObject']->value['elements'][0]['handle~']['emailAddress'];?>
 </h5>
                </div>
        <div class="column">
                <h5>Password</h5>
                </div>
        <div class="column">
                <h5> <?php echo $_smarty_tpl->tpl_vars['profileObject']->value['id'];?>
 </h5>
                </div>
        <div class="column">
                <h5>Email</h5>
                </div>
        <div class="column">
                <h5> <?php echo $_smarty_tpl->tpl_vars['emailObject']->value['elements'][0]['handle~']['emailAddress'];?>
 </h5>
                </div>
        <a href="applicant.php?site=home" class="btn btn-primary btn-block">Applicant Site</a>
        </div>
<?php
}
}
/* {/block "body"} */
}
