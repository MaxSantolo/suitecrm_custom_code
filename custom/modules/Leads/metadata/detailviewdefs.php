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
            'customCode' => '<input type="submit" class="button" title="Power Delete" onclick="alert(\'Bean ID: \' + \'{$bean->id}\');" name="genFile" value="genFile" />',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => 'Elimina completamente',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'genFile_button',
                'title' => 'Elimina contatto e servizi richiesti',
                'onclick' => 'if(confirm(\'Il contatto, i servizi richiesti e le quotazioni saranno eliminati. Procedo?\')) document.location = \'index.php?entryPoint=leadsPowerDelete&lead_id={$bean->id}\';',
                'name' => 'powerDelete',
              ),
            ),
          ),
          4 => 
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
          5 => 'FIND_DUPLICATES',
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
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
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
            'name' => 'causa_disdetta_c',
            'studio' => 'visible',
            'label' => 'LBL_CAUSA_DISDETTA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tipo_fornitore_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_FORNITORE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 'lead_source',
          1 => 'lead_source_description',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'lead_centro_c',
            'label' => 'LBL_LEAD_CENTRO',
          ),
          1 => 
          array (
            'name' => 'centro_scelto_c',
            'studio' => 'visible',
            'label' => 'LBL_CENTRO_SCELTO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'lead_serv_rich_c',
            'label' => 'LBL_LEAD_SERV_RICH',
          ),
          1 => 
          array (
            'name' => 'lead_fonte_broker_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_FONTE_BROKER',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'campaign_name',
            'label' => 'LBL_CAMPAIGN',
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
            'name' => 'lead_azn_startup_c',
            'label' => 'LBL_LEAD_AZN_STARTUP',
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
            'name' => 'lead_facebook_c',
            'label' => 'LBL_LEAD_FACEBOOK',
          ),
          1 => 
          array (
            'name' => 'lead_linkedin_c',
            'label' => 'LBL_LEAD_LINKEDIN',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'tcmcodes_c',
            'label' => 'LBL_TCMCODES',
          ),
          1 => 
          array (
            'name' => 'tccode_c',
            'label' => 'LBL_TCCODE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'selpass_c',
            'label' => 'LBL_SELPASS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'foptext_c',
            'studio' => 'visible',
            'label' => 'LBL_FOPTEXT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fopanswer_c',
            'studio' => 'visible',
            'label' => 'LBL_FOPANSWER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'instructions_c',
            'studio' => 'visible',
            'label' => 'LBL_INSTRUCTIONS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'acs_url_c',
            'label' => 'LBL_ACS_URL',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'mailing_status_c',
            'studio' => 'visible',
            'label' => 'LBL_MAILING_STATUS',
          ),
          1 => 
          array (
            'name' => 'mailing_date_c',
            'label' => 'LBL_MAILING_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'privacy_a_c',
            'label' => 'LBL_PRIVACY_A',
          ),
          1 => 
          array (
            'name' => 'privacy_a_date_c',
            'label' => 'LBL_PRIVACY_A_DATE',
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
    ),
  ),
);
;
?>
