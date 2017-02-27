mod.wizards {
    newContentElement.wizardItems {
        plugins {
            elements {
                plugins_tx_rssecuredownload_pi1 {
                    icon = EXT:rs_securedownload//Resources/Public/Icons/ce_wiz.gif
                    title = LLL:EXT:rs_securedownload/Resources/Private/Language/locallang.xml:pi1_title
                    description = LLL:EXT:rs_securedownload/Resources/Private/Language/locallang.xml:pi1_plus_wiz_description
                    tt_content_defValues {
                        CType = list
                        list_type = rs_securedownload_pi1
                    }
                }
            }
        }
    }
}
