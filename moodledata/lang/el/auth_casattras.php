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
 * Strings for component 'auth_casattras', language 'el', version '4.3'.
 *
 * @package     auth_casattras
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_casattras_auth_logo'] = 'Λογότυπο μεθόδου αυθεντικοποίησης';
$string['auth_casattras_auth_logo_description'] = 'Παροχή ενός λογότυπου για την μέθοδο αυθεντικοποίησης CAS που να είναι γνώριμο στους χρήστες σας.';
$string['auth_casattras_auth_name'] = 'Όνομα μεθόδου αυθεντικοποίησης';
$string['auth_casattras_auth_name_description'] = 'Παροχή ενός ονόματος για την μέθοδο αυθεντικοποίησης CAS που να είναι γνώριμο στους χρήστες σας.';
$string['auth_casattras_auth_service'] = 'CAS';
$string['auth_casattras_baseuri'] = 'Διεύθυνση URI του εξυπηρετητή (τίποτα αν δεν υπάρχει baseUri)<br />Για παράδειγμα, εάν ο εξυπηρετητής CAS αποκρίνεται στο login.example.edu/cas/ τότε<br />cas_baseuri = cas/';
$string['auth_casattras_baseuri_key'] = 'Βασική διεύθυνση URI';
$string['auth_casattras_casversion'] = 'Έκδοση πρωτοκόλλου CAS';
$string['auth_casattras_certificate_check'] = 'Επιλέξτε «ναι» εάν θέλετε να επικυρώσετε το πιστοποιητικό εξυπηρετητή';
$string['auth_casattras_certificate_check_key'] = 'Επικύρωση εξυπηρετητή';
$string['auth_casattras_certificate_path'] = 'Μονοπάτι του αρχείου αλυσίδας CA (Μορφότυπος PEM) για επικύρωση του πιστοποιητικού εξυπηρετητή';
$string['auth_casattras_certificate_path_empty'] = 'Εάν ενεργοποιήσετε την επικύρωση εξυπηρετητή, πρέπει να καθορίσετε ένα μονοπάτι πιστοποιητικού';
$string['auth_casattras_certificate_path_key'] = 'Μονοπάτι πιστοποιητικού';
$string['auth_casattras_hostname'] = 'Όνομα κεντρικού Η/Υ του εξυπηρετητή CAS <br />π.χ.: login.example.edu';
$string['auth_casattras_hostname_key'] = 'ΌνομαΥπολογιστή';
$string['auth_casattras_logout_return_url'] = 'Δώστε τη διεύθυνση URL στην οποία θα ανακατευθυνθούν οι χρήστες CAS μετά την αποσύνδεση.<br />Εάν αφεθεί κενό, οι χρήστες θα ανακατευθυνθούν στην τοποθεσία στην οποία θα τους ανακατευθύνει το moodle.';
$string['auth_casattras_logout_return_url_key'] = 'Εναλλακτική διεύθυνση URL επιστροφής μετά την αποσύνδεση';
$string['auth_casattras_logoutcas'] = 'Επιλέξτε «ναι» αν θέλετε να αποσυνδέεστε από το CAS όταν αποσυνδέεστε από το Moodle';
$string['auth_casattras_logoutcas_key'] = 'Επιλογή αποσύνδεσης CAS';
$string['auth_casattras_multiauth'] = 'Επιλέξτε «ναι» αν θέλετε να έχετε πολλαπλή-αυθεντικοποίηση (CAS + άλλη αυθεντικοποίηση)';
$string['auth_casattras_multiauth_key'] = 'Πολλαπλή-αυθεντικοποίηση';
$string['auth_casattras_port'] = 'Θύρα του εξυπηρετητή CAS';
$string['auth_casattras_port_key'] = 'Θύρα';
$string['auth_casattras_proxycas'] = 'Επιλέξτε «ναι» αν χρησιμοποιείτε CAS σε κατάσταση λειτουργίας με διακομιστής μεσολάβησης';
$string['auth_casattras_proxycas_key'] = 'Κατάσταση λειτουργίας με διακομιστή μεσολάβησης';
$string['auth_casattras_server_settings'] = 'Ρυθμίσεις εξυπηρετητή CAS';
$string['cas_conflict_warning'] = 'Μη συμβατό με «Εξυπηρετητή CAS (SSO)», απενεργοποιήστε πρώτα αυτό το πρόσθετο.';
$string['convert_authtype'] = 'Μετατροπή:';
$string['convert_authtype_cas_to_casattras'] = 'Μετατροπή {$a->cas} χρηστών από «Εξυπηρετητή CAS (SSO)» σε «Εξυπηρετητή CAS (SSO) έκδοσης με ιδιοχαρακτηριστικά χρήστη»';
$string['convert_authtype_casattras_to_cas'] = 'Μετατροπή {$a->casattras} χρηστών από «Εξυπηρετητή CAS (SSO) έκδοσης με ιδιοχαρακτηριστικά χρήστη» σε «Εξυπηρετητή CAS (SSO)»';
$string['convert_authtype_none'] = 'Καμία μετατροπή';
$string['convert_user_auth_types'] = 'Μετατροπή τύπων αυθεντικοποίησης (προαιρετικά)';
$string['pluginname'] = 'Εξυπηρετητής CAS (SSO) έκδοσης με ιδιοχαρακτηριστικά χρήστη';
$string['privacy:metadata'] = 'Το πρόσθετο αυθεντικοποίησης ιδιοχαρακτηριστικών CAS δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
