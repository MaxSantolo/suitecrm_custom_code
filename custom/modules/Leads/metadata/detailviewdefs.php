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
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
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
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
        ),
        1 => 
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
        2 => 
        array (
          0 => 'phone_work',
          1 => 'phone_mobile',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_other',
            'comment' => 'Other phone number for the contact',
            'label' => 'LBL_OTHER_PHONE',
          ),
          1 => 'phone_fax',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cellulare_notifiche_c',
            'label' => 'LBL_CELLULARE_NOTIFICHE',
          ),
        ),
        5 => 
        array (
          0 => 'email1',
          1 => 
          array (
            'name' => 'book_email_c',
            'label' => 'LBL_BOOK_EMAIL',
          ),
        ),
        6 => 
        array (
          0 => 'description',
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
            'name' => 'azienda_tipo_c',
            'studio' => 'visible',
            'label' => 'LBL_AZIENDA_TIPO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'lead_funzione_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_FUNZIONE',
          ),
        ),
        2 => 
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
        3 => 
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'pec_c',
            'label' => 'LBL_PEC',
          ),
          1 => 
          array (
            'name' => 'cdu_c',
            'label' => 'LBL_CDU',
          ),
        ),
        5 => 
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
        6 => 
        array (
          0 => 
          array (
            'name' => 'lead_azn_startup_c',
            'label' => 'LBL_LEAD_AZN_STARTUP',
          ),
          1 => 
          array (
            'name' => 'nomina_resp_c',
            'label' => 'LBL_NOMINA_RESP',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
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
          0 => 'website',
        ),
        2 => 
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
        3 => 
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
        4 => 
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
            'name' => 'account_name',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 'status',
          1 => 
          array (
            'name' => 'tipo_fornitore_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_FORNITORE',
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
        3 => 
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
