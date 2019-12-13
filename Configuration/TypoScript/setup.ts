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
        revoke = {$plugin.tx_cookieoptin_modal.persistence.revoke}
        impressPid = {$plugin.tx_cookieoptin_modal.persistence.impressPid}
        dataPrivacyPid = {$plugin.tx_cookieoptin_modal.persistence.dataPrivacyPid}
        excludedPages = {$plugin.tx_cookieoptin_modal.persistence.excludedPages}
    }
    features {
        ignoreAllEnableFieldsInBe = 0
        requireCHashArgumentForActionArguments = 1
    }
    settings {
        revoke = {$plugin.tx_cookieoptin_modal.persistence.revoke}
        impressPid = {$plugin.tx_cookieoptin_modal.persistence.impressPid}
        dataPrivacyPid = {$plugin.tx_cookieoptin_modal.persistence.dataPrivacyPid}
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
