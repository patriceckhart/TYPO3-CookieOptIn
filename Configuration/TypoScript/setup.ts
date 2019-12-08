plugin.tx_cookieoptin_modal {
    view {
        templateRootPaths.0 = EXT:cookieoptin/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_cookieoptin_modal.view.templateRootPath}
        partialRootPaths.0 = EXT:cookieoptin/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_cookieoptin_modal.view.partialRootPath}
        layoutRootPaths.0 = EXT:cookieoptin/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_cookieoptin_modal.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_cookieoptin_modal.persistence.storagePid}
        #recursive = 1
        revoke = {$plugin.tx_cookieoptin_modal.persistence.revoke}
        excludedPages = {$plugin.tx_cookieoptin_modal.persistence.excludedPages}
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
    settings {
        revoke = {$plugin.tx_cookieoptin_modal.persistence.revoke}
        excludedPages = {$plugin.tx_cookieoptin_modal.persistence.excludedPages}
    }
}

lib.cookieoptinModal = USER
lib.cookieoptinModal {
    userFunc =  TYPO3\CMS\Extbase\Core\Bootstrap->run
    vendorName = SteinbauerIT
    pluginName = Modal
    extensionName = Cookieoptin
    controller = CookieGroup
    action = index
}

page {
    includeJSFooter {
        cookieoptin-js = EXT:cookieoptin/Resources/Public/JavaScript/main.js
    }

    includeCSS {
        cookie-scss = EXT:cookieoptin/Resources/Public/Styles/main.scss
    }

    9 < lib.cookieoptinModal
    9 {
        settings {
            header = 1
        }
    }
    92929292 < lib.cookieoptinModal
    92929292 {
        settings {
            header = 0
        }
    }

}
