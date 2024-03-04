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
 * Strings for component 'adaptivequiz', language 'el_uni', version '4.2'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptsallowed_help'] = 'Φορές που μπορεί ένας φοιτητής να προσπαθήσει αυτή τη δραστηριότητα';
$string['browsersecurity_help'] = 'Αν επιλεγεί «Αναδυόμενο παράθυρο πλήρους οθόνης με κάποια JavaScript ασφάλεια»,

* Το κουίζ θα ξεκινήσει μόνο αν ο φοιτητής έχει περιηγητή με ενεργοποιημένη την JavaScript
* Το κουίζ θα εμφανιστεί σε ένα αναδυόμενο παράθυρο πλήρους οθόνης, το οποίο θα καλύπτει όλα τα άλλα παράθυρα και δεν θα έχει επιλογές πλόηγησης
* Οι εκπαιδευόμενοι περιορίζονται, όσο αυτό είναι δυνατό, από τη χρήση λειτουργιών όπως η αντιγραφή και η επικόλληση';
$string['maximumquestions_help'] = 'Ο μέγιστος αριθμός των ερωτήσεων που μπορεί να προσπαθήσει ο φοιτητής';
$string['minimumquestions_help'] = 'Ο ελάχιστος αριθμός των ερωτήσεων που πρέπει να προσπαθήσει ο φοιτητής';
$string['modulename_help'] = 'Η δραστηριότητα προσαρμόσιμου κουίζ επιτρέπει σε έναν καθηγητή να δημιουργήσει κουίζ που μετρούν αποτελεσματικά τις ικανότητες του δοκιμαζόμενου. Τα προσαραρμόσιμα κουίζ αποτελούνται από ερωτήσεις που επιλέγονται από την τράπεζα ερωτήσεων και που διαθέτουν ετικέτα με βαθμολογία της δυσκολίας τους. Οι ερωτήσεις έχουν επιλεγεί για να ταιριάζουν με το εκτιμώμενο επίπεδο ικανότητας του τρέχοντος δοκιμαζόμενου. Αν ο δοκιμαζόμενος επιτυγχάνει σε μια ερώτηση, παρουσιάζεται στη συνέχεια μια πιο απαιτητική ερώτηση. Αν ο δοκιμαζόμενος απαντά σε μια ερώτηση λανθασμένα, παρουσιάζεται στη συνέχεια μια λιγότερο απαιτητική  ερώτηση. Η τεχνική αυτή θα εξελιχθεί σε μια ακολουθία ερωτήσεων που συγκλίνει στο επίπεδο της πραγματικής ικανότητας του δοκιμαζόμενου. Το κουίζ σταματά όταν η ικανότητα του δοκιμαζόμενου καθοριστεί με την απαιτούμενη ακρίβεια.

Η δραστηριότητα αυτή ταιριάζει καλύτερα για τον καθορισμό ενός μέτρου ικανότητας σε όλο το εύρος μιας μονοδιάστατης κλίμακας. Ενώ η κλίμακα μπορεί να είναι πολύ ευρεία, οι ερωτήσεις πρέπει όλες να παρέχουν ένα μέτρο ικανότητας ή επάρκειας στην ίδια κλίμακα. Σε μια δοκιμασία κατάταξης για παράδειγμα, ερωτήσεις χαμηλά στην κλίμακα που ακόμη και αρχάριοι να είναι σε θέση να απαντήσουν σωστά, πρέπει επίσης να μπορούν να  απαντηθούν από έμπειρους, ενώ ερωτήσεις υψηλότερα στην κλίμακα πρέπει να μπορούν να απαντηθούν μόνο από έμπειρους ή με πολύ τύχη. Ερωτήσεις που δεν διακρίνουν μεταξύ δοκιμαζόμενων διαφορετικών ικανοτήτων θα κάνουν τη δοκιμασία αναποτελεσματική και μπορεί να παρέχουν αδιευκρίνιστα αποτελέσματα. ασαφή αποτελέσματα.

Οι ερωτήσεις που χρησιμοποιούνται στο προσαρμόσιμο κουίζ πρέπει

* να βαθμολογούνται αυτόματα ως σωστές/λανθασμένες
* να διαθέτουν ετικέτα με βαθμολογία της δυσκολίας τους με χρήση του «adpq_» που θα ακολουθείται από έναν θετικό ακέραιο που είναι μέσα στα όρια για το κουίζ

Το προσαρμόσιμο κουίζ μπορεί να ρυθμιστεί να

* καθορίζει το εύρος βαθμού-δυσκολίας-ερώτησης/βαθμός-ικανότητας-χρηστών προς μέτρηση. 1-10, 1-16 και 1-100 είναι παραδείγματα έγκυρων περιοχών.
* καθορίζει την ακρίβεια που απαιτείται για να τερματίσει το κουίζ. Σφάλμα 5% στην μέτρηση της ικανότητας είναι συχνά ένας κατάλληλος κανόνας τερματισμού
* απαιτεί ένα ελάχιστο αριθμό ερωτήσεων προς απάντηση
* απαιτεί ένα μέγιστο αριθμό ερωτήσεων προς απάντηση

Αυτή η περιγραφή και η διαδικασία δοκιμασίας σε αυτή τη δραστηριότητα βασίζεται στο: <a href="http://www.rasch.org/memo69.pdf">Υπολογιστής-προσαρμοστική δοκιμή: Μια μεθοδολογία της οποίας έχει έρθει η ώρα</a> του John Michael Linacre, Ph.D. MESA Psychometric Laboratory (ψυχομετρικό εργαστήριο) - Πανεπιστήμιο του Σικάγου. Μνημόνιο MESA Αρ. 69.';
$string['requirepassword_help'] = 'Απαιτείται κωδικός πρόσβασης από τους φοιτητές πριν προσπαθήσουν την προσπάθειά τους';
$string['startinglevel_help'] = 'Όταν ο φοιτητής ξεκινά μια προσπάθεια, η δραστηριότητα θα επιλέγει τυχαία μια ερώτηση που ταιριάζει στο επίπεδο δυσκολίας';
