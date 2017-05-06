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

namespace Romm\FormzExample\Controller;


use Romm\FormzExample\Form\RegistrationForm;

class RegistrationExampleController extends AbstractExampleController
{
    const LAYOUT_PATH = 'Form/RegistrationExample/Bootstrap3';

    /**
     * Main action that displays the actual form.
     */
    public function showFormAction()
    {
        $this->view->assign('layoutPath', self::LAYOUT_PATH);
    }

    /**
     * @param RegistrationForm $form
     * @validate $form Romm.Formz:Form\DefaultForm(name=form)
     */
    public function submitFormAction(RegistrationForm $form)
    {

    }
}
