# ![Formz](Resources/Public/Images/formz-icon@medium.png) Formz Example

> :heavy_exclamation_mark: *This PHP library has been developed for [![TYPO3](Resources/Public/Images/typo3-icon.png)TYPO3 CMS](https://typo3.org) and is intended to TYPO3 extension developers.*

---

**This repository hosts a full working example for the TYPO3 extension [![Formz](Resources/Public/Images/formz-icon@small.png) Formz](http://typo3-formz.com/).**

> “Handle forms very easily with provided tools: TypoScript based validation, Fluid helpers, a whole JavaScript API, and more. Use pre-defined layouts for Twitter Bootstrap and Foundation to build good-looking forms in minutes. Need to build a basic form with only two fields? Need to build a huge registration form with dozens of fields? Use Formz, it will fulfill your needs!”

## Installation

1. **Install Formz** on your TYPO3 installation:

   * With the TER: [Formz on TER](https://typo3.org/extensions/repository/view/formz)

   * Or with Composer: [Formz on Packagist](https://packagist.org/packages/romm/formz)

2. **Clone this Git repository** in your extensions folder: `git clone https://github.com/romm/formz_example.git`.

3. **Install the extension** `formz_example`.

4. On a page in your TYPO3 page tree, **insert a new content containing the provided plug-in**: `[Formz] Form example`.

5. On the same page, **include the following TypoScript static content**:

   * `[Formz] Global configuration (formz)`

   * `[Formz] Form example - Configuration (formz_example)`

6. Additionally, if you are using **Twitter Bootstrap** or **Foundation** on your site, you can do the following:

  * Edit the plug-in that you did insert in step 4, and **change the value of `Layout`**

  * Include the **TypoScript static content `[Formz] View configuration for XXX`**

  * If you need to include CSS and JavaScript assets, include the **TypoScript static content `[Formz] Form example - Asset for XXX`**
