<?php
/*
 * 2016 Romain CANON <romain.hydrocanon@gmail.com>
 *
 * This file is part of the TYPO3 Formz project.
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
        'drupal' => [
            'value' => 'ARE YOU KIDDING ME?!'
        ]
    ];

    /**
     * @inheritdoc
     */
    public function isValid($value)
    {
        if ('typo3' !== strtolower($value)) {
            if ('drupal' === strtolower($value)) {
                $this->addError('drupal', 1473679128);
            } else {
                $this->addError('default', 1473679117);
            }
        }
    }
}
