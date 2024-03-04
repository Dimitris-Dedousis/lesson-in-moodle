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
 * Strings for component 'auth_azureb2c', language 'el', version '4.3'.
 *
 * @package     auth_azureb2c
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['azureb2c:manageconnectiondisconnect'] = 'Να επιτρέπεται Αποσύνδεση του OpenID';
$string['cfg_authendpoint_desc'] = 'Η διεύθυνση URI του τελικού σημείου Εξουσιοδότησης από τον πάροχο ταυτότητάς σας για χρήση.';
$string['cfg_authendpoint_key'] = 'Τελικό σημείο εξουσιοδότησης';
$string['cfg_autoappend_key'] = 'Αυτόματη-προσθήκη';
$string['cfg_azureb2cresource_key'] = 'Πόρος';
$string['cfg_clientid_key'] = 'Αναγνωριστικό πελάτη';
$string['cfg_clientsecret_key'] = 'Μυστικό πελάτη';
$string['cfg_customicon_key'] = 'Προσαρμοσμένο εικονίδιο';
$string['cfg_debugmode_key'] = 'Καταγραφή μηνυμάτων αποσφαλμάτωσης';
$string['cfg_domainhint_key'] = 'Υπόδειξη τομέα';
$string['cfg_err_invalidauthendpoint'] = 'Μη έγκυρο τελικό σημείο εξουσιοδότησης';
$string['cfg_err_invalidclientid'] = 'Μη έγκυρο αναγνωριστικό πελάτη';
$string['cfg_err_invalidclientsecret'] = 'Μη έγκυρο μυστικό πελάτη';
$string['cfg_err_invalidtokenendpoint'] = 'Μη έγκυρο τελικό σημείο κουπονιού';
$string['cfg_icon_desc'] = 'Ένα εικονίδιο προς εμφάνιση δίπλα από το όνομα παρόχου στην σελίδα σύνδεσης.';
$string['cfg_icon_key'] = 'Εικονίδιο';
$string['cfg_iconalt_check'] = 'Εικονίδιο σημαδιού ελέγχου';
$string['cfg_iconalt_go'] = 'Πράσινος κύκλος';
$string['cfg_iconalt_group'] = 'Εικονίδιο ομάδας';
$string['cfg_iconalt_group2'] = 'Εναλλακτικό εικονίδιο ομάδας';
$string['cfg_iconalt_key'] = 'Εικονίδιο κλειδιού';
$string['cfg_iconalt_lock'] = 'Εικονίδιο λουκέτου';
$string['cfg_iconalt_locked'] = 'Εικονίδιο κλειδώματος';
$string['cfg_iconalt_mnet'] = 'Εικονίδιο MNET';
$string['cfg_iconalt_o365'] = 'Εικονίδιο Azure AD B2C';
$string['cfg_iconalt_plus'] = 'Εικονίδιο συν';
$string['cfg_iconalt_rightarrow'] = 'Εικονίδιο βέλους προς δεξιά';
$string['cfg_iconalt_stop'] = 'Κόκκινος κύκλος';
$string['cfg_iconalt_user'] = 'Εικονίδιο χρήστη';
$string['cfg_iconalt_user2'] = 'Εναλλακτικό εικονίδιο χρήστη';
$string['cfg_iconalt_userlock'] = 'Χρήστης με εικονίδιο λουκέτου';
$string['cfg_loginflow_authcode'] = 'Ροή κώδικα εξουσιοδότησης (συνιστάται)';
$string['cfg_loginflow_key'] = 'Μέθοδος αυθεντικοποίησης';
$string['cfg_opname_key'] = 'Όνομα παρόχου';
$string['cfg_redirecturi_key'] = 'Διεύθυνση URL ανακατεύθυνσης';
$string['cfg_resetpassendpoint_desc'] = 'Η διεύθυνση URI του τελικού σημείου για ξεχασμένο κωδικό πρόσβασης από το Azure AD B2C, που χρησιμοποιείται για επαναφορά του κωδικού πρόσβασης';
$string['cfg_resetpassendpoint_key'] = 'Διεύθυνση URI τελικού σημείου ξεχασμένων κωδικών πρόσβασης';
$string['cfg_scope_key'] = 'Εμβέλεια Azure B2C';
$string['cfg_tokenendpoint_key'] = 'Τελικό σημείο κουπονιού';
$string['cfg_userrestrictions_key'] = 'Περιορισμοί χρήστη';
$string['errorauthdisconnectemptypassword'] = 'Ο κωδικός πρόσβασης δεν μπορεί να είναι κενός';
$string['errorauthdisconnectemptyusername'] = 'Το όνομα χρήστη δεν μπορεί να είναι κενό';
$string['errorauthdisconnectinvalidmethod'] = 'Λήφθηκε μη έγκυρη μέθοδος σύνδεσης.';
$string['errorauthdisconnectnewmethod'] = 'Χρήση μεθόδου σύνδεσης';
$string['errorauthdisconnectusernameexists'] = 'Αυτό το όνομα χρήστη χρησιμοποιείται ήδη. Παρακαλούμε, επιλέξτε κάποιο άλλο.';
$string['errorauthgeneral'] = 'Παρουσιάστηκε ένα πρόβλημα κατά την σύνδεσή σας. Παρακαλούμε, επικοινωνήστε με τον διαχειριστή σας για βοήθεια.';
$string['errorauthinvalididtoken'] = 'Λήφθηκε μη έγκυρο id_token (αναγνωριστικό_κουπόνι)';
$string['errorauthnohttpclient'] = 'Παρακαλούμε, ορίστε έναν πελάτη HTTP.';
$string['errorauthunknownstate'] = 'Άγνωστη κατάσταση.';
$string['errorazureb2cclientinsecuretokenendpoint'] = 'Το τελικό σημείο κουπονιού πρέπει να χρησιμοποιεί SSL/TLS για αυτό.';
$string['errorazureb2cclientinvalidendpoint'] = 'Λήφθηκε μη έγκυρη διεύθυνση URI τελικού σημείου.';
$string['errorjwtcouldnotreadheader'] = 'Αδυναμία ανάγνωσης επικεφαλίδας JWT';
$string['errorjwtinvalidheader'] = 'Μη έγκυρη επικεφαλίδα JWT';
$string['errorjwtmalformed'] = 'Λήφθηκε JWT με μη ορθή μορφή.';
$string['errorucpinvalidaction'] = 'Λήφθηκε μη έγκυρη ενέργεια.';
$string['event_debug'] = 'Μήνυμα αποσφαλμάτωσης';
$string['gender'] = 'Φύλο';
$string['lang'] = 'Γλώσσα';
$string['pluginname'] = 'Σύνδεση Azure AD B2C';
$string['privacy:metadata:auth_azureb2c'] = 'Αυθεντικοποίηση σύνδεσης Azure AD B2C';
$string['privacy:metadata:auth_azureb2c_prevlogin:method'] = 'Η προηγούμενη μέθοδος σύνδεσης';
$string['privacy:metadata:auth_azureb2c_prevlogin:password'] = 'Το πεδίο προηγούμενου (κρυπτογραφημένου) κωδικού πρόσβασης χρήστη.';
$string['privacy:metadata:auth_azureb2c_prevlogin:userid'] = 'Το αναγνωριστικό του χρήστη Moodle';
$string['privacy:metadata:auth_azureb2c_token'] = 'Κουπόνια σύνδεσης Azure AD B2C';
$string['privacy:metadata:auth_azureb2c_token:authcode'] = 'Ο κωδικός αυθεντικοποίησης για το κουπόνι';
$string['privacy:metadata:auth_azureb2c_token:azureb2cuniqid'] = 'Το μοναδικό αναγνωριστικό χρήστη azureb2c.';
$string['privacy:metadata:auth_azureb2c_token:azureb2cusername'] = 'Το όνομα χρήστη του χρήστη του azureb2c';
$string['privacy:metadata:auth_azureb2c_token:expiry'] = 'Η λήξη του κουπονιού';
$string['privacy:metadata:auth_azureb2c_token:idtoken'] = 'Το κουπόνι του αναγνωριστικού κουπονιού';
$string['privacy:metadata:auth_azureb2c_token:refreshtoken'] = 'Η ανανέωση κουπονιού του κουπονιού';
$string['privacy:metadata:auth_azureb2c_token:resource'] = 'Ο πόρος του κουπονιου';
$string['privacy:metadata:auth_azureb2c_token:scope'] = 'Η εμβέλεια του κουπονιου';
$string['privacy:metadata:auth_azureb2c_token:token'] = 'Το κουπόνι';
$string['privacy:metadata:auth_azureb2c_token:userid'] = 'Το αναγνωριστικό χρήστη του χρήστη Moodle';
$string['privacy:metadata:auth_azureb2c_token:username'] = 'Το όνομα χρήστη του χρήστη Moodle';
$string['source_of_info'] = 'Πώς μάθατε για εμάς;';
$string['ucp_disconnect_details'] = 'Αυτό θα αποσυνδέσει τον λογαριασμό σας στο Moodle από {$a}. Θα χρειαστεί να δημιουργήσετε ένα όνομα χρήστη και έναν κωδικό πρόσβασης για να συνδεθείτε στο Moodle.';
$string['ucp_disconnect_title'] = '{$a} Αποσύνδεση';
$string['ucp_login_start'] = 'Ξεκινήστε να χρησιμοποιείτε το {$a} για να συνδεθείτε στο Moodle';
$string['ucp_login_start_desc'] = 'Αυτό θα πραγματοποιήσει μια εναλλαγή στον λογαριασμό σας ώστε να χρησιμοποιεί το {$a} για να συνδεθείτε στο Moodle. Μόλις ενεργοποιηθεί, θα συνδεθείτε χρησιμοποιώντας τα διαπιστευτήριά σας στο {$a} - το τρέχον όνομα χρήστη και ο κωδικός πρόσβασής σας στο Moodle δεν θα λειτουργούν. Μπορείτε να αποσυνδέσετε τον λογαριασμό σας ανά πάσα στιγμή και να επιστρέψετε στην κανονική σύνδεση.';
$string['ucp_login_status'] = 'Κατάσταση σύνδεσης του/της {$a}:';
$string['ucp_login_stop'] = 'Σταματήστε να χρησιμοποιείτε το {$a} για να συνδεθείτε στο Moodle';
$string['ucp_login_stop_desc'] = 'Αυτήν τη στιγμή χρησιμοποιείτε το {$a} για να συνδεθείτε στο Moodle. Αν πατήσετε «Διακοπή χρήσης σύνδεσης με {$a}» θα αποσυνδεθεί ο λογαριασμός σας στο Moodle από το {$a}. Δεν θα μπορείτε πλέον να συνδεθείτε στο Moodle με τον λογαριασμό σας στο {$a}. Θα σας ζητηθεί να δημιουργήσετε ένα όνομα χρήστη και έναν κωδικό πρόσβασης και πλέον θα μπορείτε να συνδεθείτε απευθείας στο Moodle.';
$string['ucp_o365accountconnected'] = 'Αυτός ο λογαριασμός Azure AD B2C είναι ήδη συνδεδεμένος με έναν άλλο λογαριασμό Moodle.';
$string['ucp_status_disabled'] = 'Απενεργοποιημένο';
$string['ucp_status_enabled'] = 'Ενεργοποιημένο';
$string['ucp_title'] = 'Διαχείριση {$a}';
