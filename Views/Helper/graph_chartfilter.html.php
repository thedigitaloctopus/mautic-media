<?php

/*
 * @copyright   2018 Mautic Contributors. All rights reserved
 * @author      Digital Media Solutions, LLC
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
if (!isset($class)) {
    $class = '';
}
?>

<?php echo $view['form']->start(
    $chartFilterForm,
    ['attr' => ['class' => 'form-filter '.$class, 'style' => 'max-width: 380px']]
); ?>
<div class="input-group">
        <span class="input-group-addon">
            <?php echo $view['form']->label($chartFilterForm['date_from']); ?>
        </span>
    <?php echo $view['form']->widget($chartFilterForm['date_from']); ?>
    <span class="input-group-addon" style="border-left: 0;border-right: 0;">
            <?php echo $view['form']->label($chartFilterForm['date_to']); ?>
        </span>
    <?php echo $view['form']->widget($chartFilterForm['date_to']); ?>
    <span class="input-group-btn">
            <?php echo $view['form']->row($chartFilterForm['apply']); ?>
        </span>
</div>
<?php echo $view['form']->end($chartFilterForm); ?>
<script>
    /**
     * Initialize graph date range selectors
     */
    mQuery('#media_chart_date_from:first, #media_chart_date_to:first').datetimepicker({
        format: 'M j, Y',
        onShow: function (ct) {
            this.setOptions({
                maxDate: mQuery(this).val() ? new Date(mQuery(this).val()) : false
            });
        },
        timepicker: false,
        scrollMonth: false,
        scrollInput: false
    });
</script>