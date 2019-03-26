<?php
/**
 * Created by PhpStorm.
 * User: msantolo
 * Date: 19/10/2018
 * Time: 15:22
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class NotesLH

{

    static $already_ran = false;

    function changeParent($bean)

    {
       if ($bean->parent_type == 'Emails' && self::$already_ran == false) {

           self::$already_ran = true;
           $email = BeanFactory::getBean("Emails",$bean->parent_id);


           $note = BeanFactory::newBean('Notes');
           $note->name = 'Allegato';

           $note->parent_type = 'Leads';
           $note->parent_id = $email->parent_id;
           $note->file_mime_type = $bean->file_mime_type;
           $note->filename = $bean->filename;
           $original_file = $bean->id;


           $new_file = "xxxxxxxx-1234-1234-1234-xxxxxxxxxxxx";



           UploadFile::duplicate_file($original_file,$new_file,$new_file);

           $note->description = $original_file. " | " ;

           $note->save();





       }


            else return;






    }

}


