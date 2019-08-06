<?php
$viewdefs ['Leads'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
          1 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
          2 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
          3 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
        ),
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
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
      'javascript' => '<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>',
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
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'last_name',
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
          1 => 
          array (
            'name' => 'lead_source_description',
          ),
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
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
              'copy' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
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
            'name' => 'sendinblue_state_c',
            'studio' => 'visible',
            'label' => 'LBL_SENDINBLUE_STATE',
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'privacy_b_c',
            'label' => 'LBL_PRIVACY_B',
          ),
          1 => 
          array (
            'name' => 'privacy_b_date_c',
            'label' => 'LBL_PRIVACY_B_DATE',
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
