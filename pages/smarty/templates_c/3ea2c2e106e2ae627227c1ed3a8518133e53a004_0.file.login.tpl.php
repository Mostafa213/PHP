<?php
/* Smarty version 4.3.1, created on 2023-07-09 10:47:48
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64aa90545fbba7_82314312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ea2c2e106e2ae627227c1ed3a8518133e53a004' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\login.tpl',
      1 => 1688899664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64aa90545fbba7_82314312 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156738527064aa90545f67d1_68178527', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21400269064aa90545f8bb3_78514117', "style");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26681161864aa90545fa9d8_45026551', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_156738527064aa90545f67d1_68178527 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_156738527064aa90545f67d1_68178527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Login Page
<?php
}
}
/* {/block "title"} */
/* {block "style"} */
class Block_21400269064aa90545f8bb3_78514117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_21400269064aa90545f8bb3_78514117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="../front/css/Login.css">
<?php
}
}
/* {/block "style"} */
/* {block "body"} */
class Block_26681161864aa90545fa9d8_45026551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_26681161864aa90545fa9d8_45026551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="input-field" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="input-field" required>

            <button type="submit" id="submit" name="submit" class="submit-btn">Login</button>
            <div class="error-message"></div>
        </form>
    </div>
<?php
}
}
/* {/block "body"} */
}
