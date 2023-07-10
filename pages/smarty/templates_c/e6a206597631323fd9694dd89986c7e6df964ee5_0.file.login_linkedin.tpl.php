<?php
/* Smarty version 4.3.1, created on 2023-07-09 11:13:29
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\login_linkedin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64aa965934aae9_03873709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6a206597631323fd9694dd89986c7e6df964ee5' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\login_linkedin.tpl',
      1 => 1688900453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64aa965934aae9_03873709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156514294264aa9659342b65_88340586', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176649296464aa9659344cb3_25623339', "style");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58221209664aa9659346913_62261692', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_156514294264aa9659342b65_88340586 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_156514294264aa9659342b65_88340586',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Quiz
<?php
}
}
/* {/block "title"} */
/* {block "style"} */
class Block_176649296464aa9659344cb3_25623339 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_176649296464aa9659344cb3_25623339',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="../front/css/Linkedin.css">
<?php
}
}
/* {/block "style"} */
/* {block "body"} */
class Block_58221209664aa9659346913_62261692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_58221209664aa9659346913_62261692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-6 offset-3" style="margin:auto;background:white;padding:20px;box-shadow:10px 10px 5px #888;">
                <div class="panel-heading">
                    <h1>Login Linkedin</h1>
                </div>
                <div class="panel-body">
                <a href="<?php echo $_smarty_tpl->tpl_vars['linkedin']->value->getAuthUrl();?>
" class="btn btn-primary btn-block">Linkedin Register</a>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
