plugin.tx_cookieoptin_modal {
    view {
        # cat=plugin.tx_cookieoptin_modal/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:cookieoptin/Resources/Private/Templates/
        # cat=plugin.tx_cookieoptin_modal/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:cookieoptin/Resources/Private/Partials/
        # cat=plugin.tx_cookieoptin_modal/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:cookieoptin/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_cookieoptin_modal//a; type=string; label=Cookie storage PID
        storagePid =
        # cat=plugin.tx_cookieoptin_modal//a; type=boolean; label=Revoke
        revoke =
        # cat=plugin.tx_cookieoptin_modal//a; type=string; label=Impress PID
        impressPid =
        # cat=plugin.tx_cookieoptin_modal//a; type=string; label=Data privacy PID
        dataPrivacyPid =
        # cat=plugin.tx_cookieoptin_modal//a; type=string; label=Excluded pages
        excludedPages =
    }
}
