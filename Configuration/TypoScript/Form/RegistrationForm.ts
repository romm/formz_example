config.tx_formz {
    forms {
        Romm\FormzExample\Form\RegistrationForm {
            fields {
                email {
                    validation {
                        required < config.tx_formz.validators.required
                        isEmail < config.tx_formz.validators.email
                    }
                }

                password {
                    validation {
                        required < config.tx_formz.validators.required
                    }
                }

                passwordRepeat {
                    validation {
                        required < config.tx_formz.validators.required

                        equalsToPassword < config.tx_formz.validators.equalsToField
                        equalsToPassword {
                            options.field = password
                        }
                    }
                }
            }
        }
    }
}
