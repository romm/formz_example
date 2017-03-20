<?php
/*
 * 2017 Romain CANON <romain.hydrocanon@gmail.com>
 *
 * This file is part of the TYPO3 FormZ project.
 * It is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License, either
 * version 3 of the License, or any later version.
 *
 * For the full copyright and license information, see:
 * http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Romm\FormzExample\Validation\Validator;

use Romm\Formz\Validation\Validator\AbstractValidator;

class ExampleFormQuestionValidator extends AbstractValidator
{

    /**
     * @inheritdoc
     */
    protected $supportedMessages = [
        'default' => [
            'value' => 'Nope!'
        ],
        'kidding' => [
            'value' => 'ARE YOU KIDDING ME?!'
        ],
        'ok' => [
            'value' => 'Of course. ;)'
        ]
    ];

    /**
     * @inheritdoc
     */
    public function isValid($value)
    {
        if ('typo3' === strtolower($value)) {
            $this->addNotice('ok', 1490028060);
        } else {
            if (in_array(strtolower($value), ['drupal', 'wordpress'])) {
                $this->addError('kidding', 1473679128);
            } else {
                $this->addError('default', 1473679117);
            }
        }
    }
}
