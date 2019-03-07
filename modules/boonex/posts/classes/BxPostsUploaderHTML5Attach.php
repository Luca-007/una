<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) UNA, Inc - https://una.io
 * MIT License - https://opensource.org/licenses/MIT
 *
 * @defgroup    Posts Posts
 * @ingroup     UnaModules
 *
 * @{
 */

class BxPostsUploaderHTML5Attach extends BxBaseModTextUploaderHTML5
{
    public function __construct ($aObject, $sStorageObject, $sUniqId, $oTemplate)
    {
        $this->_sModule = 'bx_posts';

        parent::__construct($aObject, $sStorageObject, $sUniqId, $oTemplate);

        $this->_sButtonTemplate = 'uploader_button_html5_attach.html';
    }

    protected function isAdmin ($iContentId = 0)
    {
        return $this->_oModule->_isModerator (false);
    }
}

/** @} */