<?php

/**
 * Plugin skeleton without real functionality.
 */
class FirstStepPlugin extends Gdn_Plugin {
    /**
     * This method is executed when plugin is enabled.
     *
     * @return void
     */
    public function setup() {
        $this->structure();
    }

    /**
     * This method is executed when plugin is disabled.
     *
     * @return void
     */
    public function onDisable() {
    }

    /**
     * Change database structure and init some sane config values.
     *
     * @return void
     */
    public function structure() {
        Gdn::config()->touch('FirstStep.Some.Setting', true);
    }

    /**
     * This method is executed before a page is rendered.
     *
     * @param  Gdn_Controller $sender Instance of the calling class.
     *
     * @return void
     */
    public function base_render_before($sender) {
        $sender->addJsFile('first-step.js','plugins/first-step');
    }

    /**
     * Use this method to add a css file.
     *
     * @param  Gdn_Controller $sender Instance of the calling class.
     *
     * @return void
     */
    public function assetModel_styleCss_handler($sender) {
        $sender->addCssFile('first-step.css', 'plugins/first-step');
    }
}
