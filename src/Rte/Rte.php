<?php

namespace GetOlympus\Dionysos\Field;

use GetOlympus\Zeus\Field\Field;

/**
 * Builds Rte field.
 *
 * @package    DionysosField
 * @subpackage Rte
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 *
 */

class Rte extends Field
{
    /**
     * @var string
     */
    protected $script = 'js'.S.'rte.js';

    /**
     * @var string
     */
    protected $style = 'css'.S.'rte.css';

    /**
     * @var string
     */
    protected $template = 'rte.html.twig';

    /**
     * @var string
     */
    protected $textdomain = 'rtefield';

    /**
     * Prepare defaults.
     *
     * @return array
     */
    protected function getDefaults() : array
    {
        return [
            'title'       => parent::t('rte.title', $this->textdomain),
            'default'     => '',
            'description' => '',
            'placeholder' => '',

            /**
             * RTE settings
             * @see https://codex.wordpress.org/Function_Reference/wp_editor
             */
            'settings'    => [
                'teeny'         => false,
                'textarea_rows' => 8,
            ],
        ];
    }

    /**
     * Prepare variables.
     *
     * @param  object  $value
     * @param  array   $contents
     *
     * @return array
     */
    protected function getVars($value, $contents) : array
    {
        // Update vars
        return $contents;
    }
}
