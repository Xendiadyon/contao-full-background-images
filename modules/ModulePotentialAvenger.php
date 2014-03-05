<?php

namespace Oneup;

class ModulePotentialAvenger extends \Module
{
    protected $objFiles;
    protected $strTemplate = 'potential_avenger';

    public function generate()
    {
        global $objPage;

        $objPage->paSRC = deserialize($objPage->paSRC);

        // Return if there are no files
        if (!is_array($objPage->paSRC) || empty($objPage->paSRC) || $objPage->usePotentialAvenger === '')
        {
            return '';
        }

        // Get the file entries from the database
        $this->objFiles = \FilesModel::findMultipleByUuids($objPage->paSRC);

        if ($this->objFiles === null)
        {
            if (!\Validator::isUuid($objPage->paSRC[0]))
            {
                return '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
            }

            return '';
        }

        return parent::generate();
    }

    protected function compile()
    {
        global $objPage;

        if ($objPage && $objPage->usePotentialAvenger) {
            
        }
    }
}
