<?php
/* Smarty version 4.3.1, created on 2023-07-06 12:56:19
  from 'C:\wamp64\www\Applicant Quiz - Edit\front\applicantList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a6b9f34f2e92_59658143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4821e952d341c95c786aca838b1694dbdd605f8a' => 
    array (
      0 => 'C:\\wamp64\\www\\Applicant Quiz - Edit\\front\\applicantList.tpl',
      1 => 1688648175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navTemp.tpl' => 1,
  ),
),false)) {
function content_64a6b9f34f2e92_59658143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78245362464a6b9f34bca12_92244044', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55122897764a6b9f34bea41_73226146', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74503311764a6b9f34c0676_21850963', "naveBar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47319229264a6b9f34c40f1_44658422', "homeLink");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136732569064a6b9f34c5d10_77783816', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "masterTemp.tpl");
}
/* {block "title"} */
class Block_78245362464a6b9f34bca12_92244044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_78245362464a6b9f34bca12_92244044',
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
class Block_55122897764a6b9f34bea41_73226146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_55122897764a6b9f34bea41_73226146',
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
class Block_74503311764a6b9f34c0676_21850963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naveBar' => 
  array (
    0 => 'Block_74503311764a6b9f34c0676_21850963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:navTemp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "naveBar"} */
/* {block "homeLink"} */
class Block_47319229264a6b9f34c40f1_44658422 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homeLink' => 
  array (
    0 => 'Block_47319229264a6b9f34c40f1_44658422',
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
class Block_136732569064a6b9f34c5d10_77783816 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_136732569064a6b9f34c5d10_77783816',
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
