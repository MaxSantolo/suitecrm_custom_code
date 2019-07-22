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
        'LBL_EDITVIEW_PANEL5' => 
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
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'last_name',
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
        6 => 
        array (
          0 => 
          array (
            'name' => 'lead_azn_startup_c',
            'label' => 'LBL_LEAD_AZN_STARTUP',
          ),
          1 => '',
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
            'name' => 'twitter_name_c',
            'label' => 'LBL_TWITTER_NAME',
          ),
          1 => '',
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
      'lbl_editview_panel5' => 
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
            'name' => 'nomina_resp_c',
            'label' => 'LBL_NOMINA_RESP',
          ),
          1 => '',
        ),
        2 => 
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
          1 => 
          array (
            'name' => 'lead_source_description',
          ),
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
