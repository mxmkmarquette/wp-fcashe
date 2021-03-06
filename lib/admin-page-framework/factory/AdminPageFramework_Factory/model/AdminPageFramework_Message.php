<?php
/**
 Admin Page Framework v3.5.6 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/fcache>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class Fcache_AdminPageFramework_Message {
    public $aMessages = array();
    public $aDefaults = array('option_updated' => 'The options have been updated.', 'option_cleared' => 'The options have been cleared.', 'export' => 'Export', 'export_options' => 'Export Options', 'import_options' => 'Import', 'import_options' => 'Import Options', 'submit' => 'Submit', 'import_error' => 'An error occurred while uploading the import file.', 'uploaded_file_type_not_supported' => 'The uploaded file type is not supported: %1$s', 'could_not_load_importing_data' => 'Could not load the importing data.', 'imported_data' => 'The uploaded file has been imported.', 'not_imported_data' => 'No data could be imported.', 'upload_image' => 'Upload Image', 'use_this_image' => 'Use This Image', 'insert_from_url' => 'Insert from URL', 'reset_options' => 'Are you sure you want to reset the options?', 'confirm_perform_task' => 'Please confirm your action.', 'specified_option_been_deleted' => 'The specified options have been deleted.', 'nonce_verification_failed' => 'A problem occurred while processing the form data. Please try again.', 'send_email' => 'Is it okay to send the email?', 'email_sent' => 'The email has been sent.', 'email_scheduled' => 'The email has been scheduled.', 'email_could_not_send' => 'There was a problem sending the email', 'title' => 'Title', 'author' => 'Author', 'categories' => 'Categories', 'tags' => 'Tags', 'comments' => 'Comments', 'date' => 'Date', 'show_all' => 'Show All', 'powered_by' => 'Powered by', 'settings' => 'Settings', 'manage' => 'Manage', 'select_image' => 'Select Image', 'upload_file' => 'Upload File', 'use_this_file' => 'Use This File', 'select_file' => 'Select File', 'remove_value' => 'Remove Value', 'select_all' => 'Select All', 'select_none' => 'Select None', 'no_term_found' => 'No term found.', 'select' => 'Select', 'insert' => 'Insert', 'use_this' => 'Use This', 'return_to_library' => 'Return to Library', 'queries_in_seconds' => '%1$s queries in %2$s seconds.', 'out_of_x_memory_used' => '%1$s out of %2$s MB (%3$s) memory used.', 'peak_memory_usage' => 'Peak memory usage %1$s MB.', 'initial_memory_usage' => 'Initial memory usage  %1$s MB.', 'allowed_maximum_number_of_fields' => 'The allowed maximum number of fields is {0}.', 'allowed_minimum_number_of_fields' => 'The allowed minimum number of fields is {0}.', 'add' => 'Add', 'remove' => 'Remove', 'allowed_maximum_number_of_sections' => 'The allowed maximum number of sections is {0}', 'allowed_minimum_number_of_sections' => 'The allowed minimum number of sections is {0}', 'add_section' => 'Add Section', 'remove_section' => 'Remove Section', 'toggle_all' => 'Toggle All', 'toggle_all_collapsible_sections' => 'Toggle all collapsible sections', 'reset' => 'Reset', 'yes' => 'Yes', 'no' => 'No', 'on' => 'On', 'off' => 'Off', 'enabled' => 'Enabled', 'disabled' => 'Disabled', 'supported' => 'Supported', 'not_supported' => 'Not Supported', 'functional' => 'Functional', 'not_functional' => 'Not Functional', 'too_long' => 'Too Long', 'acceptable' => 'Acceptable', 'no_log_found' => 'No log found.',);
    protected $_sTextDomain = 'fcache';
    static private $_aInstancesByTextDomain = array();
    public static function getInstance($sTextDomain = 'fcache') {
        $_oInstance = isset(self::$_aInstancesByTextDomain[$sTextDomain]) && (self::$_aInstancesByTextDomain[$sTextDomain] instanceof Fcache_AdminPageFramework_Message) ? self::$_aInstancesByTextDomain[$sTextDomain] : new Fcache_AdminPageFramework_Message($sTextDomain);
        self::$_aInstancesByTextDomain[$sTextDomain] = $_oInstance;
        return self::$_aInstancesByTextDomain[$sTextDomain];
    }
    public static function instantiate($sTextDomain = 'fcache') {
        return self::getInstance($sTextDomain);
    }
    public function __construct($sTextDomain = 'fcache') {
        $this->_sTextDomain = $sTextDomain;
        $this->aMessages = array_fill_keys(array_keys($this->aDefaults), null);
    }
    public function getTextDomain() {
        return $this->_sTextDomain;
    }
    public function get($sKey) {
        return isset($this->aMessages[$sKey]) ? __($this->aMessages[$sKey], $this->_sTextDomain) : __($this->{$sKey}, $this->_sTextDomain);
    }
    public function output($sKey) {
        echo $this->get($sKey);
    }
    public function __($sKey) {
        return $this->get($sKey);
    }
    public function _e($sKey) {
        $this->output($sKey);
    }
    public function __get($sPropertyName) {
        return isset($this->aDefaults[$sPropertyName]) ? $this->aDefaults[$sPropertyName] : $sPropertyName;
    }
    private function __doDummy() {
        __('The options have been updated.', 'fcache');
        __('The options have been cleared.', 'fcache');
        __('Export', 'fcache');
        __('Export Options', 'fcache');
        __('Import', 'fcache');
        __('Import Options', 'fcache');
        __('Submit', 'fcache');
        __('An error occurred while uploading the import file.', 'fcache');
        __('The uploaded file type is not supported: %1$s', 'fcache');
        __('Could not load the importing data.', 'fcache');
        __('The uploaded file has been imported.', 'fcache');
        __('No data could be imported.', 'fcache');
        __('Upload Image', 'fcache');
        __('Use This Image', 'fcache');
        __('Insert from URL', 'fcache');
        __('Are you sure you want to reset the options?', 'fcache');
        __('Please confirm your action.', 'fcache');
        __('The specified options have been deleted.', 'fcache');
        __('A problem occurred while processing the form data. Please try again.', 'fcache');
        __('Is it okay to send the email?', 'fcache');
        __('The email has been sent.', 'fcache');
        __('The email has been scheduled.', 'fcache');
        __('There was a problem sending the email', 'fcache');
        __('Title', 'fcache');
        __('Author', 'fcache');
        __('Categories', 'fcache');
        __('Tags', 'fcache');
        __('Comments', 'fcache');
        __('Date', 'fcache');
        __('Show All', 'fcache');
        __('Powered by', 'fcache');
        __('Settings', 'fcache');
        __('Manage', 'fcache');
        __('Select Image', 'fcache');
        __('Upload File', 'fcache');
        __('Use This File', 'fcache');
        __('Select File', 'fcache');
        __('Remove Value', 'fcache');
        __('Select All', 'fcache');
        __('Select None', 'fcache');
        __('No term found.', 'fcache');
        __('Select', 'fcache');
        __('Insert', 'fcache');
        __('Use This', 'fcache');
        __('Return to Library', 'fcache');
        __('%1$s queries in %2$s seconds.', 'fcache');
        __('%1$s out of %2$s MB (%3$s) memory used.', 'fcache');
        __('Peak memory usage %1$s MB.', 'fcache');
        __('Initial memory usage  %1$s MB.', 'fcache');
        __('The allowed maximum number of fields is {0}.', 'fcache');
        __('The allowed minimum number of fields is {0}.', 'fcache');
        __('Add', 'fcache');
        __('Remove', 'fcache');
        __('The allowed maximum number of sections is {0}', 'fcache');
        __('The allowed minimum number of sections is {0}', 'fcache');
        __('Add Section', 'fcache');
        __('Remove Section', 'fcache');
        __('Toggle All', 'fcache');
        __('Toggle all collapsible sections', 'fcache');
        __('Reset', 'fcache');
        __('Yes', 'fcache');
        __('No', 'fcache');
        __('On', 'fcache');
        __('Off', 'fcache');
        __('Enabled', 'fcache');
        __('Disabled', 'fcache');
        __('Supported', 'fcache');
        __('Not Supported', 'fcache');
        __('Functional', 'fcache');
        __('Not Functional', 'fcache');
        __('Too Long', 'fcache');
        __('Acceptable', 'fcache');
        __('No log found.', 'fcache');
    }
}