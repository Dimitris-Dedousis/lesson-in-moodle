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
 * Strings for component 'repository_onedrive', language 'el', version '4.3'.
 *
 * @package     repository_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Πρόσβαση';
$string['both'] = 'Εσωτερικά και εξωτερικά';
$string['cachedef_folder'] = 'Τα αναγνωριστικά αρχείων OneDrive για φακέλους του λογαριασμού συστήματος';
$string['configplugin'] = 'Ρυθμίσεις του πρόσθετου OneDrive';
$string['confirmimportskydrive'] = 'Είστε βέβαιοι ότι θέλετε να εισαγάγετε όλα τα αρχεία από το χώρο αποθήκευσης του Microsoft SkyDrive στο χώρο αποθήκευσης του Microsoft OneDrive; Ο χώρος αποθήκευσης του Microsoft OneDrive πρέπει να ρυθμιστεί και να λειτουργήσει για να συνεχίσουν τα αρχεία που εισάγονται να λειτουργούν όπως πριν. Προειδοποίηση: Αυτή η ενέργεια δεν μπορεί να αναιρεθεί!';
$string['defaultreturntype'] = 'Προεπιλεγμένος τύπος επιστροφής';
$string['external'] = 'Εξωτερικά (μόνο σύνδεσμοι αποθηκευμένοι στο Moodle)';
$string['fileoptions'] = 'Οι τύποι και οι προεπιλογές για τα επιστραφέντα αρχεία μπορούν να διαμορφωθούν εδώ. Σημειώστε ότι όλα τα αρχεία που συνδέονται εξωτερικά θα ενημερωθούν ώστε ο ιδιοκτήτης να είναι ο λογαριασμός συστήματος του Moodle.';
$string['importskydrivefiles'] = 'Εισαγωγή αρχείων από το αποθετήριο Microsoft SkyDrive';
$string['internal'] = 'Εσωτερικά (αρχεία αποθηκευμένα στο Moodle)';
$string['issuer'] = 'Υπηρεσία OAuth 2';
$string['issuer_help'] = 'Επιλέξτε την υπηρεσία OAuth 2 που έχει ρυθμιστεί ώστε να μιλάει στο API OneDrive. Εάν η υπηρεσία δεν υπάρχει ακόμα, θα πρέπει να δημιουργηθεί.';
$string['mysitenotfound'] = 'Δεν έχετε συνδεθεί ποτέ πριν στο OneDrive. Πρέπει να συνδεθείτε στο OneDrive τουλάχιστον μια φορά πριν να μπορέσει να χρησιμοποιηθεί στο Moodle.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Σύνδεσμος ρυθμίσεων υπηρεσιών OAuth 2">Ρύθμιση υπηρεσιών OAuth 2</a>';
$string['onedrive:view'] = 'Δείτε το αποθετήριο OneDrive';
$string['owner'] = 'Ιδιοκτησία: {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = 'Το αποθετήριο Microsoft OneDrive αποθηκεύει εξουσιοδοτήσεις προσωρινής πρόσβασης και μεταδίδει δεδομένα χρήστη από το Moodle στο απομακρυσμένο σύστημα.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'Το αναγνωριστικό στοιχείου του Microsoft OneDrive με εξουσιοδότηση προσωρινής πρόσβασης.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'Το αναγνωριστικό άδειας της εξουσιοδότησης προσωρινής πρόσβασης του Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'Η ημερομηνία/ώρα δημιουργίας εξουσιοδότησης προσωρινής πρόσβασης του Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'Η ημερομηνία/ώρα τροποποίησης εξουσιοδότησης προσωρινής πρόσβασης του Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'Το αναγνωριστικό του χρήστη που τροποποιεί την εξουσιοδότηση προσωρινής πρόσβασης του Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'Το κείμενο αναζήτησης ερωτήματος χρήστη του αποθετηρίου Microsoft OneDrive.';
$string['removetempaccesstask'] = 'Κατάργηση προσωρινής πρόσβασης εγγραφής από ελεγχόμενους συνδέσμους';
$string['searchfor'] = 'Αναζήτηση για {$a}';
$string['servicenotenabled'] = 'Η πρόσβαση δεν έχει ρυθμιστεί.';
$string['skydrivefilesexist'] = 'Αρχεία που βρέθηκαν στο αποθετήριο Microsoft SkyDrive. Αυτό το αποθετήριο θεωρείται ξεπερασμένο από τη Microsoft, ωστόσο τα αρχεία ενδέχεται να εισαχθούν στο χώρο αποθήκευσης του Microsoft OneDrive.';
$string['skydrivefilesimported'] = 'Όλα τα αρχεία εισήχθησαν από το αποθετήριο Microsoft SkyDrive.';
$string['skydrivefilesnotimported'] = 'Ορισμένα αρχεία δεν ήταν δυνατό να εισαχθούν από το αποθετήριο Microsoft SkyDrive.';
$string['supportedreturntypes'] = 'Υποστηριζόμενα αρχεία';
