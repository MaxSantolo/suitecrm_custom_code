<?php
/**
 * Created by PhpStorm.
 * User: msantolo
 * Date: 23/10/2018
 * Time: 09:09
 */
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


class WiFiAccountsLH
{

    static $alreadyran = false;

    function sendLog($params) {

        $curlSES=curl_init();

        curl_setopt($curlSES,CURLOPT_URL,"http://logs.pickcenter.com/API/create_log.php");
        curl_setopt($curlSES,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curlSES,CURLOPT_HEADER, false);
        curl_setopt($curlSES, CURLOPT_POST, true);
        curl_setopt($curlSES, CURLOPT_POSTFIELDS,$params);
        curl_setopt($curlSES, CURLOPT_CONNECTTIMEOUT,10);
        curl_setopt($curlSES, CURLOPT_TIMEOUT,30);
        $return = curl_exec($curlSES);
        curl_close($curlSES);

        return $return;
    }

    function radius_delete($conn, $username)
    {
        $conn->query("delete from radcheck where username = '" . $username . "'");
        $conn->query("delete from radreply where username = '" . $username . "'");

    }

    function radius_create($conn, $username, $password, $expdate, $devices, $maxup, $maxdown)
    {

        $conn->query("INSERT INTO radcheck (username, attribute, op, value) VALUES ('" . $username . "', 'User-Password', ':=', '" . $password . "')");
        if ($expdate != 0) {
            $conn->query("INSERT INTO radcheck (username, attribute, op, value) VALUES ('" . $username . "', 'Expiration', ':=', '" . date('M d Y', $expdate) . "')"); //data di scadenza solo se la data � espressa
        }
        $conn->query("INSERT INTO radcheck (username, attribute, op, value) VALUES ('" . $username . "', 'Simultaneous-Use', ':=', '" . $devices . "')");
        $conn->query("INSERT INTO radreply (username, attribute, op, value) VALUES ('" . $username . "', 'Idle-Timeout', ':=', '28800')");
        $conn->query("INSERT INTO radreply (username, attribute, op, value) VALUES ('" . $username . "', 'Acct-Interim-Interval', ':=', '60')");
        $conn->query("INSERT INTO radreply (username, attribute, op, value) VALUES ('" . $username . "', 'WISPr-Bandwidth-Max-Up', ':=', '" . $maxup . "')");
        $conn->query("INSERT INTO radreply (username, attribute, op, value) VALUES ('" . $username . "', 'WISPr-Bandwidth-Max-Down', ':=', '" . $maxdown . "')");

    }

    function aggiorna_crm($bean, $status)
    {
        //$status validi: enabled, disabled
        $bean->status = $status;
    }

    function mailsend_account($email_address, $name, $companyemail, $companyname, $username, $password, $devices, $center_mail, $parentid)
    {

    require_once 'include/SugarPHPMailer.php';
    //require_once 'modules/Administraztion/Administration.php';

        if (self::$alreadyran == true) return;
        self::$alreadyran = true;

        if ($companyname !='') {$name = 'Egregio dr./dr.ssa '.$name. ' ('.$companyname.')';} else {$name = 'Egregio dr./dr.ssa '.$name;}


        $mailbody = '<div style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px 30px; margin: 0px auto; width: 800px; background-color: #fafafa;">
                <table style="font-size: 16px; padding: 10px; margin: 0px; width: 748px; text-align: center; font-family: Verdana; line-height: 25.6px; color: #444444;">
                <tbody style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px;">
                <tr style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 5px 0px; margin: 0px;">
                <td style="font-family: arial, sans-serif; margin: 0px; text-align: left; font-size: 14px; line-height: 22.4px; color: #817c8d; padding: 3px 3px 3px 0px;" colspan="3"><a style="color: #1155cc; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; padding: 0px; margin: 0px auto;" href="https://www.pickcenter.it/"><img class="m_-3992486088663327944m_-1853165144588226077m_-6750543036778682475gmail-CToWUd CToWUd" style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px;" src="https://ci3.googleusercontent.com/proxy/QcQtNrfY-AJMm7qM47rpdKt5np89yMP5WvtEdvFWfk9v65-jmlaJNUkIiSOHrg8A9VjQAgNur109K16hjIU0QdxrTPeaAaqXb9mbQuiMWde9Yzr6326LAme_FgSQvhA2VQ=s0-d-e1-ft#https://www.pickcenter.it/wp-content/uploads/2017/08/template_logo_pick.png" alt="" width="300" /></a></td>
                </tr>
                <tr style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 5px 0px; margin: 0px;">
                <td style="font-family: arial, sans-serif; margin: 0px; padding: 5px; font-size: 14px; line-height: 22.4px; color: #817c8d;"><img src="https://www.pickcenter.it/wp-content/uploads/2016/10/04_dayoffice.jpg" alt="" width="230" /></td>
                <td style="font-family: arial, sans-serif; margin: 0px; padding: 5px; font-size: 14px; line-height: 22.4px; color: #817c8d;"><img src="https://www.pickcenter.it/wp-content/uploads/2017/08/Pick-center-Eur-My-Business-Virtual-Tour-08.jpg" alt="" width="230" /></td>
                <td style="font-family: arial, sans-serif; margin: 0px; padding: 5px; font-size: 14px; line-height: 22.4px; color: #817c8d;"><img src="https://www.pickcenter.it/wp-content/uploads/2017/08/Pick-center-Boezio-My-Business-Virtual-Tour-13.jpg" alt="" width="230" /></td>
                </tr>
                <tr style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 5px 0px; margin: 0px;">
                <td style="font-family: arial, sans-serif; margin: 0px; text-align: justify; font-size: 14px; line-height: 22.4px; color: #817c8d; padding: 3px 3px 3px 0px;" colspan="3"><br style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px auto;" /><span style="font-family: verdana, sans-serif; font-size: 13px; line-height: 20.8px; color: #444444; padding: 0px; margin: 0px auto;">
                 ' . $name . ',<br style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px auto;" />
                <br style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px auto;" />
                benvenuto/a nel sistema WiFi di Pick Center.<BR />Collegati a <strong>PCK_SPOT</strong> utilizzando<BR/>
                <P>Username: <strong>' . $username . '</strong></P>
                <P>Password: <strong>' . $password . '</strong></P>
                <P>L\'account &egrave; valido per ' . $devices . ' utenti o apparecchi diversi.<P>
                <br style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px auto;" />
                Restiamo a disposizione per qualsiasi ulteriore <a href="mailto:info@pickcenter.com">informazione</a>.<br style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px auto;" /><br style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px auto;" />
                </span></td>
                </tr>
                <tr style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 5px 0px; margin: 0px;">
                <td style="font-family: arial, sans-serif; margin: 0px; padding: 5px; font-size: 14px; line-height: 22.4px; color: #817c8d;"><img src="https://www.pickcenter.it/wp-content/uploads/2017/08/template_quot_eventi.png" alt="" width="180" /></td>
                <td style="font-family: arial, sans-serif; margin: 0px; padding: 5px; font-size: 14px; line-height: 22.4px; color: #817c8d;"><strong style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px auto;">Cerchi una Sala Riunioni?<strong style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px auto;"><br style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px auto;" /><a style="color: #1155cc; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; padding: 0px; margin: 0px auto;" href="https://www.pickcenter.it/booking"><img class="m_-3992486088663327944m_-1853165144588226077m_-6750543036778682475gmail-CToWUd CToWUd" style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px;" src="https://ci5.googleusercontent.com/proxy/-MyqqSU6gdJKLRwNuvAzOh4_hoYDW6LyoB74Wx_2CzFG5P8_Tnq619VajMHBUVwWbH4Xl-TWmFWoAH32oYg-oUBq1WUkVdWB6CH2gt77aoSazB7eRfnD1_RtnxOu=s0-d-e1-ft#https://www.pickcenter.it/wp-content/uploads/2017/08/Prenota-button.jpg" alt="" width="250" /></a><br style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px auto;" /><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif; line-height: 20.8px; color: #444444; padding: 0px; margin: 0px auto;">Da 4 a 70 persone, allestite per meeting, conferenze, corsi di formazione</span></strong></strong></td>
                <td style="font-family: arial, sans-serif; margin: 0px; padding: 5px; font-size: 14px; line-height: 22.4px; color: #817c8d;"><img src="https://www.pickcenter.it/wp-content/uploads/2017/08/template_boezio.png" alt="" width="180" /></td>
                </tr>
                </tbody>
                </table>
                <table style="font-size: 16px; width: 741px; background-color: #ff9900; margin: 0px; padding: 10px; text-align: center; font-family: Verdana; line-height: 25.6px; color: #444444;">
                <tbody style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px;">
                <tr style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 5px 0px; margin: 0px;">
                <td style="font-family: arial, sans-serif; margin: 0px; font-size: 14px; line-height: 22.4px; color: #817c8d; padding: 3px 3px 3px 0px;"><span style="color: #ffffff; font-weight: bold; font-size: 18px; font-family: Arial, Helvetica, sans-serif; line-height: 28.8px; padding: 0px; margin: 0px auto;"><a style="color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; padding: 0px; margin: 0px auto;" href="https://www.pickcenter.it/promozioni/">Scopri tutte le nostre Promozioni</a></span></td>
                </tr>
                </tbody>
                </table>
                <div style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22.4px; color: #444444; padding: 0px; margin: 0px; height: 0px;">&nbsp;</div>
                </div>';

        $mail = new SugarPHPMailer();
        $mail->CharSet="UTF-8";
        $mail->isSMTP();
        $mail->From = 'info@pickcenter.com';
        $mail->FromName = 'Pick Center Sistema Informativo';
        $mail->Subject = 'Benvenuto nella rete WiFi di Pick Center';

        $mail->Body_html = from_html($mailbody);
        $mail->Body = wordwrap($mailbody,1000);
        $mail->isHTML(true);
        $mail->addCC($center_mail,'Pick Center');
        if ($email_address != '') { $mail->addAddress($email_address,$name);}
        if ($companyemail != '') { $mail->addAddress($companyemail,$companyname);}
        $mail->prepForOutbound();
        $mail->setMailerForSystem();

        $mail->send();

        //create Email item
        $addmail = BeanFactory::getBean('Emails');
        $addmail->name = 'Benvenuto nella rete WiFi di Pick Center';
        $addmail->parent_type = 'Leads';
        $addmail->parent_id = $parentid;
        $addmail->to_addrs = $email_address;
        $addmail->from_addr = 'info@pickcenter.com';
        $addmail->cc_addrs = $center_mail;
        $addmail->description_html = $mailbody;
        $addmail->status = 'sent';
        $addmail->save();

        global $current_user;
        $user = $current_user->first_name . " " . $current_user->last_name;
        $content = "Inviata mail di creazione WiFi a: " . $email_address . "per WiFi con username: " . $username;
        $params = array(
            'app' => 'CRM',
            'action' => 'NOTIFICA_WIFI',
            'content' => $content,
            'user' => $user,
            'description' => 'Notifica della creazione di un account WiFi',
            'origin' => 'crm.wifi_wifi_accounts',
            'destination' => 'Mail a utente e alle segreterie',);
        $this->sendLog($params);

    }

    function CreateUpdateWiFiAccount($bean)
    {

        include 'custom/Extension/application/amanda_connect.php';
        $this->radius_delete($conn_prod_radius, $bean->user_name); //cancella precedente
        $this->radius_create($conn_prod_radius, $bean->user_name, $bean->password, date('M d Y', strtotime($bean->expiration_date)), $bean->sim_uses, $bean->up_speed, $bean->down_speed);

        global $current_user;
        $user = $current_user->first_name . " " . $current_user->last_name;
        $content = "Creato account Wifi con username: " . $username;
        $params = array(
            'app' => 'CRM',
            'action' => 'CREA_WIFI',
            'content' => $content,
            'user' => $user,
            'description' => 'Creato account WiFi',
            'origin' => 'crm.wifi_wifi_accounts',
            'destination' => 'Modifica automatica a DB Radius',);
        $this->sendLog($params);

    }

    function DeleteWiFiAccount($bean)
    {

        include 'custom/Extension/application/amanda_connect.php';
        $this->radius_delete($conn_prod_radius, $bean->user_name); //cancella precedente
        $bean->deleted = 1;

        global $current_user;
        $user = $current_user->first_name . " " . $current_user->last_name;
        $content = "Eliminato account Wifi con username: " . $bean->user_name;
        $params = array(
            'app' => 'CRM',
            'action' => 'ELIMINA_WIFI',
            'content' => $content,
            'user' => $user,
            'description' => 'Eliminato account WiFi',
            'origin' => 'crm.wifi_wifi_accounts',
            'destination' => 'Modifica automatica a DB Radius',);
        $this->sendLog($params);


    }

    function MailUserWiFiAccount($bean)
    {

       if (!isset($bean->fetched_row['id'])) {

        $lead = BeanFactory::getBean('Leads',$bean->wifi_wifi_accounts_leadsleads_ida);
        $company = BeanFactory::getBean('Accounts',$bean->wifi_wifi_accounts_accountsaccounts_ida);

        $company_email = $company->email1;
        $company_name = $company->name;
        $email = $lead->email1;
        $name = $lead->first_name. ' ' . $lead->last_name;

            switch ($bean->center) {
                    case 'reg': $centermail = 'regolo@pickcenter.com'; break;
                    case 'boe'; $centermail = 'boezio@pickcenter.com'; break;
                    case 'eur': $centermail = 'eur@pickcenter.com'; break;
                    case 'all': $centermail = 'info@pickcenter.com'; break;
            }

        $this->mailsend_account($email,$name,$company_email,$company_name,$bean->user_name,$bean->password,$bean->sim_uses,$centermail,$bean->wifi_wifi_accounts_leadsleads_ida);

        //$bean->description = $name. ' | ' .$email. ' | '.$centermail. ' | '.  $bean->user_name.  ' | '. $bean->password. ' | '.$bean->sim_uses. ' | ' .$company_email. ' | '. $company_name ;

        }
    }

    //stringa casuale
    function RandomString($length)
    {
        $string = "";
        $chars = "abcdefghijklmanopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789#*?!_-";
        $size = strlen($chars);
        for ($i = 0; $i < $length; $i++) {
            $string .= $chars[rand(0, $size - 1)];
        }
        return $string;
    }

    //assegna password casuale se non esplicitata o se uguale al nome utente
    function CreatePassword($bean) {

        if ($bean->password == '' || $bean->password == $bean->user_name) {
            $bean->password = $this->RandomString(8);

            global $current_user;
            $user = $current_user->first_name . " " . $current_user->last_name;
            $content = "Generata password casuale per account Wifi con username: " . $bean->user_name;
            $params = array(
                'app' => 'CRM',
                'action' => 'GENERAPASS_WIFI',
                'content' => $content,
                'user' => $user,
                'description' => 'Generata password casuale per account WiFi',
                'origin' => 'crm.wifi_wifi_accounts',
                'destination' => 'crm.wifi_wifi_accounts.password',);
            $this->sendLog($params);

        }

    }

    //aggiunge azienda all'account wifi se il contatto ne ha una associata
    function addAccount($bean) {

        $parentLead = BeanFactory::getBean('Leads',$bean->wifi_wifi_accounts_leadsleads_ida);
        $parentAccount = BeanFactory::getBean('Accounts',$parentLead->account_id_c);
        $bean->load_relationship('wifi_wifi_accounts_accounts');
        $bean->wifi_wifi_accounts_accounts->add($parentAccount);

    }


}