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

use Romm\FormzExample\Exceptions\EntryNotFoundException;
use Romm\FormzExample\Form\ExampleForm;
use Romm\FormzExample\Layouts\LayoutsInterface;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;

class DefaultExampleController extends ActionController
{
    const DEFAULT_LAYOUT = LayoutsInterface::LAYOUT_DEFAULT;

    /**
     * @var array
     */
    protected static $layoutList = [
        LayoutsInterface::LAYOUT_DEFAULT     => 'Form/Default',
        LayoutsInterface::LAYOUT_BOOTSTRAP3  => 'Form/Bootstrap/Bootstrap3',
        LayoutsInterface::LAYOUT_FOUNDATION5 => 'Form/Foundation/Foundation5'
    ];

    /**
     * @param ViewInterface $view
     */
    public function initializeView(ViewInterface $view)
    {
        $view->assign('formzVersion', ExtensionManagementUtility::getExtensionVersion('formz'));
    }

    /**
     * Show an example form.
     */
    public function showFormAction()
    {
        try {
            $this->view->assign('layoutPath', $this->getLayoutPath());
            $this->view->assign('layoutUsed', $this->getSelectedLayout());
        } catch (EntryNotFoundException $e) {
            $this->redirect('showForm', null, null, ['layout' => self::DEFAULT_LAYOUT]);
        }
    }

    /**
     * Action called when the Example form is submitted.
     *
     * @param ExampleForm $exForm
     * @validate $exForm Romm.Formz:Form\DefaultForm(name=exForm)
     */
    public function submitFormAction(ExampleForm $exForm)
    {
        $this->view->assign('form', $exForm);
        $this->view->assign('layout', $this->getLayoutPath());
    }

    /**
     * @return string
     */
    protected function getSelectedLayout()
    {
        return (array_key_exists($this->settings['layoutUsed'], self::$layoutList))
            ? $this->settings['layoutUsed']
            : self::DEFAULT_LAYOUT;
    }

    /**
     * @return string
     * @throws EntryNotFoundException
     */
    protected function getLayoutPath()
    {
        $selectedLayout = $this->getSelectedLayout();

        if (array_key_exists($selectedLayout, self::$layoutList)) {
            return self::$layoutList[$selectedLayout];
        }

        throw new EntryNotFoundException(
            vprintf('No layout found with the value "%s".', [$selectedLayout]),
            1472075132
        );
    }
}
