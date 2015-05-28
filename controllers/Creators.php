<?php namespace Void\Creator\Controllers;

use Lang;
use Flash;
use BackendMenu;
use BackendAuth;
use Backend\Classes\Controller;
use System\Classes\SettingsManager;
use Void\Creator\Models\Creator;
use Void\Creator\Models\Settings as CreatorSettings;

class Creators extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['void.creators.access_creators'];

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Void.Creator', 'creator', 'creators');
        // SettingsManager::setContext('Void.Creator', 'settings');
    }

    /**
     * Manually activate a creator
     */
    // public function update_onActivate($recordId = null)
    // {
    //     $model = $this->formFindModelObject($recordId);

    //     $model->attemptActivation($model->activation_code);

    //     Flash::success(Lang::get('void.creator::lang.creators.activated_success'));

    //     if ($redirect = $this->makeRedirect('update', $model)) {
    //         return $redirect;
    //     }
    // }

    /**
     * Display creatorname field if settings permit
     */
    // protected function formExtendFields($form)
    // {
    //     $loginAttribute = CreatorSettings::get('login_attribute', CreatorSettings::LOGIN_EMAIL);
    //     if ($loginAttribute != CreatorSettings::LOGIN_USERNAME) {
    //         return;
    //     }

    //     if (array_key_exists('creatorname', $form->getFields())) {
    //         $form->getField('creatorname')->hidden = false;
    //     }
    // }

    /**
     * Deleted checked creators.
     */
    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $creatorId) {
                if (!$creator = Creator::find($creatorId)) continue;
                $creator->delete();
            }

            Flash::success(Lang::get('void.creator::lang.creators.delete_selected_success'));
        }
        else {
            Flash::error(Lang::get('void.creator::lang.creators.delete_selected_empty'));
        }

        return $this->listRefresh();
    }
}
