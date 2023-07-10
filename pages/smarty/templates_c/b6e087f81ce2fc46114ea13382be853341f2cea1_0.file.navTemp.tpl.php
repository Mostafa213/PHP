<?php
/* Smarty version 4.3.1, created on 2023-07-09 08:16:57
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\masters\navTemp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64aa6cf99c2012_71519608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6e087f81ce2fc46114ea13382be853341f2cea1' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\masters\\navTemp.tpl',
      1 => 1688558913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64aa6cf99c2012_71519608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<header>
    <nav>
        <ul>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40356179064aa6cf99bff01_07981423', "homeLink");
?>

            <li style="float: right;"><a href="../Back_end/logout.php">Logout</a></li>
        </ul>
    </nav>
</header><?php }
/* {block "homeLink"} */
class Block_40356179064aa6cf99bff01_07981423 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_40356179064aa6cf99bff01_07981423',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "homeLink"} */
}
