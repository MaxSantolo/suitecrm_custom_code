<?php
/**
 * Created by PhpStorm.
 * User: msantolo
 * Date: 10/01/2019
 * Time: 11:34
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class AccountsLH {

    function MailFE($bean) {

        require_once 'include/SugarPHPMailer.php';
        require_once 'custom/Extension/application/PickLog.php';
        $mailbody = "";

        if  (!empty($bean->fetched_row)
            &&
            ($bean->fetched_row['pec_c'] != $bean->pec_c || $bean->fetched_row['cdu_c'] != $bean->cdu_c)
            &&
            $bean->account_type == 'Customer'
            &&
            ($bean->pec_c != "" || $bean->cdu_c != ''))

        {

            $mailbody .= "
                <strong>Azienda: </strong>{$bean->name}<br>
                <strong>Codice Fiscale: </strong>{$bean->lead_cf_c}<br>
                <strong>Partita IVA: </strong>{$bean->lead_piva_c}<br>
                <strong>PEC: </strong>{$bean->pec_c}<br>
                <strong>CDU: </strong>{$bean->cdu_c}<br>
            ";

        } else return;

        if ($mailbody != "") {
            $mail = new SugarPHPMailer();
            $mail->CharSet="UTF-8";
            $mail->isSMTP();
            $mail->From = 'info@pickcenter.com';
            $mail->FromName = 'Pick Center Sistema Informativo';
            $mail->Subject = 'Comunicazione PEC / CDU per fatturazione elettronica';
            $mail->Body_html = from_html($mailbody);
            $mail->Body = wordwrap($mailbody,1000);
            $mail->isHTML(true);
            $mail->addAddress('raffaella@pickcenter.com','RN');
            $mail->addAddress('ilaria@pickcenter.com','IQ');
            //$mail->addAddress('max@swhub.io','MS');
            $mail->prepForOutbound();
            $mail->setMailerForSystem();

            if (!$mail->send()) {
                $content = "Errore invio mail PEC/CDU: " . $mail->ErrorInfo;
                $subject = $content;
                $this->sendErrorMail($content);
            } else {
                $content = $mailbody;
                $subject = "Inviate PEC e CDU amministrazione dal CRM";
            }

            global $current_user;
            $user = $current_user->first_name . " " . $current_user->last_name;

            $params = array(
                'app' => 'CRM',
                'action' => 'COMUNICAZIONE_PEC_CDU_A',
                'content' => $content,
                'user' => $user,
                'description' => $subject,
                'origin' => 'crm.leads.pec_c, crm.leads.cdu_c',
                'destination' => 'email a Ilaria e Raffaella',);
            sendLog($params);



        }
    }

    function sendErrorMail($content,$subject="Errore nell'invio di PEC e CDU") {

        require_once 'include/SugarPHPMailer.php';

        $mail = new SugarPHPMailer();
        $mail->CharSet="UTF-8";
        $mail->isSMTP();
        $mail->From = 'info@pickcenter.com';
        $mail->FromName = 'Pick Center CRM';
        $mail->Subject = $subject;

        $mail->Body_html = from_html($content);
        $mail->Body = wordwrap($content,1000);
        $mail->isHTML(true);
        $mail->addAddress('cea@pickcenter.com','LC');
        $mail->addAddress('bucci@pickcenter.com','MB');
        $mail->addAddress('roberta@pickcenter.com','RG');
        $mail->addAddress('max@swhub.io','MS'); //for testing

        $mail->prepForOutbound();
        $mail->setMailerForSystem();

        $mail->send();

    }


}