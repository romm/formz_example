<?php
/*
 * 2016
 * Romain CANON <romain.canon.ext@direct-energie.com>
 */

namespace Romm\FormzExample\Form;

use Romm\Formz\Form\FormInterface;
use Romm\Formz\Form\FormTrait;

class ExampleForm implements FormInterface
{

    use FormTrait;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $gender;

    /**
     * @var string
     */
    protected $question;

    /**
     * @var bool
     */
    protected $likeIceCream;

    /**
     * @var array
     */
    protected $iceCreamFlavors;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param string $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return string
     */
    public function getLikeIceCream()
    {
        return $this->likeIceCream;
    }

    /**
     * @param string $likeIceCream
     */
    public function setLikeIceCream($likeIceCream)
    {
        $this->likeIceCream = $likeIceCream;
    }

    /**
     * @return array
     */
    public function getIceCreamFlavors()
    {
        return $this->iceCreamFlavors;
    }

    /**
     * @param array $iceCreamFlavors
     */
    public function setIceCreamFlavors($iceCreamFlavors)
    {
        $this->iceCreamFlavors = $iceCreamFlavors;
    }
}
