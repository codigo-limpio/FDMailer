<?php /* Smarty version Smarty-3.1.15, created on 2015-12-25 00:19:00
         compiled from "templates\\mailing\formato.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30109567c74e6686945-91063065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8426b16fe938e553ded2786f3a7e7f5867a208e5' => 
    array (
      0 => 'templates\\\\mailing\\formato.tpl',
      1 => 1450998271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30109567c74e6686945-91063065',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567c74e68968f9_53918333',
  'variables' => 
  array (
    'imagen' => 0,
    'asunto' => 0,
    'cuerpo' => 0,
    'extras' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567c74e68968f9_53918333')) {function content_567c74e68968f9_53918333($_smarty_tpl) {?><html>
    <head>
        <title>Mailing</title>
    </head>
    <body vlink="#548ED4" alink="#005097">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr bgcolor="#f4f5f7">
                <td height="80" valign="middle" bgcolor="#f4f5f7">
                    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="left" valign="middle">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" width="230" height="29">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr  bgcolor="#ecf0f1">
                <td height="2"  bgcolor="#ecf0f1"></td>
            </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <table width="600" border="0" cellspacing="0" cellpadding="0"  align="center">
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <font face="Helvetica Neue,Helvetica,Arial,sans-serif" color="#29343f" size="3"><?php echo $_smarty_tpl->tpl_vars['asunto']->value;?>
</font>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    <table width="600" border="0" cellspacing="0" cellpadding="0"  align="center">
                        <tr>
                            <td>
                                <font face="Helvetica Neue,Helvetica,Arial,sans-serif" color="#29343f" size="2"><?php echo $_smarty_tpl->tpl_vars['cuerpo']->value;?>
</font>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    <?php echo $_smarty_tpl->tpl_vars['extras']->value;?>

                    <p>&nbsp;</p>
                </td>
            </tr>
        </table>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr  bgcolor="#ecf0f1">
                <td height="2"></td>
            </tr>
            <tr bgcolor="#f4f5f7">
                <td height="80" valign="middle" bgcolor="#f4f5f7">
                    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="center" valign="middle">
                                <font face="Helvetica Neue,Helvetica,Arial,sans-serif" color="#666f78" size="2">Portal de Dropsize &reg;  2014-2016.</font>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html><?php }} ?>
