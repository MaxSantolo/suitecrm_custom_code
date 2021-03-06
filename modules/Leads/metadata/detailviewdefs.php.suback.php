<?php
$viewdefs ['Leads'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 =>
          array (
            'customCode' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}<input title="{$MOD.LBL_CONVERTLEAD_TITLE}" accessKey="{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}" type="button" class="button" onClick="document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'" name="convert" value="{$MOD.LBL_CONVERTLEAD}">{/if}',
            'sugar_html' => 
            array (
              'type' => 'button',
              'value' => '{$MOD.LBL_CONVERTLEAD}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_CONVERTLEAD_TITLE}',
                'accessKey' => '{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}',
                'class' => 'button',
                'onClick' => 'document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'',
                'name' => 'convert',
                'id' => 'convert_lead_button',
              ),
              'template' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}[CONTENT]{/if}',
            ),
          ),
          4 => 'FIND_DUPLICATES',
          5 =>
          array (
            'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              'htmlOptions' => 
              array (
                'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'class' => 'button',
                'id' => 'manage_subscriptions_button',
                'onclick' => 'this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';',
                'name' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              ),
            ),
          ),
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_PRINT_AS_PDF}">',
          ),
        ),
        'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Leads/Lead.js',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'LBL_CONTACT_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 'phone_work',
          1 => 'phone_mobile',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_other',
            'comment' => 'Other phone number for the contact',
            'label' => 'LBL_OTHER_PHONE',
          ),
          1 => 'phone_fax',
        ),
        3 => 
        array (
          0 => 'email1',
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 'status',
          1 => 
          array (
            'name' => 'centro_scelto_c',
            'studio' => 'visible',
            'label' => 'LBL_CENTRO_SCELTO',
          ),
        ),
        1 => 
        array (
          0 => 'lead_source',
          1 => 'lead_source_description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'lead_centro_c',
            'label' => 'LBL_LEAD_CENTRO',
          ),
          1 => 
          array (
            'name' => 'lead_serv_rich_c',
            'label' => 'LBL_LEAD_SERV_RICH',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'referral_c',
            'studio' => 'visible',
            'label' => 'LBL_REFERRAL',
          ),
          1 => 
          array (
            'name' => 'lead_fonte_broker_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_FONTE_BROKER',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'lead_azienda_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_AZIENDA',
          ),
          1 => 
          array (
            'name' => 'lead_funzione_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_FUNZIONE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'lead_azn_ateco_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_AZN_ATECO',
          ),
          1 => 
          array (
            'name' => 'categoria_text_c',
            'label' => 'LBL_CATEGORIA_TEXT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'lead_cf_c',
            'label' => 'LBL_LEAD_CF',
            'tabindex' => '1',
          ),
          1 => 
          array (
            'name' => 'lead_piva_c',
            'label' => 'LBL_LEAD_PIVA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'label' => 'LBL_ALTERNATE_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'lead_azn_startup_c',
            'label' => 'LBL_LEAD_AZN_STARTUP',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 'website',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'lead_linkedin_c',
            'label' => 'LBL_LEAD_LINKEDIN',
          ),
          1 => 
          array (
            'name' => 'email_linkedin_c',
            'label' => 'LBL_EMAIL_LINKEDIN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'lead_facebook_c',
            'label' => 'LBL_LEAD_FACEBOOK',
          ),
          1 => 
          array (
            'name' => 'profilo_instagram_c',
            'label' => 'LBL_PROFILO_INSTAGRAM',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'pagina_googlep_c',
            'label' => 'LBL_PAGINA_GOOGLEP',
          ),
          1 => 
          array (
            'name' => 'twitter_name_c',
            'label' => 'LBL_TWITTER_NAME',
          ),
        ),
      ),
    ),
  ),
);
;
?>
