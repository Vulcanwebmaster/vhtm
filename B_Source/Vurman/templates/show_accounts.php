<!---  start -->
<?php if(empty($accounts)) {?>
THERE ARE NO ACCOUNTS
<?php } else { ?>

            <table border="0" cellspacing="5" cellpadding="5" class="table_clac">
                <tr valign="top">
                    <td>
                        &nbsp;A/C NO.&nbsp;</td>
                        <td>
                            CURRENCY
                        </td>
                        <td>
                            AMOUNT
                        </td>
                        <td>
                            ANTICIPATED +
                        </td>
                        <td>
                            ANTICIPATED -
                        </td>
                        <td>
                            VALUE DATE
                        </td>
                </tr>
<?php foreach($accounts as $account){?>
                <tr>
                    <td>
                        <?php echo $account->getName();?>
                    </td>
                    <td>
                        <?php echo $account->getCurrency();?>
                    </td>
                    <td>
                        <?php echo $account->getAmount();?>
                    </td>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        &nbsp;
                    </td>
<?php

    }
?>
</tr>
<?php

  }
?>

            </table>
