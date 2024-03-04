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
 * Strings for component 'enrol_autoenrol', language 'el', version '4.3'.
 *
 * @package     enrol_autoenrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysenrol'] = 'Πάντα εγγραφή';
$string['alwaysenrol_help'] = 'Εάν δηλωθεί Ναι, το πρόσθετο θα εγγράφει πάντα χρήστες, ακόμη κι αν έχουν ήδη πρόσβαση στο μάθημα μέσω άλλης μεθόδου.';
$string['auto'] = 'Αυτόματα';
$string['auto_desc'] = 'Αυτή η ομάδα συμμετεχόντων δημιουργήθηκε αυτόματα από το πρόσθετο Auto Enrol. Αν αφαιρέσετε το πρόσθετο Auto Enrol, τότε αυτή η ομάδα συμμετεχόντων θα διαγραφεί.';
$string['autoenrol:config'] = 'Διαμόρφωση αυτόματων εγγραφών';
$string['autoenrol:unenrol'] = 'Ο χρήστης μπορεί να ακυρώσει την αυτο-εγγραφή του';
$string['autoenrol:unenrolself'] = 'Ο χρήστης μπορεί να ακυρώσει την εγγραφή του αν έγινε αυτόματα λόγω της πρόσβασής του';
$string['autounenrolaction'] = 'Ενέργεια αυτόματης ακύρωσης εγγραφής';
$string['autounenrolaction_help'] = 'Επιλέξτε τη ενέργεια που θα εκτελεστεί όταν ο κανόνας φιλτραρίσματος χρήστη δεν ισχύει πλέον. Παρακαλούμε έχετε υπόψη ότι ορισμένα δεδομένα χρήστη και ρυθμίσεις εξαλείφονται από το μάθημα κατά την ακύρωση εγγραφής στο μάθημα.';
$string['cannotenrol'] = 'Δεν μπορείτε να εγγραφείτε σε αυτό το μάθημα με χρήση αυτο-εγγραφής.';
$string['config'] = 'Ρυθμίσεις';
$string['confirmbulkdeleteenrolment'] = 'Σίγουρα θέλετε να διαγραφούν αυτές οι εγγραφές χρηστών;';
$string['countlimit'] = 'Όριο';
$string['customwelcomemessage'] = 'Προσαρμοσμένο μήνυμα καλωσορίσματος';
$string['defaultrole'] = 'Προεπιλεγμένη ανάθεση ρόλου';
$string['defaultrole_desc'] = 'Επιλέξτε ρόλο που πρέπει να εκχωρηθεί στους χρήστες κατά τη διάρκεια των αυτόματων εγγραφών';
$string['deleteselectedusers'] = 'Διαγραφή επιλεγμένων εγγραφών χρηστών';
$string['editselectedusers'] = 'Επεξεργασία επιλεγμένων εγγραφών χρηστών';
$string['emptyfield'] = 'Κενό πεδίο {$a}';
$string['enrolenddate'] = 'Ημερομηνία τέλους';
$string['enrolenddate_help'] = 'Εάν ενεργοποιηθεί, οι χρήστες θα εγγραφούν μόνο μέχρι αυτήν την ημερομηνία.';
$string['enrolperiod'] = 'Διάρκεια εγγραφής';
$string['enrolstartdate'] = 'Ημερομηνία έναρξης';
$string['enrolstartdate_help'] = 'Εάν ενεργοποιηθεί, οι χρήστες θα εγγραφούν από αυτήν την ημερομηνία και μετά.';
$string['expirynotifyenroller'] = 'Διδάσκων μόνο';
$string['filter'] = 'Να επιτρέπονται μόνο';
$string['filtering'] = 'Φιλτράρισμα χρηστών';
$string['g_auth'] = 'Μέθοδος αυθεντικοποίησης';
$string['g_dept'] = 'Τμήμα';
$string['g_email'] = 'Διεύθυνση ηλε.ταχυδρομείου';
$string['g_inst'] = 'Ίδρυμα';
$string['g_lang'] = 'Γλώσσα';
$string['g_none'] = 'Επιλογή...';
$string['general'] = 'Γενικά';
$string['groupname'] = 'Όνομα ομάδας';
$string['groupon'] = 'Ομαδοποίηση κατά';
$string['groupon_help'] = 'Η αυτόματη εγγραφή μπορεί να προσθέσει αυτόματα χρήστες σε μια ομάδα όταν εγγράφονται βάσει ενός από αυτά τα πεδία χρήστη.';
$string['instancename'] = 'Προσαρμοσμένη ταμπέλα';
$string['m_course'] = 'Φόρτωση του μαθήματος';
$string['m_site'] = 'Σύνδεση με τον ιστότοπο';
$string['method'] = 'Εγγραφή όταν';
$string['pluginname'] = 'Αυτόματη εγγραφή';
$string['removegroups'] = 'Διαγραφή ομάδων';
$string['removegroups_desc'] = 'Όταν διαγράφεται ένα στιγμιότυπο εγγραφής, θα πρέπει να γίνεται και προσπάθεια διαγραφής των ομάδων που έχει δημιουργήσει;';
$string['role'] = 'Προεπιλεγμένος εκχωρούμενος ρόλος';
$string['role_help'] = 'Οι προχωρημένοι χρήστες μπορούν να χρησιμοποιήσουν αυτήν τη ρύθμιση για να αλλάξουν το επίπεδο δικαιωμάτων στο οποίο εγγράφονται οι χρήστες.';
$string['selfunenrol'] = 'Ενεργοποίηση αυτο-απεγγραφής';
$string['selfunenrol_help'] = 'Όταν οριστεί σε Ναι, οι χρήστες μπορούν να αυτο-απεγγραφούν.';
$string['sendcoursewelcomemessage'] = 'Αποστολή μηνύματος καλωσορίσματος μαθήματος';
$string['unenrolselfconfirm'] = 'Είστε βέβαιοι ότι θέλετε να ακυρώσετε την εγγραφή σας στο μάθημα «{$a}»; Μπορείτε να κάνετε εγγραφή στο μάθημα ξανά, αλλά μπορεί να χαθούν πληροφορίες όπως βαθμοί και υποβολές εργασιών.';
$string['unenrolusers'] = 'Ακύρωση εγγραφής χρηστών';
$string['warning'] = 'Προσοχή!';
$string['welcomemessage'] = 'Μήνυμα καλωσορίσματος';
$string['welcometocourse'] = 'Καλώς ορίσατε στο {$a}';
