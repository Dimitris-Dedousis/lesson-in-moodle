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
 * Strings for component 'local_qeupgradehelper', language 'el', version '4.3'.
 *
 * @package     local_qeupgradehelper
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ενέργεια';
$string['alreadydone'] = 'Όλα έχουν ήδη μετατραπεί';
$string['areyousure'] = 'Είστε σίγουροι;';
$string['areyousuremessage'] = 'Επιθυμείτε να συνεχίσετε την αναβάθμιση όλων των {$a->numtoconvert} προσπαθειών στο κουίζ «{$a->name}» στο μάθημα «{$a->shortname}»;';
$string['areyousureresetmessage'] = 'Το κουίζ «{$a}» στο μάθημα «{$a}» έχει {$a->totalattempts} προσπάθειες, εκ των οποίων οι {$a->convertedattempts} αναβαθμίστηκαν από το παλιό σύστημα. Από αυτές, {$a->resettableattempts} μπορούν να επαναφερθούν, για μετατροπή ξανά αργότερα. Επιθυμείτε να συνεχίσετε με αυτό;';
$string['attemptstoconvert'] = 'Προσπάθειες που χρειάζονται μετατροπή';
$string['backtoindex'] = 'Επιστροφή στην κύρια σελίδα';
$string['conversioncomplete'] = 'Η μετατροπή ολοκληρώθηκε';
$string['convertattempts'] = 'Μετατροπή προσπαθειών';
$string['convertedattempts'] = 'Προσπάθειες που μετατράπηκαν';
$string['convertquiz'] = 'Μετατροπή προσπαθειών...';
$string['cronenabled'] = 'Η Cron είναι ενεργοποιημένη';
$string['croninstructions'] = 'Μπορείτε να ενεργοποιήσετε την εντολή χρονοπρογραμματισμού cron ώστε να ολοκληρώσει την αναβάθμιση μετά από μια μερική αναβάθμιση. Η cron θα εκτελεστεί μεταξύ ορισμένων ωρών της ημέρας (σύμφωνα με την τοπική ώρα του εξυπηρετητή). Κάθε φορά που θα εκτελείται η cron, θα επεξεργάζεται έναν αριθμό από προσπάθειες μέχρι να χρησιμοποιηθεί το Όριο χρόνου, κατόπιν θα σταματά και θα περιμένει την επόμενη εκτέλεση της cron. Ακόμη κι αν έχετε ρυθμίσει την cron, δεν θα κάνει τίποτα αν δεν ανιχνεύσει ότι η κύρια αναβάθμιση σε 2.1 έχει ολοκληρωθεί.';
$string['cronprocesingtime'] = 'Χρόνος επεξεργασίας κάθε εκτέλεσης cron';
$string['cronsetup'] = 'Ρυθμίσεις cron';
$string['cronsetup_desc'] = 'Μπορείτε να ρυθμίσετε την cron να ολοκληρώσει αυτόματα την αναβάθμιση των δεδομένων προσπάθειας κουίζ.';
$string['cronstarthour'] = 'Ώρα έναρξης';
$string['cronstophour'] = 'Ώρα λήξης';
$string['extracttestcase'] = 'Εξαγωγή δοκιμαστικής περίπτωσης';
$string['extracttestcase_desc'] = 'Χρήση δεδομένων υποδείγματος από την βάση δεδομένων για υποβοήθηση δημιουργίας ενοτήτων δοκιμής που μπορούν να χρησιμοποιηθούν για δοκιμή της αναβάθμισης.';
$string['gotoindex'] = 'Επιστροφή στη λίστα των κουίζ που μπορούν να αναβαθμιστούν';
$string['gotoquizreport'] = 'Μετάβαση στις αναφορές για αυτό το κουίζ, για έλεγχο της αναβάθμισης';
$string['gotoresetlink'] = 'Μετάβαση στη λίστα των κουίζ που μπορούν να επαναφερθούν';
$string['includedintheupgrade'] = 'Συμπεριλαμβάνεται στην αναβάθμιση;';
$string['invalidquizid'] = 'Μη έγκυρο αναγνωριστικό κουίζ. Είτε το κουίζ δεν υπάρχει, ή δεν έχει επιλογές προς μετατροπή.';
$string['listpreupgrade'] = 'Λίστα με τα κουίζ και τις προσπάθειες';
$string['listpreupgrade_desc'] = 'Αυτό θα εμφανίσει μια αναφορά όλων των κουίζ στο σύστημα και του πλήθους των προσπαθειών που έχουν γίνει. Αυτό θα σας δώσει μια ιδέα του εύρους της αναβάθμισης που πρόκειται να κάνετε.';
$string['listpreupgradeintro'] = 'Αυτοί είναι οι αριθμοί των προσπαθειών κουίζ που θα χρειαστεί να υποστούν επεξεργασία όταν αναβαθμίσετε τον ιστότοπό σας. Μερικές δεκάδες χιλιάδων δεν είναι πρόβλημα. Αρκετά πέρα από αυτό θα χρειαστεί να σκεφτείτε πόσο θα διαρκέσει η αναβάθμιση.';
$string['listtodo'] = 'Λίστα κουίζ ακόμη προς αναβάθμιση';
$string['listtodo_desc'] = 'Αυτό θα εμφανίσει μια αναφορά όλων των κουίζ στο σύστημα (αν υπάρχουν), για τα οποία έχουν γίνει προσπάθειες, που χρειάζονται ακόμη αναβάθμιση στην νέα μηχανή ερωτήσεων.';
$string['listtodointro'] = 'Αυτά είναι όλα τα κουίζ με δεδομένα προσπαθειών τα οποία χρειάζονται ακόμη μετατροπή. Μπορείτε ακόμη να μετατρέψετε τις προσπάθειες κάνοντας κλικ στο σύνδεσμο.';
$string['listupgraded'] = 'Λίστα ήδη αναβαθμισμένων κουίζ που μπορούν να επαναφερθούν';
$string['listupgraded_desc'] = 'Αυτό θα εμφανίσει μια αναφορά όλων των κουίζ στο σύστημα, των οποίων οι προσπάθειες έχουν αναβαθμιστεί, και τα παλιά δεδομένα είναι ακόμη παρόντα, οπότε η αναβάθμιση μπορεί να αρχικοποιηθεί ξανά και να ξαναγίνει.';
$string['listupgradedintro'] = 'Αυτά είναι όλα τα κουίζ που έχουν προσπάθειες που αναβαθμίστηκαν, και τα παλιά δεδομένα είναι ακόμη παρόντα, οπότε μπορούν να αρχικοποιηθούν, και η αναβάθμιση να ξαναγίνει.';
$string['noquizattempts'] = 'Ο ιστότοπός σας δεν έχει καμία απολύτως προσπάθεια κουίζ!';
$string['nothingupgradedyet'] = 'Δεν υπάρχουν αναβαθμισμένες προσπάθειες που να μπορούν να επαναφερθούν';
$string['notupgradedsiterequired'] = 'Αυτό το σενάριο μπορεί να λειτουργήσει μόνο πριν αναβαθμιστεί ο ιστότοπος.';
$string['numberofattempts'] = 'Αριθμός προσπαθειών κουίζ';
$string['oldsitedetected'] = 'Αυτός φαίνεται να είναι ένας ιστότοπος που δεν έχει ακόμη αναβαθμιστεί να συμπεριλαμβάνει τη νέα μηχανή ερωτήσεων.';
$string['outof'] = '{$a->some} από {$a->total}';
$string['pluginname'] = 'Βοηθός αναβάθμισης μηχανής ερωτήσεων';
$string['pretendupgrade'] = 'Δοκιμαστική εκτέλεση της αναβάθμισης προσπαθειών';
$string['pretendupgrade_desc'] = 'Η αναβάθμιση κάνει τρία πράγματα: Φόρτωση των δεδομένων που υπάρχουν στη βάση δεδομένων, κατόπιν εγγραφή των μετασχηματισμένων δεδομένων στην βάση δεδομένων. Αυτό το σενάριο θα ελέγξει τη σωστή λειτουργία των πρώτων δύο μερών της διαδικασίας.';
$string['questionsessions'] = 'Σύνοδοι ερωτήσεων';
$string['quizid'] = 'Αναγνωριστικό κουίζ';
$string['quizupgrade'] = 'Κατάσταση αναβάθμισης κουίζ';
$string['quizzesthatcanbereset'] = 'Τα ακόλουθα κουίζ έχουν προσπάθειες που έχουν μετατραπεί που μπορούν να επαναφερθούν';
$string['quizzestobeupgraded'] = 'Όλα τα κουίζ με προσπάθειες';
$string['quizzeswithunconverted'] = 'Τα ακόλουθα κουίζ έχουν προσπάθειες που χρειάζονται μετατροπή';
$string['resetcomplete'] = 'Η επαναφορά ολοκληρώθηκε';
$string['resetquiz'] = 'Επαναφορά προσπαθειών...';
$string['resettingquizattempts'] = 'Εκτέλεση επαναφοράς προσπαθειών...';
$string['resettingquizattemptsprogress'] = 'Επαναφορά προσπάθειας {$a->done} / {$a->outof}';
$string['upgradedsitedetected'] = 'Αυτός φαίνεται να είναι ένας ιστότοπος που έχει αναβαθμιστεί για να συμπεριλαμβάνει τη νέα μηχανή ερωτήσεων.';
$string['upgradedsiterequired'] = 'Αυτό το σενάριο μπορεί να λειτουργήσει μόνο αφού ο ιστότοπος έχει αναβαθμιστεί.';
$string['upgradingquizattempts'] = 'Αναβάθμιση των προσπαθειών για το κουίζ «{$a->name}» του μαθήματος «{$a->shortname}»';
$string['veryoldattemtps'] = 'Ο ιστότοπός σας έχει {$a} προσπάθειες κουίζ που δεν ενημερώθηκαν ποτέ πλήρως κατά την αναβάθμιση από το Moodle 1.4 στο Moodle 1.5. Θα γίνει διαχείριση αυτών των προσπαθειών πριν την κύρια αναβάθμιση. Θα πρέπει να συνυπολογίσετε τον επιπλέον χρόνο που απαιτείται για αυτό.';
