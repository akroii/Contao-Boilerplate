<?php
$GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'][] = 'id';
$GLOBALS['TL_DCA']['tl_page']['list']['label']['format'] = '%s <span style="color: #aaaaaa; padding-left: 3px;">(ID: %s)</span>';

$GLOBALS['TL_DCA']['tl_article']['list']['label']['fields'][] = 'id';
$GLOBALS['TL_DCA']['tl_article']['list']['label']['format'] = '%s <span style="color: #aaaaaa; padding-left: 3px;">(%s, ID: %s)</span>';

$GLOBALS['TL_DCA']['tl_content']['fields']['type']['default'] = 'headline';
$GLOBALS['TL_DCA']['tl_content']['fields']['headline']['options'] = array('h2', 'h3', 'h4', 'h5', 'h6', 'span');
// $GLOBALS['TL_DCA']['tl_form_field']['fields']['type']['default'] = 'hidden';

if (!\BackendUser::getInstance()->isAdmin) {
    foreach ((array) $GLOBALS['TL_HOOKS']['getSystemMessages'] as $k => $arrHook) {
        if ($arrHook[1] == 'versionCheck') {
            unset($GLOBALS['TL_HOOKS']['getSystemMessages'][$k]);
        }
    }
}
unset($GLOBALS['TL_DCA']['tl_article']['fields']['space'],
    $GLOBALS['TL_DCA']['tl_content']['fields']['space'],
    $GLOBALS['TL_DCA']['tl_module'] ['fields']['space'],
    $GLOBALS['TL_DCA']['tl_article']['fields']['imagemargin'],
    $GLOBALS['TL_DCA']['tl_content']['fields']['imagemargin'],
    $GLOBALS['TL_DCA']['tl_module']['fields']['imagemargin'],
    $GLOBALS['TL_DCA']['tl_news']['fields']['imagemargin'],
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['imagemargin']
);
