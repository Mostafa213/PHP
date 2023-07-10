<?php
/* Smarty version 4.3.1, created on 2023-07-05 12:08:46
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\navTemp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a55d4ebc0269_60337408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be3dfc0d37e83748c102cb7667aeced9e6a5b489' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\navTemp.tpl',
      1 => 1688558913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a55d4ebc0269_60337408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<header>
    <nav>
        <ul>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23915032864a55d4ebbf092_43375882', "homeLink");
?>

            <li style="float: right;"><a href="../Back_end/logout.php">Logout</a></li>
        </ul>
    </nav>
</header><?php }
/* {block "homeLink"} */
class Block_23915032864a55d4ebbf092_43375882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_23915032864a55d4ebbf092_43375882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "homeLink"} */
}
