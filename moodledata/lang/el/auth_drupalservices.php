<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_drupalservices', language 'el', version '4.3'.
 *
 * @package     auth_drupalservices
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_drupalservices_cohort_view'] = 'Το μονοπάτι προς την εμφάνιση συνόλου χρηστών.';
$string['auth_drupalservices_cohort_view_key'] = 'Μονοπάτι εμφάνισης συνόλου χρηστών.';
$string['auth_drupalservices_cohorts'] = 'Δημιουργήστε σύνολα χρηστών βλέποντας μια προσαρμοσμένη προβολή στο Drupal.';
$string['auth_drupalservices_cohorts_key'] = 'Δημιουργία συνόλων χρηστών';
$string['auth_drupalservices_host_uri_key'] = 'Διεύθυνση URL ιστοτόπου Drupal';
$string['auth_drupalservices_logout_drupal_key'] = 'Αποσύνδεση από το Drupal όταν γίνεται αποσύνδεση από το Moodle';
$string['auth_drupalservices_remote_pw'] = 'Αυτός είναι ο απομακρυσμένος κωδικός πρόσβασης χρήστη.';
$string['auth_drupalservices_remote_pw_key'] = 'Κωδικός πρόσβασης απομακρυσμένου χρήστη';
$string['auth_drupalservices_remote_user_key'] = 'Όνομα χρήστη απομακρυσμένου χρήστη';
$string['auth_drupalservicescantinsert'] = 'Σφάλμα βάσης δεδομένων του Moodle. Αδυναμία εισαγωγής χρήστη: {$a}';
$string['auth_drupalservicescantupdate'] = 'Σφάλμα βάσης δεδομένων του Moodle. Αδυναμία ενημέρωσης χρήστη: {$a}';
$string['auth_drupalservicescreateaccount'] = 'Αδυναμία δημιουργίας λογαριασμού Moodle για τον/την χρήστη {$a}';
$string['auth_drupalservicesdeleteuser'] = 'Ο χρήστης «{$a->name}» με αναγνωριστικό «{$a->id}» διεγράφη';
$string['auth_drupalservicesdeleteusererror'] = 'Σφάλμα κατά τη διαγραφή του χρήστη «{$a}»';
$string['auth_drupalservicesnorecords'] = 'Η βάση δεδομένων του Drupal δεν έχει καμία εγγραφή χρήστη!';
$string['auth_drupalservicesremove_user_key'] = 'Χρήστης Drupal που έχει διαγραφεί';
$string['auth_drupalservicessuspenduser'] = 'Χρήστης σε αναστολή {$a->name} με αναγνωριστικό {$a->id}';
$string['auth_drupalservicessuspendusererror'] = 'Σφάλμα κατά την αναστολή χρήστη {$a}';
$string['auth_drupalservicesupdateuser'] = 'Ενημερωμένος χρήστης {$a}';
$string['auth_drupalservicesuserstoremove'] = 'Καταχωρήσεις χρήστη προς διαγραφή: {$a}';
$string['auth_drupalservicesuserstoupdate'] = 'Καταχωρήσεις χρήστη προς ενημέρωση: {$a}';
$string['fieldmap'] = 'Τιμή Drupal για {$a}';
$string['pluginname'] = 'Υπηρεσίες Drupal';
$string['servicesettings_header'] = 'Ρυθμίσεις υπηρεσίας ιστού Drupal';
$string['servicesettings_header_info'] = 'Οι ακόλουθες ρυθμίσεις λένε στο Moodle πως να επικοινωνήσει με τον ιστότοπο Drupal για να εξασφαλίσει SSO.';
$string['servicestatus_header'] = 'Κατάσταση υπηρεσίας Drupal';
$string['userfieldmap_header'] = 'Αντιστοιχίσεις πεδίων χρήστη';
$string['userimport_header'] = 'Ρυθμίσεις εισαγωγής/μετεγκατάστασης χρήστη';
