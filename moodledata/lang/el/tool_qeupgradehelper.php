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
 * Strings for component 'tool_qeupgradehelper', language 'el', version '4.3'.
 *
 * @package     tool_qeupgradehelper
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ενέργεια';
$string['alreadydone'] = 'Όλες έχουν ήδη μετατραπεί';
$string['areyousure'] = 'Είστε βέβαιοι?';
$string['areyousuremessage'] = 'Επιθυμείτε να προχωρήσετε στην αναβάθμιση όλων των {$a->numtoconvert} προσπαθειών στο κουίζ «{$a->name}» στο μάθημα «{$a->shortname}»;';
$string['areyousureresetmessage'] = 'Το κουίζ «{$a->name}» στο μάθημα «{$a->shortname}» έχει {$a->totalattempts} προσπάθειες, εκ των οποίων {$a->convertedattempts} αναβαθμίστηκαν από το παλιό σύστημα. Από αυτές, οι {$a->resettableattempts} μπορούν να επαναρχικοποιηθούν, για μεταγενέστερη μετατροπή. Θέλετε να προχωρήσετε σε αυτό;';
$string['attemptstoconvert'] = 'Προσπάθειες που χρειάζονται μετατροπή';
$string['backtoindex'] = 'Επιστροφή στην κύρια σελίδα';
$string['conversioncomplete'] = 'Η μετατροπή ολοκληρώθηκε';
$string['convertattempts'] = 'Μετατροπή προσπαθειών';
$string['convertedattempts'] = 'Προσπάθειες που μετατράπηκαν';
$string['convertquiz'] = 'Μετατροπή προσπαθειών...';
$string['cronenabled'] = 'Η εντολή cron είναι ενεργοποιημένη';
$string['croninstructions'] = 'Μπορείτε να ενεργοποιήσετε τη δυνατότητα του cron να ολοκληρώσει αυτόματα την αναβάθμιση μετά από μια μερική αναβάθμιση. Το Cron θα τρέξει μεταξύ καθορισμένων ωρών μέσα στην ημέρα (ανάλογα με την τοπική ώρα του εξυπηρετητή). Κάθε φορά που τρέχει το cron, θα επεξεργαστεί αρκετές προσπάθειες έως ότου χρησιμοποιηθεί το καθορισμένο μέγιστο όριο χρόνου. Τότε θα σταματήσει και θα περιμένει για την επόμενη εκτέλεση cron. Ακόμα κι αν έχετε ρυθμίσει το cron, δεν θα κάνει τίποτα αν δεν ανιχνεύσει ότι έχει ολοκληρωθεί η κύρια αναβάθμιση στο 2.1.';
$string['cronprocesingtime'] = 'Χρόνος επεξεργασίας κάθε εκτέλεσης του cron';
$string['cronsetup'] = 'Ρυθμίσεις cron';
$string['cronsetup_desc'] = 'Μπορείτε να ρυθμίσετε τις παραμέτρους του cron για να ολοκληρώσετε αυτόματα την αναβάθμιση των δεδομένων των προσπαθειών κουίζ.';
$string['cronstarthour'] = 'Ώρα έναρξης';
$string['cronstophour'] = 'Ώρα λήξης';
$string['extracttestcase'] = 'Εξαγωγή δοκιμαστικής περίπτωσης';
$string['extracttestcase_desc'] = 'Χρησιμοποιήστε παραδείγματα δεδομένων από τη βάση δεδομένων για να δημιουργήσετε μονάδες δοκιμών που μπορούν να χρησιμοποιηθούν για τη δοκιμή της αναβάθμισης.';
$string['gotoindex'] = 'Επιστροφή στη λίστα των κουίζ που μπορούν να αναβαθμιστούν';
$string['gotoquizreport'] = 'Μεταβείτε στις αναφορές για αυτό το κουίζ, για να ελέγξετε την αναβάθμιση';
$string['gotoresetlink'] = 'Μετάβαση στη λίστα των κουίζ που μπορούν να επαναφερθούν';
$string['includedintheupgrade'] = 'Συμπερίληψη στην αναβάθμιση;';
$string['invalidquizid'] = 'Μη έγκυρο αναγνωριστικό για κουίζ. Είτε το κουίζ δεν υπάρχει, είτε δεν έχει καμία προσπάθεια προς μετατροπή.';
$string['listpreupgrade'] = 'Λίστα κουίζ και προσπαθειών';
$string['listpreupgrade_desc'] = 'Αυτό θα προβάλει μια αναφορά όλων των κουίζ στο σύστημα και πόσες απόπειρες έχουν. Αυτό θα σας δώσει μια ιδέα για το εύρος της αναβάθμισης που πρέπει να κάνετε.';
$string['listpreupgradeintro'] = 'Αυτός είναι ο αριθμός των προσπαθειών κουίζ που θα πρέπει να υποβληθούν σε επεξεργασία κατά την αναβάθμιση του ιστότοπού σας. Μερικές δεκάδες χιλιάδες δεν ανησυχεί. Πολύ πέρα από αυτό και πρέπει να σκεφτείτε πόσο καιρό θα λάβει η αναβάθμιση.';
$string['listtodo'] = 'Λίστα κουίζ ακόμη προς αναβάθμιση';
$string['listtodo_desc'] = 'Αυτό θα δείχνει μια αναφορά όλων των κουίζ στο σύστημα (εάν υπάρχουν) που έχουν προσπάθειες που πρέπει ακόμα να αναβαθμιστούν στη νέα μηχανή ερωτήσεων.';
$string['listtodointro'] = 'Αυτά είναι όλα τα κουίζ με δεδομένα προσπαθειών που πρέπει ακόμα να μετατραπούν. Μπορείτε να μετατρέψετε τις προσπάθειες κάνοντας κλικ στο σύνδεσμο.';
$string['listupgraded'] = 'Λίστα ήδη αναβαθμισμένων κουίζ που μπορούν να επαναφερθούν';
$string['listupgraded_desc'] = 'Αυτό θα εμφανίσει μια αναφορά όλων των κουίζ στο σύστημα των οποίων οι προσπάθειες έχουν αναβαθμιστεί και όπου τα παλαιά δεδομένα είναι ακόμα παρόντα, ώστε η αναβάθμιση να μπορεί να επαναρχικοποιηθεί και να επαναληφθεί.';
$string['listupgradedintro'] = 'Αυτά είναι όλα τα κουίζ που έχουν προσπάθειες που αναβαθμίστηκαν και όπου τα παλιά δεδομένα κάθε προσπάθειας εξακολουθούν να υπάρχουν, ώστε να μπορούν να επαναρχικοποιηθούν και να γίνει εκ νέου η αναβάθμιση.';
$string['noquizattempts'] = 'Ο ιστότοπός σας δεν έχει καμία απολύτως προσπάθεια κουίζ!';
$string['nothingupgradedyet'] = 'Καθόλου αναβαθμισμένες προσπάθειες που μπορούν να επαναρχικοποιηθούν';
$string['notupgradedsiterequired'] = 'Αυτό το σενάριο μπορεί να λειτουργήσει μόνο πριν αναβαθμιστεί ο ιστότοπος.';
$string['numberofattempts'] = 'Αριθμός προσπαθειών κουίζ';
$string['oldsitedetected'] = 'Αυτός φαίνεται να είναι ένας ιστότοπος που δεν έχει ακόμη αναβαθμιστεί για να συμπεριλάβει τη νέα μηχανή ερωτήσεων.';
$string['outof'] = '{$a->some} από {$a->total}';
$string['pluginname'] = 'Βοήθεια αναβάθμισης μηχανής ερωτήσεων';
$string['pretendupgrade'] = 'Πραγματοποιήστε μια προσωρινή δοκιμαστική εκτέλεση της αναβάθμισης προσπαθειών';
$string['pretendupgrade_desc'] = 'Η αναβάθμιση κάνει τρία πράγματα: Φορτώνει τα υπάρχοντα δεδομένα από τη βάση δεδομένων, τα μετασχηματίζει και μετά γράφει τα μετασχηματισμένα δεδομένα στην Β.Δ.. Αυτό το σενάριο θα δοκιμάσει τα πρώτα δύο μέρη της διαδικασίας.';
$string['questionsessions'] = 'Σύνοδοι ερωτήσεων';
$string['quizid'] = 'Αναγνωριστικό κουίζ';
$string['quizupgrade'] = 'Κατάσταση αναβάθμισης κουίζ';
$string['quizzesthatcanbereset'] = 'Τα παρακάτω κουίζ έχουν προσπάθειες που έχουν μετατραπεί και  τις οποίες ίσως μπορείτε να επαναρχικοποιήσετε';
$string['quizzestobeupgraded'] = 'Όλα τα κουίζ με προσπάθειες';
$string['quizzeswithunconverted'] = 'Τα παρακάτω κουίζ έχουν προσπάθειες που πρέπει να μετατραπούν';
$string['resetcomplete'] = 'Η επαναρχικοποίηση ολοκληρώθηκε';
$string['resetquiz'] = 'Προσπάθειες επαναρχικοποίησης...';
$string['resettingquizattempts'] = 'Επαναρχικοποίηση των προσπαθειών κουίζ';
$string['resettingquizattemptsprogress'] = 'Επαναρχικοποίηση προσπάθειας {$a->done} / {$a->outof}';
$string['upgradedsitedetected'] = 'Αυτό φαίνεται να είναι ένας ιστότοπος που έχει αναβαθμιστεί για να συμπεριλαμβάνει τη νέα μηχανή ερωτήσεων.';
$string['upgradedsiterequired'] = 'Αυτό το σενάριο μπορεί να λειτουργήσει μόνο μετά την αναβάθμιση του ιστοτόπου.';
$string['upgradingquizattempts'] = 'Αναβάθμιση των προσπαθειών για το κουίζ «{$a->name}» στο μάθημα «{$a->shortname}»';
$string['veryoldattemtps'] = 'Ο ιστότοπός σας έχει {$a} προσπάθειες κουίζ που ποτέ δεν ενημερώθηκαν πλήρως κατά τη διάρκεια της αναβάθμισης από το Moodle 1.4 στο Moodle 1.5. Αυτές οι προσπάθειες θα αντιμετωπιστούν πριν από την κύρια αναβάθμιση. Θα πρέπει να λάβετε υπόψιν τον επιπλέον χρόνο που απαιτείται για αυτό.';
