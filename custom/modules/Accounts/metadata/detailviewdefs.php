<?php
$viewdefs ['Accounts'] = 
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
          3 => 'FIND_DUPLICATES',
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_PRINT_AS_PDF}">',
          ),
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
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
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'comment' => 'The fax phone number of this company',
            'label' => 'LBL_FAX',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_alternate',
            'comment' => 'An alternate phone number',
            'label' => 'LBL_PHONE_ALT',
          ),
          1 => 
          array (
            'name' => 'phone_office',
            'comment' => 'The office phone number',
            'label' => 'LBL_PHONE_OFFICE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cellulare_notifiche_c',
            'label' => 'LBL_CELLULARE_NOTIFICHE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'lead_piva_c',
            'label' => 'LBL_LEAD_PIVA_C',
          ),
          1 => 
          array (
            'name' => 'lead_cf_c',
            'label' => 'LBL_LEAD_CF_C',
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
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'book_email_c',
            'label' => 'LBL_BOOK_EMAIL',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'nomina_responsabile_c',
            'label' => 'LBL_NOMINA_RESPONSABILE',
          ),
        ),
        9 => 
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
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
            'displayParams' => 
            array (
              'link_target' => '_blank',
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'pagina_fb_az_c',
            'label' => 'LBL_PAGINA_FB_AZ',
          ),
          1 => 
          array (
            'name' => 'profilo_twitter_c',
            'label' => 'LBL_PROFILO_TWITTER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pagina_googlep_c',
            'label' => 'LBL_PAGINA_GOOGLEP',
          ),
          1 => 
          array (
            'name' => 'instagram_az_c',
            'label' => 'LBL_INSTAGRAM_AZ',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'centro_scelto_c',
            'studio' => 'visible',
            'label' => 'LBL_CENTRO_SCELTO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'account_type',
            'comment' => 'The Company is of this type',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'lead_azn_ateco_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_AZN_ATECO_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'categoria_note_c',
            'label' => 'LBL_CATEGORIA_NOTE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'annual_revenue',
            'comment' => 'Annual revenue for this company',
            'label' => 'LBL_ANNUAL_REVENUE',
          ),
          1 => 
          array (
            'name' => 'employees',
            'comment' => 'Number of employees, varchar to accomodate for both number (100) or range (50-100)',
            'label' => 'LBL_EMPLOYEES',
          ),
        ),
        4 => 
        array (
          0 => 'campaign_name',
        ),
      ),
    ),
  ),
);
;
?>
