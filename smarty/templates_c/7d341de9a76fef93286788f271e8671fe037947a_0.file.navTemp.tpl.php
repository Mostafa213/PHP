<?php
/* Smarty version 4.3.1, created on 2023-07-06 15:56:07
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\masters\navTemp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a6e4178cf702_37219746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d341de9a76fef93286788f271e8671fe037947a' => 
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
function content_64a6e4178cf702_37219746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<header>
    <nav>
        <ul>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162991441364a6e4178cd051_47901762', "homeLink");
?>

            <li style="float: right;"><a href="../Back_end/logout.php">Logout</a></li>
        </ul>
    </nav>
</header><?php }
/* {block "homeLink"} */
class Block_162991441364a6e4178cd051_47901762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_162991441364a6e4178cd051_47901762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "homeLink"} */
}
