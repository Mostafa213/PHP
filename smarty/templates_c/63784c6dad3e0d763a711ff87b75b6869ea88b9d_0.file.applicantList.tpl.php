<?php
/* Smarty version 4.3.1, created on 2023-07-06 15:57:04
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\templates\pages\applicantList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a6e4509178a0_14569589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63784c6dad3e0d763a711ff87b75b6869ea88b9d' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\templates\\pages\\applicantList.tpl',
      1 => 1688658765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../masters/navTemp.tpl' => 1,
  ),
),false)) {
function content_64a6e4509178a0_14569589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161749546864a6e4508d4361_89928635', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195494329464a6e4508d6f52_78343686', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58788050164a6e4508d9650_88505378', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26110586764a6e4508de3b1_55195654', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203538813064a6e4508e0a55_09574273', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../masters/masterTemp.tpl");
}
/* {block "title"} */
class Block_161749546864a6e4508d4361_89928635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_161749546864a6e4508d4361_89928635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Applicant List
<?php
}
}
/* {/block "title"} */
/* {block "style"} */
class Block_195494329464a6e4508d6f52_78343686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_195494329464a6e4508d6f52_78343686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <head>
        <link rel="stylesheet" href="css\Applicant_List.css">
        </style>
        <?php echo '<script'; ?>
 src="scripts/listing.js">
        <?php echo '</script'; ?>
>
    </head>
<?php
}
}
/* {/block "style"} */
/* {block "naveBar"} */
class Block_58788050164a6e4508d9650_88505378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_58788050164a6e4508d9650_88505378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../masters/navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_26110586764a6e4508de3b1_55195654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_26110586764a6e4508de3b1_55195654',
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
class Block_203538813064a6e4508e0a55_09574273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_203538813064a6e4508e0a55_09574273',
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
        <?php $_smarty_tpl->_assignInScope('is_solved', (($_smarty_tpl->tpl_vars['res']->value["result"] == null) && ($_smarty_tpl->tpl_vars['res']->value["quizID"] != null)));?>
        <?php $_smarty_tpl->_assignInScope('is_done', (($_smarty_tpl->tpl_vars['res']->value["result"] != null)));?>
        <div class="container" style="background:white;padding:20px;box-shadow:10px 10px 5px #888;">
            <div class="column">
                <h5>ID</h5>
            </div>
            <div class="column">
                <h5> <?php echo $_smarty_tpl->tpl_vars['res']->value["userID"];?>
 </h5>
            </div>
            <div class="column">
                <h5>User Name</h5>
            </div>
            <div class="column">
                <h5> <?php echo $_smarty_tpl->tpl_vars['res']->value["username"];?>
 </h5>
            </div>
            <div class="column">
                <h5>Password</h5>
            </div>
            <div class="column">
                <h5> <?php echo $_smarty_tpl->tpl_vars['res']->value["password"];?>
 </h5>
            </div>
            <div class="column">
                <h5>Email</h5>
            </div>
            <div class="column">
                <h5> <?php echo $_smarty_tpl->tpl_vars['res']->value["email"];?>
 </h5>
            </div>
            <div class="column">
                <h5>Name</h5>
            </div>
            <div class="column">
                <h5> <?php echo $_smarty_tpl->tpl_vars['res']->value["name"];?>
 </h5>
            </div>
            <div class="column">
                <h5>Quiz ID</h5>
            </div>
            <div class="column">
                <h5> <?php echo $_smarty_tpl->tpl_vars['res']->value["quizID"];?>
 </h5>
            </div>
            <div class="column">
                <h5>Result</h5>
            </div>
            <div class="column">
                <h5> <?php echo $_smarty_tpl->tpl_vars['res']->value["result"];?>
 </h5>
            </div>
            <div class="column">
                <h5>Number Of Quiz Questions</h5>
            </div>
            <div class="column">
                <h5> <?php echo $_smarty_tpl->tpl_vars['res']->value["questionNumber"];?>
 </h5>
            </div>
            <div class="column">
                <h5>Quize Complete</h5>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['is_done']->value) {?>
                <div class="column">
                    <h5>Done</h5>
                </div>
                <a href="listResult.php?quizID=<?php echo $_smarty_tpl->tpl_vars['res']->value["quizID"];?>
&userID=<?php echo $_smarty_tpl->tpl_vars['res']->value["userID"];?>
" class="btn btn-primary btn-block">View
                    Result</a>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['is_solved']->value) {?>
                    <div class="column">
                        <h5>Not Solved Yet</h5>
                    </div>

                <?php } else { ?>
                    <div class="column">
                        <h5>In progress</h5>
                    </div>
                    <a onclick="callMyFunction(<?php echo $_smarty_tpl->tpl_vars['res']->value['userID'];?>
 , '<?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>
')" class="btn btn-primary btn-block">Add Quiz</a>
                    <label for="QuizIId"></label>
                    <input type="number" id="QuizIId" name="QuizIId" placeholder="Enter Quiz ID" value="">
                <?php }?>
            <?php }?>

        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block "body"} */
}
