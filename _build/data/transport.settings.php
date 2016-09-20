<?php
/** @var modX $modx */
/** @var array $sources */

$settings = array();

$tmp = array(
    'token' => array(
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'mstelegram_main',
    ),
    'recipients' => array(
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'mstelegram_main',
    ),
);

foreach ($tmp as $k => $v) {
    /** @var modSystemSetting $setting */
    $setting = $modx->newObject('modSystemSetting');
    $setting->fromArray(array_merge(
        array(
            'key' => 'mstelegram_' . $k,
            'namespace' => PKG_NAME_LOWER,
        ), $v
    ), '', true, true);

    $settings[] = $setting;
}
unset($tmp);

return $settings;
