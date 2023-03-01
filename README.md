# ![FormZ](Resources/Public/Images/formz-icon@medium.png) FormZ Example

> **Warning** This package is no longer maintained.

<details>
<summary>ℹ️ Show more info</summary>

> :heavy_exclamation_mark: *This PHP library has been developed for [![TYPO3](Resources/Public/Images/typo3-icon.png)TYPO3 CMS](https://typo3.org) and is intended to TYPO3 extension developers.*

---

**This repository hosts a full working example for the TYPO3 extension [![FormZ](Resources/Public/Images/formz-icon@small.png) FormZ](http://typo3-formz.com/).**

**→ [FormZ official website](http://typo3-formz.com/)**

> “Manage your forms easily with powerful tools: TypoScript based validation, Fluid view helpers, a whole JavaScript API, and more. Use pre-defined layouts for Twitter Bootstrap and Foundation to build nice-looking forms in minutes. Need to build a basic form with only two fields? Need to build a huge registration form with dozens of fields? Use FormZ, it will live up to your expectations!”

## Installation

1. **Install FormZ** on your TYPO3 installation:

   * With the TER: [FormZ on TER](https://typo3.org/extensions/repository/view/formz)

   * Or with Composer: [FormZ on Packagist](https://packagist.org/packages/romm/formz)

2. **Clone this Git repository** in your extensions folder: `git clone https://github.com/romm/formz_example.git`.

3. **Install the extension** `formz_example`.

4. On a page in your TYPO3 page tree, **insert a new content containing the provided plug-in**: `[FormZ] Form example`.

5. On the same page, **include the following TypoScript static content**:

   * `[FormZ] Global configuration (formz)`

   * `[FormZ] Form example - Configuration (formz_example)`

6. Additionally, if you are using **Twitter Bootstrap** or **Foundation** on your site, you can do the following:

  * Edit the plug-in that you did insert in step 4, and **change the value of `Layout`**

  * Include the **TypoScript static content `[FormZ] View configuration for XXX`**

  * If you need to include CSS and JavaScript assets, include the **TypoScript static content `[FormZ] Form example - Asset for XXX`**
</details>
