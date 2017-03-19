config.tx_formz {
    forms {
        Romm\FormzExample\Form\ExampleForm {
            conditionList {
                doesLikeIceCream {
                    type = fieldHasValue
                    fieldName = likeIceCream
                    fieldValue = 1
                }
            }

            fields {
                name {
                    validation {
                        required < config.tx_formz.validators.required
                    }
                }

                firstName {
                    validation {
                        required < config.tx_formz.validators.required
                    }
                }

                email {
                    validation {
                        required < config.tx_formz.validators.required
                        isEmail < config.tx_formz.validators.email
                    }
                    behaviours {
                        toLowerCase < config.tx_formz.behaviours.toLowerCase
                    }
                }

                gender {
                    validation {
                        required < config.tx_formz.validators.required

                        isValid < config.tx_formz.validators.containsValues
                        isValid {
                            options {
                                values {
                                    10 = male
                                    20 = female
                                }
                            }
                        }
                    }
                }

                iceCreamFlavors {
                    validation {
                        required < config.tx_formz.validators.required
                    }

                    activation.expression = doesLikeIceCream
                }

                question {
                    validation {
                        required < config.tx_formz.validators.required

                        valid {
                            className = Romm\FormzExample\Validation\Validator\ExampleFormQuestionValidator
                            useAjax = 1
                        }
                    }
                }
            }
        }
    }
}
