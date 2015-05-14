<?php
/**
 Admin Page Framework v3.5.6 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class Fcache_AdminPageFramework_Property_Page extends Fcache_AdminPageFramework_Property_Base {
    public $_sPropertyType = 'page';
    public $sFieldsType = 'page';
    public $sClassName;
    public $sClassHash;
    public $sCapability = 'manage_options';
    public $sPageHeadingTabTag = 'h2';
    public $sInPageTabTag = 'h3';
    public $sDefaultPageSlug;
    public $aPages = array();
    public $aHiddenPages = array();
    public $aRegisteredSubMenuPages = array();
    public $aRootMenu = array('sTitle' => null, 'sPageSlug' => null, 'sIcon16x16' => null, 'iPosition' => null, 'fCreateRoot' => null,);
    public $aInPageTabs = array();
    public $aDefaultInPageTabs = array();
    public $aPluginDescriptionLinks = array();
    public $aPluginTitleLinks = array();
    public $sOptionKey = '';
    public $aHelpTabs = array();
    public $sFormEncType = 'multipart/form-data';
    public $sThickBoxButtonUseThis = '';
    public $bEnableForm = false;
    public $bShowPageTitle = true;
    public $bShowPageHeadingTabs = true;
    public $bShowInPageTabs = true;
    public $aAdminNotices = array();
    public $aDisallowedQueryKeys = array('settings-updated', 'confirmation', 'field_errors');
    public $sTargetFormPage = '';
    public $_bBuiltMenu = false;
    public $_bDisableSavingOptions = false;
    public $aPageHooks = array();
    public $sWrapperClassAttribute = 'wrap';
    public function __construct($oCaller, $sCallerPath, $sClassName, $sOptionKey, $sCapability = 'manage_options', $sTextDomain = 'admin-page-framework') {
        parent::__construct($oCaller, $sCallerPath, $sClassName, $sCapability, $sTextDomain, $this->sFieldsType);
        $this->sTargetFormPage = $_SERVER['REQUEST_URI'];
        $this->sOptionKey = $sOptionKey ? $sOptionKey : $sClassName;
        $this->_bDisableSavingOptions = '' === $sOptionKey ? true : false;
        $GLOBALS['aFcache_AdminPageFramework']['aPageClasses'] = isset($GLOBALS['aFcache_AdminPageFramework']['aPageClasses']) && is_array($GLOBALS['aFcache_AdminPageFramework']['aPageClasses']) ? $GLOBALS['aFcache_AdminPageFramework']['aPageClasses'] : array();
        $GLOBALS['aFcache_AdminPageFramework']['aPageClasses'][$sClassName] = $oCaller;
        add_filter("option_page_capability_{$this->sOptionKey}", array($this, '_replyToGetCapability'));
    }
    protected function _isAdminPage() {
        if (!is_admin()) {
            return false;
        }
        return isset($_GET['page']);
    }
    protected function _getOptions() {
        $_aOptions = $this->oUtil->addAndApplyFilter($this->oCaller, 'options_' . $this->sClassName, $this->sOptionKey ? get_option($this->sOptionKey, array()) : array());
        $_aLastInput = isset($_GET['field_errors']) && $_GET['field_errors'] ? $this->_getLastInput() : array();
        $_aOptions = $_aLastInput + $this->oUtil->getAsArray($_aOptions);
        return $_aOptions;
    }
    public function updateOption($aOptions = null) {
        if ($this->_bDisableSavingOptions) {
            return;
        }
        return update_option($this->sOptionKey, null !== $aOptions ? $aOptions : $this->aOptions);
    }
    public function isPageAdded($sPageSlug = '') {
        $sPageSlug = trim($sPageSlug);
        $sPageSlug = $sPageSlug ? $sPageSlug : $this->getCurrentPageSlug();
        return isset($this->aPages[$sPageSlug]);
    }
    public function getCurrentPageSlug() {
        return $this->oUtil->getElement($_GET, 'page', '');
    }
    public function getCurrentTabSlug($sCurrentPageSlug = '') {
        if (isset($_GET['tab']) && $_GET['tab']) {
            return $_GET['tab'];
        }
        $sCurrentPageSlug = $sCurrentPageSlug ? $sCurrentPageSlug : $this->getCurrentPageSlug();
        return $sCurrentPageSlug ? $this->getDefaultInPageTab($sCurrentPageSlug) : '';
    }
    public function getCurrentTab($sCurrentPageSlug = '') {
        return $this->getCurrentTabSlug($sCurrentPageSlug);
    }
    public function getDefaultInPageTab($sPageSlug) {
        if (!$sPageSlug) {
            return '';
        }
        return $this->oUtil->getElement($this->aDefaultInPageTabs, $sPageSlug, '');
    }
    public function getDefaultOptions($aFields) {
        $_aDefaultOptions = array();
        foreach ($aFields as $_sSectionID => $_aFields) {
            foreach ($_aFields as $_sFieldID => $_aField) {
                $_vDefault = $this->_getDefautValue($_aField);
                if (isset($_aField['section_id']) && $_aField['section_id'] != '_default') {
                    $_aDefaultOptions[$_aField['section_id']][$_sFieldID] = $_vDefault;
                } else {
                    $_aDefaultOptions[$_sFieldID] = $_vDefault;
                }
            }
        }
        return $_aDefaultOptions;
    }
    private function _getDefautValue($aField) {
        $_aSubFields = $this->oUtil->getIntegerKeyElements($aField);
        if (count($_aSubFields) == 0) {
            return $this->oUtil->getElement($aField, 'value', $this->oUtil->getElement($aField, 'default', null));
        }
        $_aDefault = array();
        array_unshift($_aSubFields, $aField);
        foreach ($_aSubFields as $_iIndex => $_aField) {
            $_aDefault[$_iIndex] = $this->oUtil->getElement($_aField, 'value', $this->oUtil->getElement($_aField, 'default', null));
        }
        return $_aDefault;
    }
    public function _replyToGetCapability() {
        return $this->sCapability;
    }
}