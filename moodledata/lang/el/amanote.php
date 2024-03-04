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
 * Strings for component 'amanote', language 'el', version '4.3'.
 *
 * @package     amanote
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['amanote:addinstance'] = 'Προσθήκη νέου αρχείου με δυνατότητα επισημειώσεων';
$string['amanote:view'] = 'Άνοιγμα αρχείου με δυνατότητα επισημειώσεων';
$string['amanotecontent'] = 'Αρχεία και υποκατάλογοι/υποφάκελοι';
$string['amanotedetails_sizedate'] = '{$a->size} {$a->date}';
$string['amanotedetails_sizetype'] = '{$a->size} {$a->type}';
$string['amanotedetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['amanotedetails_typedate'] = '{$a->type} {$a->date}';
$string['autosaveperiod'] = 'Περίοδος αυτόματης αποθήκευσης';
$string['autosaveperiod_help'] = 'Ρύθμιση της χρονικής περιόδου σε λεπτά, μεταξύ αυτόματων αποθηκεύσεων (ελάχιστο: 1, μέγιστο: 30). Ρύθμιση της περιόδου σε 0 σημαίνει ΚΑΘΟΛΟΥ αυτόματη αποθήκευση.';
$string['cannotcreatetoken'] = 'Άνοιγμα στο Amanote';
$string['cannotcreatetoken_help'] = 'Δεν έχετε τα δικαιώματα να ανοίξετε το έγγραφο στο Amanote.';
$string['clicktoamanote'] = 'Άνοιγμα στο Amanote';
$string['clicktodownloadfile'] = 'Λήψη αρχείου PDF';
$string['clicktodownloadnotes'] = 'Λήψη αρχείου με επισημειώσεις';
$string['clicktoopen'] = 'Άνοιγμα σε νέα καρτέλα';
$string['dnduploadamanote'] = 'Δημιουργία αρχείου με δυνατότητα επισημειώσεων';
$string['downloadfile'] = 'Λήψη';
$string['guestsarenotallowed'] = 'Άνοιγμα σε Amanote';
$string['guestsarenotallowed_help'] = 'Οι επισκέπτες δεν επιτρέπεται να ανοίξουν έναν πόρο στο Amanote. Παρακαλούμε, συνδεθείτε για να αποκτήσετε πρόσβαση σε αυτό το χαρακτηριστικό/δυνατότητα.';
$string['importantinformationdescription'] = 'Για να λειτουργήσει σωστά το άρθρωμα, παρακαλούμε, ελέγξτε ότι πληρούνται οι ακόλουθες απαιτήσεις στον Moodle ιστότοπό σας:

1. Οι υπηρεσίες ιστού είναι ενεργοποιημένες (Διαχείριση ιστοτόπου > Προχωρημένα χαρακτηριστικά)

2. Η *υπηρεσία Ιστού για κινητά Moodle* είναι ενεργοποιημένη (Διαχείριση ιστοτόπου > Πρόσθετα > Υπηρεσίες Ιστού > Εξωτερικές υπηρεσίες)

3. Το πρωτόκολλο REST (Διαχείριση ιστοτόπου > Πρόσθετα > Υπηρεσίες Ιστού > Διαχείριση πρωτοκόλλων) είναι ενεργοποιημένο

4. Η δυνατότητα *webservice/rest:use* επιτρέπεται για *αυθεντικοποιημένους χρήστες* (Διαχείριση ιστοτόπου > Χρήστες > Δικαιώματα > Ορισμός ρόλων > Αυθεντικοποιημένοι χρήστες > Διαχείριση ρόλων)';
$string['importantinformationheading'] = 'Σημαντικές πληροφορίες εγκατάστασης';
$string['key'] = 'Κλειδί ενεργοποίησης';
$string['key_help'] = 'Αυτό το κλειδί απαιτείται για προχωρημένα χαρακτηριστικά όπως π.χ. Δημιουργός Podcast.';
$string['modifieddate'] = 'Τροποποιήθηκε {$a}';
$string['modulename'] = 'Αρχείο με δυνατότητα επισημειώσεων';
$string['modulename_help'] = 'Ένα αρχείο με δυνατότητα επισημειώσεων είναι ένας πόρος μαθήματος (PDF) που οι μαθητές μπορούν να ανοίξουν στο Amanote© για να κάνουν σαφείς και δομημένες σημειώσεις πάνω σε αυτό.

Οι μαθητές έχουν τη δυνατότητα να:

* Ανοίξουν τον πόρο του μαθήματος σε μια νέα καρτέλα του περιηγητή
* Κατεβάσουν τον πόρο του μαθήματος στον υπολογιστή τους
* Ανοίξουν τον πόρο του μαθήματος στο Amanote© και να ξεκινήσουν την προσθήκη σημειώσεων

Όταν οι μαθητές ανοίξουν τον πόρο μαθήματος στο Amanote©, έχουν τη δυνατότητα να ξεκινήσουν μια έξυπνη προσθήκη σημειώσεων. Οι σημειώσεις τους συνδέονται με τις διάφορες σελίδες του εγγράφου. Επιπλέον, μπορούν να εμπλουτίσουν τις σημειώσεις τους με επισημειώσεις, σχέδια, φόρμουλες/τύπους, εικόνες, φωτο-επισημάνσεις σε διαφάνειες, κλπ.

Όταν οι μαθητές αποθηκεύουν τις σημειώσεις τους, αυτές αποθηκεύονται μέσα στον πόρο στον προσωπικό τους χώρο. Την επόμενη φορά που θα ανοίξουν τον πόρο, θα μπορούν να δουν τις σημειώσεις τους.';
$string['modulenameplural'] = 'Αρχεία με δυνατότητα επισημειώσεων';
$string['nonotestodownload'] = 'Λήψη αρχείου με επισημειώσεις';
$string['nonotestodownload_help'] = 'Δεν έχετε αποθηκευμένες σημειώσεις για αυτό το έγγραφο ακόμα.';
$string['openinamanote'] = 'Άνοιγμα στο Amanote';
$string['openinamanote_help'] = 'Το άνοιγμα του εγγράφου στο Amanote επιτρέπει να ξεκινήσετε ή να συνεχίσετε να κρατάτε σημειώσεις.';
$string['openpodcastcreator'] = 'Άνοιγμα δημιουργού podcast';
$string['openpodcastcreator_help'] = 'Ο δημιουργός podcast σας επιτρέπει να δημιουργείτε εγγραφή ενός νέου podcast ή να τροποποιείτε ένα υπάρχον.';
$string['openstatistics'] = 'Άνοιγμα στατιστικών';
$string['openstatistics_help'] = 'Αυτό σας δίνει πρόσβαση στα στατιστικά χρήσης του μαθητή και ανατροφοδότησης σε αυτόν τον πόρο.';
$string['pluginadministration'] = 'Διαχείριση του αρθρώματος Amanote';
$string['pluginname'] = 'Amanote';
$string['podcastcreatorbutton'] = 'Άνοιγμα Δημιουργού Podcast';
$string['preventdownload'] = 'Αποτροπή λήψης PDF';
$string['preventdownload_desc'] = 'Αποτρέψτε τους χρήστες από το να κατεβάσουν το αρχείο προέλευσης.';
$string['printintro'] = 'Εμφάνιση περιγραφής πόρου';
$string['printintroexplain'] = 'Εμφάνιση περιγραφής πόρου κάτω από το περιεχόμενο;';
$string['privacy:metadata'] = 'Προκειμένου να ενσωματωθούν στο Amanote, ορισμένα δεδομένα χρήστη πρέπει να σταλούν στην εφαρμογή πελάτη Amanote (απομακρυσμένο σύστημα).';
$string['privacy:metadata:email'] = 'Η διεύθυνση ηλε.ταχυδρομείου του χρήστη αποστέλλεται στο απομακρυσμένο σύστημα για καλύτερη εμπειρία χρήστη (κοινή χρήση σημειώσεων, ειδοποίηση κ.λπ.).';
$string['privacy:metadata:fullname'] = 'Το πλήρες όνομα του χρήστη αποστέλλεται στο απομακρυσμένο σύστημα για να επιτρέψει μια βελτιωμένη εμπειρία χρήστη.';
$string['privacy:metadata:subsystem:corefiles'] = 'Τα αρχεία (PDF, AMA) αποθηκεύονται με χρήση του συστήματος αρχείων του Moodle.';
$string['privacy:metadata:userid'] = 'Το αναγνωριστικό χρήστη αποστέλλεται από το Moodle στο Amanote για να επιταχύνει την διαδικασία αυθεντικοποίησης.';
$string['saveinprivate'] = 'Αποθήκευση σημειώσεων σε ιδιωτικά αρχεία';
$string['saveinprivate_help'] = 'Αποθήκευση του αρχείου με επισημειώσεις στα ιδιωτικά αρχεία του χρήστη. Αυτό θα επιτρέψει στο χρήστη να μπορεί να δει τις σημειώσεις του την επόμενη φορά που θα ανοίξει το σχολιασμένο αρχείο στο Amanote.';
$string['servicenotavailable'] = 'Άνοιγμα σε Amanote';
$string['servicenotavailable_help'] = 'Η υπηρεσία δεν είναι διαθέσιμη. Παρακαλούμε, επικοινωνήστε με τον διαχειριστή ιστοτόπου.';
$string['showdate'] = 'Εμφάνιση ημερομηνίας ανεβάσματος/τροποποίησης';
$string['showdate_desc'] = 'Εμφάνιση ημερομηνίας ανεβάσματος/τροποποίησης στην σελίδα μαθήματος;';
$string['showdate_help'] = 'Εμφάνιση της ημερομηνίας ανεβάσματος/τροποποίησης μεταξύ συνδέσμων προς τους πόρους.';
$string['showsize'] = 'Εμφάνιση μεγέθους';
$string['showsize_desc'] = 'Εμφάνιση μεγέθους αρχείου στη σελίδα του μαθήματος;';
$string['showsize_help'] = 'Εμφάνιση του μεγέθους του αρχείου, π.χ. ως «3.1 MB», μεταξύ συνδέσμων προς τον πόρο.';
$string['statisticsbutton'] = 'Άνοιγμα μαθησιακής αναλυτικής';
$string['unexpectederror'] = 'Άνοιγμα σε Amanote';
$string['unexpectederror_help'] = 'Παρουσιάστηκε ένα μη αναμενόμενο σφάλμα, ο πόρος δεν μπορεί να ανοίξει σε Amanote. Επικοινωνήστε με το διαχειριστή του ιστοτόπου.';
$string['unsecureconnection'] = 'ΠΡΟΣΟΧΗ! Η σύνδεσή σας δεν είναι ασφαλής.';
$string['uploadeddate'] = 'Ανέβηκε στις {$a}';
