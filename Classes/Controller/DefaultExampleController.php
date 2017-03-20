<?php
/*
 * 2016
 * Romain CANON <romain.canon.ext@direct-energie.com>
 */

namespace Romm\FormzExample\Controller;

use Romm\Formz\Form\FormTrait;
use Romm\Formz\Service\FormService;
use Romm\FormzExample\Exceptions\EntryNotFoundException;
use Romm\FormzExample\Form\ExampleForm;
use Romm\FormzExample\Layouts\LayoutsInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class DefaultExampleController extends ActionController
{

    use FormTrait;

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
     * Show an example form.
     */
    public function showFormAction()
    {
        /** @var ExampleForm $submittedForm */
        $submittedForm = FormService::getFormWithErrors(ExampleForm::class);

        try {
            $this->view->assign('form', $submittedForm);
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
